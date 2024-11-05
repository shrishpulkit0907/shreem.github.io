import utilities from './utilities.js';

$(function () {
    console.log("Document is ready"); // Debugging line
    $('#members-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: appconfig.transactions,
        columns: [
            { data: 'id', name: 'id',"visible": false},
            { data: 'receivername', name: 'receivername'},
            { data: 'dateofarrival', name: 'dateofarrival',render: function(data, type, full, meta) {
                var dateofarrival = full.dateofarrival;
                return utilities.formatActivatedate(data, dateofarrival);
            }},
            { data: 'dateofstart', name: 'dateofstart',render: function(data, type, full, meta) {
                var dateofstart = full.dateofstart;
                return utilities.formatActivatedate(data, dateofstart);
            }},
            { data: 'sendername', name: 'sendername'},
            { data: 'amount', name: 'amount'},
            { data: 'accountnumber', name: 'accountnumber'},
            { data: 'transactionid', name: 'transactionid'},
            // { data: 'status', name: 'status' ,render: function(data, type, full, meta) {
            //     var status = full.status;
            //     return utilities.formatMembershipStatus(data, status);
            // }},
            { data: 'id', name: 'action',render: function(data, type, full, meta) {
                var id = full.id;
                return utilities.formatActions(data, id);
            }},
        ],
        "order": [
            [0, 'desc']
        ]
    });
});
