function format ( d ) {
    return "<table id='example23' class='text-center' width='100%'>" +
                '<thead>' +
                    '<tr>' +
                        '<th>ID</th>' + 
                        '<th>Category</th>' +
                        '<th>Title</th>' +
                        '<th>Price</th>' +
                        '<th>Is Active</th>' +
                        '<th>Is Featured</th>' +
                        '<th>Featured Date</th>' +
                        '<th>Details</th>' +
                    '</tr>' +
                '</thead>' +
                '<tbody>' +
                    '<tr>' +
                        '<td>' + d.subrow_id + '</td>' + 
                        '<td>' + d.category + '</td>' +
                        '<td>' + d.u_title + '</td>' +
                        '<td>' + d.price + '</td>' +
                        '<td>' + d.is_active + '</td>' +
                        '<td>' + d.is_featured + '</td>' +
                        '<td>' + d.featured_date + '</td>' +
                        '<td>' + d.details + '</td>' +
                    '</tr>' +
                '</tbody>' +
            '</table>';
}
 
$(document).ready(function() {
    var dt = $('#example24').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "/ci_admin_panel/assets/bower_components/js/array.json",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "id" },
            { "data": "name" },
            { "data": "email" },
            { "data": "contact" },
            { "data": "is_blocked" }
        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#example24 tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );