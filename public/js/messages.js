define(['jquery', 'bootstrap-dialog'], function ($, bdialog) {
    var Messages = function () {
        var self = this;
        this.success = function (title, textContent, onclick) {
            bdialog.show({
                type: bdialog.TYPE_SUCCESS,
                title: '<spam class="glyphicon glyphicon-ok"></spam> ' + title,
                size: bdialog.SIZE_SMALL,
                message: $('<p>').append(textContent),
                buttons: [{
                        label: "cerrar",
                        title: "cerrar",
                        action: function (dialog) {
                            (typeof onclick === "function") ? onclick(dialog) : dialog.close();
                        }
                    }],
                close: function (dialog) {
                    (typeof onclick === "function") ? onclick(dialog) : dialog.close();
                }
            });
        };

        this.warning = function (title, textContent, onclick) {
            bdialog.show({
                type: bdialog.TYPE_WARNING,
                title: '<spam class="glyphicon glyphicon-alert"></spam> ' + title,
                size: bdialog.SIZE_SMALL,
                message: $('<p>').append(textContent),
                buttons: [{
                        label: "cerrar",
                        title: "cerrar",
                        action: function (dialog) {
                            (typeof onclick === "function") ? onclick(dialog) : dialog.close();
                        }
                    }],
                close: function (dialog) {
                    (typeof onclick === "function") ? onclick(dialog) : dialog.close();
                }
            });
        };

        this.error = function (title, textContent, onclick) {
            bdialog.show({
                type: bdialog.TYPE_DANGER,
                title: title,
                size: bdialog.SIZE_NORMAL,
                message: $('<p>').append(textContent),
                closable: false,
                draggable: true,
                buttons: [{
                        label: "cerrar",
                        title: "cerrar",
                        action: function (dialog) {
                            (typeof onclick === "function") ? onclick(dialog) : dialog.close();
                        }
                    }],
                close: function (dialog) {
                    console.log("close");
                    (typeof onclick === "function") ? onclick(dialog) : dialog.close();
                }
            });
            return false;
        };

        this.manageError = function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            if (parseInt(jqXHR.status) === 401)
                return sys.gotToLogin();

            if (parseInt(jqXHR.status) === 401)
                return self.error(jqXHR.statusText + " - " + jqXHR.status, jqXHR.responseText);

            if (jqXHR.responseJSON !== undefined) {
                if (jqXHR.responseJSON.error !== undefined)
                    return self.error(jqXHR.statusText + " - " + jqXHR.status, jqXHR.responseJSON.error, function () {
                    });
            }

            self.error(jqXHR.statusText + " - " + jqXHR.status, jqXHR.responseText, function (dialog) {
                dialog.close();
            });
        };
    };

    return new Messages();
});