$(function(){
$(".preload").fadeOut(50, function(){
	$(".ogcontent").fadeIn(50);
});
});
$(document).ready(function() {
    $('#example').DataTable( {
    	"pageLength": 50,
        "lengthMenu": [ 10, 25, 50, 75, 100 ],
        dom: 'Blfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );