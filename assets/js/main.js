$(document).ready(function() {
	$('select').select2();
	//Flash
	$('.pg-1, .pg-2, .pg-3, .pg-4 .gj-1, .jb-1, .kt-1, .us-1').flashjs({
		timeout: 8000
	});
	// Datatable Ajax
	// $('#konsumen').DataTable({
	// 	"ajax": {
 	//        "url": 'http://localhost/desty/admin/json',
 	//        "dataSrc": ''
 	//    },
 	//    columns : [
 	//         { "data" : "konsumen_id" },
 	//         { "data" : "konsumen_nama" },
 	//         { "data" : "konsumen_telepon"}
 	//        ],
	//   language: {
	//     searchPlaceholder: 'Search...',
	//     sSearch: '',
	//     lengthMenu: '_MENU_ items/page',
	//   }
	// });
	$('#konsumen').DataTable({
		language: {
	    searchPlaceholder: 'Search...',
	    sSearch: '',
	    lengthMenu: '_MENU_ items/page',
	  }
	});
	$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
});