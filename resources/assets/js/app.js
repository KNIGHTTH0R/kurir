var app = {
    ajax : function (elm, url, type, data, callbackBeforeSend, callbackError, callbackSuccess, async) {
        async = typeof async === 'undefined' ? true : Boolean(async);
        $.ajax({
            url: url,
            type: type,
            data: data,
            dataType: 'json',
            async: async,
            beforeSend: function () {
                if (callbackBeforeSend != null) {
                    callbackBeforeSend(elm);
                }
            },
            error: function (request) {
                if (callbackError != null){
                    callbackError(request.responseJSON, elm);
                }
            },
            success: function (json) {
                if (callbackSuccess != null) {
                    callbackSuccess(json, elm);
                }
            }
        });
    },
    messageToList : function(message) {
        if (typeof message === 'object') {
            return '<ul><li>'.concat(message.join('<li>'));
        }

        return message;
    }
};

console.log(app);