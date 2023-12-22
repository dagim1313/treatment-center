
jQuery( document ).ready(function() {
	var table = jQuery('#developers').dataTable({
			 "bProcessing": true,
			 "sAjaxSource": "load_data.php",
			  "bPaginate":true,
			  "sPaginationType":"full_numbers",
			  "iDisplayLength": 5,
			 "aoColumns": [
					{ mData: 'MRN' } ,
					{ mData: 'fname' },
					{ mData: 'lname' },
					{ mData: 'gender' },
					{ mData: 'age' },
					{ mData: 'region' },
                    
					
			]
	});   
});