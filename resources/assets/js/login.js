var login = {
    idSubmitButton : '#signinSubmitButton',
    idAlertSignin : '#alertSignin',
    idAlertSigninMessage : '#alertSigninMessage',
    init : function () {
        $(document).on('submit', '#form-signin', function(e){
            e.preventDefault();
            app.ajax(
                $(this),
                BASE_URL + '/masuk', 'POST',
                $(this).serialize(),
                login.callbackBeforeSend,
                login.callbackError,
                login.callbackSuccess
            );
        });
    },
    callbackBeforeSend : function() {
        $(login.idSubmitButton).button('loading');
        $(login.idAlertSignin).hide();
    },
    callbackError : function(response) {
        $(login.idSubmitButton).button('reset');
        $(login.idAlertSigninMessage).html(app.messageToList(response.error.message));
        $(login.idAlertSignin).show();
        console.log(response);
    },
    callbackSuccess : function(response) {
        $(login.idSubmitButton).button('reset');
        $(login.idAlertSignin).hide();
        window.location = BASE_URL + '/dashboard';
        console.log(response);
    }
};

$(function(){
    login.init();
});
//# sourceMappingURL=login.js.map
