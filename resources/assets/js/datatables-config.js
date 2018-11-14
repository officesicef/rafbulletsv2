"use strict";

const datatablesConfig = {
    loadTable: function (translationJsonString) {
        jQuery.fn.dataTableExt.oSort["dateSort-desc"] = function(x, y) {
            x = x.split('.');
            y = y.split('.');

            x = new Date(x[2], x[1]-1, x[0]);
            y = new Date(y[2], y[1]-1, y[0]);

            if(x > y) {
                return 1
            }
            else if( x < y) {
                return -1;
            }
            else {
                return 0;
            }
        };

        jQuery.fn.dataTableExt.oSort["dateSort-asc"] = function (x, y) {
            return jQuery.fn.dataTableExt.oSort["dateSort-desc"](y, x);
        };

        jQuery.fn.dataTableExt.oSort["currencyAmountSort-desc"] = function(x, y) {
            x = Number(x.split(' ')[0]);
            y = Number(y.split(' ')[0]);

            if(x > y) {
                return 1
            }
            else if( x < y) {
                return -1;
            }
            else {
                return 0;
            }
        };

        jQuery.fn.dataTableExt.oSort["currencyAmountSort-asc"] = function (x, y) {
            return jQuery.fn.dataTableExt.oSort["currencyAmountSort-desc"](y, x);
        };

        $('table.datatable').DataTable(
            {
                "aoColumnDefs": [
                    {
                        "sType": "dateSort",
                        "bSortable": true,
                        "aTargets": ['date']
                    },
                    {
                        "sType": "currencyAmountSort",
                        "bSortable": true,
                        "aTargets": ['currency-amount']
                    }
                ],
                "language": translationJsonString
            }
        );
    }
};

