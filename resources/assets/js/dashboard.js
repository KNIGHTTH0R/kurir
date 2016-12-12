var dashboard = {
    idButtonPickup : '#buttonpickupItem',
    idButtonDelivered : '#buttonDelivered',
    idButtonAddItem : '#buttonAddItem',
    idAlertDashboard : '#alertDashboard',
    idAlertDashboardMessage : '#alertDashboardMessage',
    idFormAddItem : '#formAddItem',
    idAlertAdding : '#alertAdding',
    idAlertAddingMessage : '#alertAddingMessage',
    selectorElmShowProfile : '[data-name="showProfile"]',
    selectorElmShowProfileReceiver : '[data-name="showProfileReceiver"]',
    init : function () {
        $('#example').DataTable({
            stateSave: true
        });

        $(document).on('click', dashboard.idButtonPickup, function(e){
            e.preventDefault();
            app.ajax(
                $(this),
                BASE_URL + '/dashboard/item/pickup', 'POST',
                {
                    'id' : $(this).attr('data-id-item')
                },
                dashboard.callbackButtonClickBeforeSend,
                dashboard.callbackButtonClickError,
                dashboard.callbackButtonClickSuccess
            );
        });

        $(document).on('click', dashboard.idButtonDelivered, function(e){
            e.preventDefault();
            app.ajax(
                $(this),
                BASE_URL + '/dashboard/item/delivered', 'POST',
                {
                    'id' : $(this).attr('data-id-item')
                },
                dashboard.callbackButtonClickBeforeSend,
                dashboard.callbackButtonClickError,
                dashboard.callbackButtonClickSuccess
            );
        });

        $(document).on('submit', dashboard.idFormAddItem, function(e){
            e.preventDefault();
            app.ajax(
                $(this),
                BASE_URL + '/dashboard/item/store', 'POST',
                $(this).serialize(),
                dashboard.callbackSubmitFormAddBeforeSend,
                dashboard.callbackSubmitFormAddError,
                dashboard.callbackSubmitFormAddSuccess
            );
        });

        $(document).on('click', dashboard.selectorElmShowProfile, function(){
            app.ajax(
                $(this),
                BASE_URL + '/user/' + $(this).attr('data-user-id'),
                'GET',
                {},
                function(){},
                function(response){ console.log(response); },
                function(response) {
                    $('#profile-name').html(response.data.name);
                    $('#profile-email').html(response.data.email);
                    $('#profile-telp').html(response.data.phone_number);
                }
            );
        });

        $(document).on('click', dashboard.selectorElmShowProfileReceiver, function(){
            $('#profile-name').html($(this).attr('data-user-name'));
            $('#profile-email').html('-');
            $('#profile-telp').html($(this).attr('data-user-telp'));
        });


    },
    callbackSubmitFormAddBeforeSend : function() {
        $(dashboard.idButtonAddItem).button('loading');
        $(dashboard.idAlertAdding).hide();
    },
    callbackSubmitFormAddError : function(response) {
        $(dashboard.idButtonAddItem).button('reset');
        $(dashboard.idAlertAddingMessage).html(app.messageToList(response.error.message));
        $(dashboard.idAlertAdding).show();
        console.log(response);
    },
    callbackSubmitFormAddSuccess : function(response) {
        $(dashboard.idButtonAddItem).button('reset');
        $(dashboard.idAlertAdding).hide();
        window.location = BASE_URL + '/dashboard';
        console.log(response);
    },
    callbackButtonClickBeforeSend : function(_this) {
        _this.button('loading');
        $(dashboard.idAlertDashboard).hide();
    },
    callbackButtonClickError : function(response, _this) {
        _this.button('reset');
        $(dashboard.idAlertDashboardMessage).html(app.messageToList(response.error.message));
        $(dashboard.idAlertDashboard).show();
        console.log(response);
    },
    callbackButtonClickSuccess : function(response, _this) {
        _this.button('reset');
        $(dashboard.idAlertDashboard).hide();
        window.location = BASE_URL + '/dashboard';
        console.log(response);
    }
};

$(function(){
    dashboard.init();
});
