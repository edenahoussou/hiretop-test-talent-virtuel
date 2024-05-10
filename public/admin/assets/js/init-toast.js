(function(NioApp, $){
    'use strict';

    const showToast = NioApp.Toast;
    const clearToast = toastr.clear;

    const toastOptions = {
        timeOut: 10000,
        extendedTimeOut: 10000,
        icon: true,
        position: 'bottom-right',
    };

    const eventHandlers = {
        'alert-message': 'info',
        'success-message': 'success',
        'warning-message': 'warning',
        'error-message': 'error',
    };

    for (const [eventName, type] of Object.entries(eventHandlers)) {
        window.addEventListener(eventName, ({ detail: { message } }) => {
            console.log(message);
            showToast(message, type, toastOptions);
        });
    }

})(NioApp, jQuery);