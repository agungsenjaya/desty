$(document).ready(function() {
	$('#drod, #drad').select2({
		theme: "bootstrap"
	});
	//Flash
	$('.pg-1, .pg-2, .pg-3, .pg-4 .gj-1, .jb-1, .kt-1, .us-1').flashjs({
		timeout: 8000
	});
	// Datatable Ajax
	// $('#konsumen').DataTable({
	// 	"ajax": {
 	//        "url": 'http://localhost/desty/admin/json_konsumen',
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
	var url_slack = 'http://localhost/mira/admin/json_konsumen';
	$('#drod').on('change', function() {
                var odd = this.value;
              // Insert Penggajian
                $.getJSON(url_slack, function(result) {
                  var pa = result.filter( eme => eme.konsumen_id == odd);
                  console.log(pa);
                  $.each(pa, function(key, val) {
                    $('#wa').val(val.pg_nama);
                    $('#wu, #wi').val(val.pg_gaji);
                    $('#wo').val(val.konsumen_id);
                  });
                });
              // End Insert Penggajian
              if ($(this).val() == 0) {
                $('#buha').attr('disabled','true');
                $('#wa, #wu, #wi, #wo').val('');
              }else{
                $('#buha').removeAttr('disabled');
              }
              });
	$('#konsumen').DataTable({
		language: {
	    searchPlaceholder: 'Search...',
	    sSearch: '',
	    lengthMenu: '_MENU_ items/page',
	  }
	});
	$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
});