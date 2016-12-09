var dashboard = {
    idButtonPickup : '#buttonpickupItem',
    idButtonDelivered : '#buttonDelivered',
    idAlertDashboard : '#alertDashboard',
    idAlertDashboardMessage : '#alertDashboardMessage',
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
