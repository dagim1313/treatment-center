jQuery( document ).ready(function() {
	var table = jQuery('#users').dataTable({
			 "bProcessing": true,
			 "sAjaxSource": "load_user.php",
			  "bPaginate":true,
			  "sPaginationType":"full_numbers",
			  "iDisplayLength": 5,
			 "aoColumns": [
					{ mData: 'username' } ,
					{ mData: 'email' },
					{ mData: 'role' },
					{ mData: 'gender' },
					{ mData: '<a href="#"> edite</a>' }
					

					
			]
	});   
}); 