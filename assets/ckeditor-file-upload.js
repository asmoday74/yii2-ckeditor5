class FileUploadAdapter {
	constructor(loader, config) {
		this.uploadUrl = config.get('uploadUrl') || 'upload';
		this.uploadField = config.get('uploadField') || 'upload';
		this.loader = loader;
	}

	upload() {
		return this.loader.file.then(file => new Promise((resolve, reject) => {
			this._initRequest();
			this._initListeners( resolve, reject, file );
			this._sendRequest( file );
		}));
	}

	abort() {
		if (this.xhr) {
			this.xhr.abort();
		}
	}

	_initRequest() {
		const xhr = this.xhr = new XMLHttpRequest();
		xhr.open('POST', this.uploadUrl, true);
		xhr.setRequestHeader('X-CSRF-Token', yii.getCsrfToken());
		xhr.responseType = 'json';
	}

	_initListeners(resolve, reject, file) {
		const xhr = this.xhr;
		const loader = this.loader;
		const genericErrorText = 'Could not upload file: '+file.name;

		xhr.addEventListener('error', () => reject(genericErrorText));
		xhr.addEventListener('abort', () => reject() );
		xhr.addEventListener('load', () => {
			const response = xhr.response;

			if ( !response || response.error ) {
				return reject( response && response.error ? response.error.message : genericErrorText );
			}

			resolve({
				default: response.url
			});
		});

		if (xhr.upload) {
			xhr.upload.addEventListener('progress', evt => {
				if (evt.lengthComputable) {
					loader.uploadTotal = evt.total;
					loader.uploaded = evt.loaded;
				}
			});
		}
	}

	_sendRequest(file) {
		const data = new FormData();
		data.append(this.uploadField, file);
		data.append(yii.getCsrfParam(), yii.getCsrfToken());
		this.xhr.send(data);
	}
}