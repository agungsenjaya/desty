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
	var url_slack = 'http://localhost/desty/admin/json_produk';
	$('#drad').on('change', function() {
        var odd = this.value;
      // Insert Penggajian
        $.getJSON(url_slack, function(result) {
          var pa = result.filter( eme => eme.produk_id == odd);
          console.log(pa);
          $.each(pa, function(key, val) {
            $('#wa').val(val.produk_wr);
            $('#wi').val(val.produk_uk);
            $('#wu').val(val.produk_ds);
          });
        });
      // End Insert Penggajian
      if ($(this).val() == 0) {
        $('#buha').attr('disabled','true');
        $('#wa, #wu, #wi').val('');
      }else{
        $('#buha').removeAttr('disabled');
      }
      });
	// Logic
	var a = 'Layak';
	var b = 'Cukup Layak';
	var c = 'Tidak Layak';
	$('#buha').on('click',function() {
		// event.preventDefault();
		var ab = $('#wa').val();
		var sa = $('#ta').val();
		var so = ab - 10;
		if (sa >= so && sa < ab ) {
			var sah1 = b;
		}else if(sa >= ab){
			var sah1 = a;
		}else{
			var sah1 = c;
		}
		// $('#sa').text(sah1);
		var cas = sah1;
		var ta = $('#wi').val();
		var ti = $('#ti').val();
		var tu = ta - 10;
		if (ti >= tu && ti < ta ) {
			var sah2 = b;
		}else if(ti >= ta){
			var sah2 = a;
		}else{
			var sah2 = c;
		}
		// $('#si').text(sah2);
		var cis = sah2;
		var la = $('#wu').val();
		var li = $('#tu').val();
		var lu = la - 10;
		if (li >= lu && li < la ) {
			var sah3 = b;
		}else if(li >= la){
			var sah3 = a;
		}else{
			var sah3 = c;
		}
		// $('#su').text(sah3);
		var cus = sah3;
		// Logic sahdu
		if (cas == c && cis == c && cus == c) {
			$('#se').val(c);
		}else if(cas == c && cis == c && cus == b) {
			$('#se').val(c);
		}else if(cas == c && cis == c && cus == a) {
			$('#se').val(c);
		}else if(cas == c && cis == b && cus == c) {
			$('#se').val(c);
		}else if(cas == c && cis == b && cus == b) {
			$('#se').val(b);
		}else if(cas == c && cis == b && cus == a) {
			$('#se').val(b);
		}else if(cas == c && cis == a && cus == c) {
			$('#se').val(c);
		}else if(cas == c && cis == a && cus == b) {
			$('#se').val(b);
		}else if(cas == c && cis == a && cus == a) {
			$('#se').val(a);
			//
		}else if(cas == b && cis == c && cus == c) {
			$('#se').val(c);
		}else if(cas == b && cis == c && cus == b) {
			$('#se').val(b);
		}else if(cas == b && cis == c && cus == a) {
			$('#se').val(b);
		}else if(cas == b && cis == b && cus == c) {
			$('#se').val(b);
		}else if(cas == b && cis == b && cus == b) {
			$('#se').val(b);
		}else if(cas == b && cis == b && cus == a) {
			$('#se').val(b);
		}else if(cas == b && cis == a && cus == c) {
			$('#se').val(b);
		}else if(cas == b && cis == a && cus == b) {
			$('#se').val(b);
		}else if(cas == b && cis == a && cus == a) {
			$('#se').val(a);
			//
		}else if(cas == a && cis == c && cus == c) {
			$('#se').val(c);
		}else if(cas == a && cis == c && cus == b) {
			$('#se').val(b);
		}else if(cas == a && cis == c && cus == a) {
			$('#se').val(a);
		}else if(cas == a && cis == b && cus == c) {
			$('#se').val(b);
		}else if(cas == a && cis == b && cus == b) {
			$('#se').val(b);
		}else if(cas == a && cis == b && cus == a) {
			$('#se').val(a);
		}else if(cas == a && cis == a && cus == c) {
			$('#se').val(a);
		}else if(cas == a && cis == a && cus == b) {
			$('#se').val(a);
		}else if(cas == a && cis == a && cus == a) {
			$('#se').val(a);
		}
		// End Logic sahdu
	});
	// End Logic
	$('#konsumen').DataTable({
		language: {
	    searchPlaceholder: 'Search...',
	    sSearch: '',
	    lengthMenu: '_MENU_ items/page',
		dom: 'Bfrtip',
	  }
	});
	$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
	// Chart
	new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Layak","Cukup Layak","Tidak Layak"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: [ "#3cba9f","#8e5ea2","#3e95cd"],
        data: [2478,200,300]
      }]
    },
    options: {
      title: {
        display: false,
        text: 'Predicted konsumen'
      }
    }
});

	// End Chart
});