var dashboard = {
    idButtonPickup : '#buttonpickupItem',
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
                dashboard.callbackPickupBeforeSend,
                dashboard.callbackPickupError,
                dashboard.callbackPickupSuccess
            );
        });
    },
    callbackPickupBeforeSend : function(_this) {
        _this.button('loading');
        $(dashboard.idAlertDashboard).hide();
    },
    callbackPickupError : function(response, _this) {
        _this.button('reset');
        $(dashboard.idAlertDashboardMessage).html(app.messageToList(response.error.message));
        $(dashboard.idAlertDashboard).show();
        console.log(response);
    },
    callbackPickupSuccess : function(response, _this) {
        _this.button('reset');
        $(dashboard.idAlertDashboard).hide();
        window.location = BASE_URL + '/dashboard';
        console.log(response);
    }
};

$(function(){
    dashboard.init();
});
