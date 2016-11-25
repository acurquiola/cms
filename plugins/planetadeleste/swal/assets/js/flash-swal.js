/**
 * Flash Swal ($.flashSwal)
 * Author: 1505
 * Licensed under the MIT license
 */

+(function ($) {
    var FlashSwal = function () {
    };

    FlashSwal.prototype.init = function () {
        // Do something
    };

    /**
     * Try to show ajax error messages
     *
     * @param event
     * @param message
     */
    FlashSwal.prototype.ajaxErrorMessage = function (event, message) {
        if (!message) return;

        var options = {};

        if($.type(document.swalGlobalOptions['ajaxErrorMessage']) != 'undefined') {
            options = document.swalGlobalOptions.ajaxErrorMessage;
        } else {
            options.showCancelButton = false;
        }

        options.title = message;

        $.flashSwal.swal(options);

        // Prevent the default alert() message
        event.preventDefault()
    };

    /**
     * Try to show ajax error
     *
     * @param event
     * @param obj
     * @param context
     * @param status
     */
    FlashSwal.prototype.ajaxError = function (event, obj, context, status) {
        var message, options = {};

        if($.type(document.swalGlobalOptions['ajaxError']) != 'undefined') {
            options = document.swalGlobalOptions.ajaxError;
        } else {
            options.showCancelButton = false;
        }

        if ($.isPlainObject(status)) {
            if (typeof status.responseJSON === 'undefined') {
                message = status.responseText;
                var responseText = status.responseText.match(/^\"(.*)\"\s/);
                if (responseText && typeof responseText == 'object') {
                    message = responseText[1];
                }
            } else {
                message = (status.responseJSON['X_OCTOBER_ERROR_MESSAGE']) ? status.responseJSON.X_OCTOBER_ERROR_MESSAGE : status.responseJSON.X_OCTOBER_ERROR_FIELDS;
            }

            if($.type(message) == 'string') {
                options.title = message;
            } else {
                $.extend(options, message);
            }

            $.flashSwal.swal(options);
        }
    };

    FlashSwal.prototype.ajaxConfirmMessage = function(event, message) {
        if (!message) return;
        var options = {};

        if($.type(document.swalGlobalOptions['ajaxConfirmMessage']) != 'undefined') {
            options = document.swalGlobalOptions.ajaxConfirmMessage;
        } else {
            options = {
                showCancelButton: true,
                confirmButtonClass: 'btn-primary'
            };
        }

        options.title = message;


        $.flashSwal.swal(options, function(isConfirm){
            isConfirm
                ? event.promise.resolve()
                : event.promise.reject()
        });

        event.preventDefault();
        return true
    };

    /**
     * Find for ajax messages
     */
    FlashSwal.prototype.showFlashMessages = function () {
        var options = {};

        if($.type(document.swalGlobalOptions['ajaxFlashMessages']) != 'undefined') {
            options = document.swalGlobalOptions.ajaxFlashMessages;
        }

        $.request('onShowFlashMsg', {
            success: function (data) {
                if (data != '') {
                    $.each(data.msgs, function (type, msg) {
                        var t = type == 'error' ? 'danger' : type;
                        data.options.title = msg;
                        data.options.type = type;

                        $.extend(options, data.options);
                        options.showCancelButton = false;

                        $.flashSwal.swal(options);
                    });
                }
            }
        });
    };

    /**
     * Show the Flash message
     *
     * @param options
     * @param callback function
     */
    FlashSwal.prototype.swal = function (options, callback) {
        if ($.type(options) == 'string') {
            options = {title: options};
        }

        if ($.type(document.swalFlash) != 'undefined') {
            //document.swalOptions.title = message;
            var swalOptions = ($.type(document.swalFlash) == 'string') ? JSON.parse(document.swalOptions) : document.swalOptions;
            options = $.extend({}, swalOptions, options);
        } 

        options = $.extend({type: 'error', timer: 10000}, options);
        if($.type(callback) != 'function')
            callback = null;

        swal(options, callback);
    };

    if ($.flashSwal === undefined)
        $.flashSwal = {};

    $.flashSwal = new FlashSwal();

    $(document).ready(function () {
        $.flashSwal.init();
    });

    $(window).on('load', function () {
        $.flashSwal.init()
    });


    $(window)
        .on('ajaxErrorMessage', $.flashSwal.ajaxErrorMessage)
        .on('ajaxError', $.flashSwal.ajaxError)
        .on('ajaxComplete', function (event, obj, context) {
            var findFlashMessages = true;
            if ($.isPlainObject(context)) {
                if($.isPlainObject(context['context'])){
                    if ($.type(context.context['handler']) == 'string') {
                        if(context.context.handler == 'onShowFlashMsg') {
                            findFlashMessages = false;
                        }
                    }
                    // Prevent messages on redirect from Ajax
                    if ($.isPlainObject(context.context['options'])) {
                        if($.type(context.context.options['redirect']) == 'string') {
                            findFlashMessages = false;
                        }
                    }
                }
                // Prevent messages on redirect
                if($.isPlainObject(context['responseJSON'])){
                    if($.type(context.responseJSON['X_OCTOBER_REDIRECT']) == 'string') {
                        findFlashMessages = false;
                    }
                }
            }

            if(findFlashMessages === true)
                $.flashSwal.showFlashMessages();
        })
        .on('ajaxConfirmMessage', $.flashSwal.ajaxConfirmMessage)
    ;

    $(document).ready(function () {
        $.flashSwal.showFlashMessages();

        $('[data-control="swal"]').on('click', function () {
            var $el = $(this),
                options = $el.data();

            if (options['title'] || options['originalTitle']) {
                options.title = options['title'] || options['originalTitle'];
            }

            if (options['modalTarget']) {
                options.text = $(options.modalTarget).html();
                options.html = true;
            }

            if (options['title']) {
                swal(options);
            }

        });
    });

})(jQuery);