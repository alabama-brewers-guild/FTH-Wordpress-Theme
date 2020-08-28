/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Hours:</td>'+
            '<td>'+d.hours+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Call-in Number:</td>'+
            '<td>'+d.phone+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Email-in Address:</td>'+
            '<td>'+d.email+
        '</tr>'+
        '<tr>'+
            '<td>Ordering URL</td>'+
            '<td>'+d.url+
        '</tr>'+
    '</table>';
}
 
jQuery(document).ready(function() {
    var table = jQuery('#covid19').DataTable( {
        "ajax": "https://spreadsheets.google.com/feeds/list/1llc6H5Mirp6UhYJcztyL6j0B8OICBq9xQjEjtQi4HIY/od6/public/values?alt=json",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "salary" }
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    jQuery('#example tbody').on('click', 'td.details-control', function () {
        var tr = jQuery(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );