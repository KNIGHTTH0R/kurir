var register = {
    idSubmitButton : '#registerSubmitButton',
    idAlertSignin : '#alertRegister',
    idAlertSigninMessage : '#alertRegisterMessage',
    idFormRegister : '#form-register',
    init : function () {
        $(document).on('submit', register.idFormRegister, function(e){
            e.preventDefault();
            app.ajax(
                $(this),
                BASE_URL + '/daftar', 'POST',
                $(this).serialize(),
                register.callbackBeforeSend,
                register.callbackError,
                register.callbackSuccess
            );
        });
    },
    callbackBeforeSend : function() {
        $(register.idSubmitButton).button('loading');
        $(register.idAlertSignin).hide();
    },
    callbackError : function(response) {
        $(register.idSubmitButton).button('reset');
        $(register.idAlertSigninMessage).html(app.messageToList(response.error.message));
        $(register.idAlertSignin).show();
        console.log(response);
    },
    callbackSuccess : function(response) {
        $(register.idSubmitButton).button('reset');
        $(register.idAlertSignin).hide();
        window.location = BASE_URL + '/masuk?register=1';
        console.log(response);
    }
};

$(function(){
    register.init();
});
//# sourceMappingURL=register.js.map
