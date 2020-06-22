var manageVisitorTable;

$(document).ready(function() {
  //top bar active
  $("#navVisitors").addClass('active');

  $("#visitDate").datepicker();
  $("#edit_visitDate").datepicker();

  //manage manufacture table
  manageVisitorTable = $("#manageVisitorTable").DataTable({
  	    'ajax': 'php_action/adminFetchVisitors.php', 
		'order': []		
  });

  
 
});


function addVisitor() {

	$("#submitVisitorForm")[0].reset();
	// remove the error 
    $('.text-danger').remove();
    // remove the form-error
	$('.form-group').removeClass('has-error').removeClass('has-success');


	//submit manufacture form function
    $("#submitVisitorForm").unbind('submit').bind('submit', function() {
      
      //remove the error text
      $(".text-danger").remove();
      //remove the form error
      $(".form-group").removeClass("has-error").removeClass("has-success");   

      var visitDate = $("#visitDate").val();
      var first_name = $("#first_name").val();
      var last_name = $("#last_name").val();
      var visitor_email = $("#visitor_email").val();
      var visitor_contact = $("#visitor_contact").val();
      var residential_address = $("#residential_address").val();
      var area = $("#area").val();
      var city = $("#city").val();
      var province = $("#province").val();
      var guest_of = $("#guest_of").val();
      var reference = $("#reference").val();

      if(visitDate == "") {
         $("#visitDate").after('<p class ="text-danger"> Visit Date field is required</p>');
         $("#visitDate").closest('.form-group').addClass('has-error');

      } else {
      	$("#visitDate").find('.text-danger').remove();
      	$("#visitDate").closest('.form-group').addClass('has-success');
      }    


      if(first_name == "") {
         $("#first_name").after('<p class ="text-danger"> First name field is required</p>');
         $("#first_name").closest('.form-group').addClass('has-error');

      } else {
      	$("#first_name").find('.text-danger').remove();
      	$("#first_name").closest('.form-group').addClass('has-success');
      }


      if(last_name == "") {
         $("#last_name").after('<p class ="text-danger"> Last name field is required</p>');
         $("#last_name").closest('.form-group').addClass('has-error');

      } else {
      	$("#last_name").find('.text-danger').remove();
      	$("#last_name").closest('.form-group').addClass('has-success');
      }

/*
      if(visitor_email == "") {
         $("#visitor_email").after('<p class ="text-danger"> Email field is required</p>');
         $("#visitor_email").closest('.form-group').addClass('has-error');

      } else {
      	$("#visitor_email").find('.text-danger').remove();
      	$("#visitor_email").closest('.form-group').addClass('has-success');
      }

      if(visitor_contact == "") {
         $("#visitor_contact").after('<p class ="text-danger"> Email field is required</p>');
         $("#visitor_contact").closest('.form-group').addClass('has-error');

      } else {
        $("#visitor_contact").find('.text-danger').remove();
        $("#visitor_contact").closest('.form-group').addClass('has-success');
      }

*/
      if(residential_address == "") {
         $("#residential_address").after('<p class ="text-danger"> Address field is required</p>');
         $("#residential_address").closest('.form-group').addClass('has-error');

      } else {
        $("#residential_address").find('.text-danger').remove();
        $("#residential_address").closest('.form-group').addClass('has-success');
      }


      if(area == "") {
         $("#area").after('<p class ="text-danger"> Area field is required</p>');
         $("#area").closest('.form-group').addClass('has-error');

      } else {
        $("#area").find('.text-danger').remove();
        $("#area").closest('.form-group').addClass('has-success');
      }


      if(city == "") {
         $("#city").after('<p class ="text-danger"> City field is required</p>');
         $("#city").closest('.form-group').addClass('has-error');

      } else {
        $("#city").find('.text-danger').remove();
        $("#city").closest('.form-group').addClass('has-success');
      }


      if(province == "") {
         $("#province").after('<p class ="text-danger"> Province field is required</p>');
         $("#province").closest('.form-group').addClass('has-error');

      } else {
        $("#province").find('.text-danger').remove();
        $("#province").closest('.form-group').addClass('has-success');
      }
/*
      if(guest_of == "") {
         $("#guest_of").after('<p class ="text-danger"> Guest of field is required</p>');
         $("#guest_of").closest('.form-group').addClass('has-error');

      } else {
        $("#guest_of").find('.text-danger').remove();
        $("#guest_of").closest('.form-group').addClass('has-success');
      }
*/
      if(reference == "") {
         $("#reference").after('<p class ="text-danger"> Reference field is required</p>');
         $("#reference").closest('.form-group').addClass('has-error');

      } else {
      	$("#reference").find('.text-danger').remove();
      	$("#reference").closest('.form-group').addClass('has-success');
      } 



      if(visitDate && first_name && last_name &&  residential_address
           && area && city && province && reference){

      	 var form = $(this);

        //button loading
        $("#createVisitorBtn").button('loading');

        $.ajax({
                url : form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				dataType: 'json',
				success:function(response) {
					// button loading
					$("#createVisitorBtn").button('reset');

					if(response.success == true) {
						// reload the manage member table 
						manageVisitorTable.ajax.reload(null, false);

						$("#submitVisitorForm")[0].reset();
						// remove the error text
						$(".text-danger").remove();
						// remove the form error
						$('.form-group').removeClass('has-error').removeClass('has-success');
  	  			
  	  			$('#add-visitor-messages').html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
          '</div>');

  	  			$(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert
					}  // if

				} // /success
        });// ajax
      }  

     return false;
  });//submit manufacture form function
}


function editVisitors(visitorId = null) {
    if(visitorId) {
    	//remove visitor id
    	$("#visitorId").remove();

    	//refresh the form
    	$("#editVisitorForm")[0].reset();

    	// remove the error 
		$('.text-danger').remove();
		// remove the form-error
		$('.form-group').removeClass('has-error').removeClass('has-success');

    	$(".editVisitorFooter").after('<input type ="hidden" name ="visitorId" id ="visitorId" value="'+visitorId+'" />')

    	$.ajax({
    		url: 'php_action/fetchSelectedVisitor.php',
    		type: 'post',
    		data: {visitorId : visitorId},
    		dataType: 'json',
    		success: function(response) {
    			  $("#edit_visitDate").val(response.date_of_visit);
    			  $("#edit_first_name").val(response.first_name);
    			  $("#edit_last_name").val(response.last_name);
    			  $("#edit_visitor_email").val(response.email);
            $("#edit_visitor_contact").val(response.contact);
            $("#edit_residential_address").val(response.residential_address);
            $("#edit_area").val(response.area);
            $("#edit_city").val(response.city);
            $("#edit_province").val(response.province);
            $("#edit_guest_of").val(response.guest_of);
            $("#edit_reference").val(response.reference_id);

    			  //submit manufacture form function
				  $("#editVisitorForm").unbind('submit').bind('submit', function() {
				      
				      //remove the error text
				      $(".text-danger").remove();

				      //remove the form error
				      $(".form-group").removeClass("has-error").removeClass("has-success");

				      var visitDate = $("#edit_visitDate").val();
              var first_name = $("#edit_first_name").val();
              var last_name = $("#edit_last_name").val();
              var visitor_email = $("#edit_visitor_email").val();
              var visitor_contact = $("#edit_visitor_contact").val();
              var residential_address = $("#edit_residential_address").val();
              var area = $("#edit_area").val();
              var city = $("#edit_city").val();
              var province = $("#edit_province").val();
              var guest_of = $("#edit_guest_of").val();
              var reference = $("#edit_reference").val();

              if(visitDate == "") {
                 $("#edit_visitDate").after('<p class ="text-danger"> Visit Date field is required</p>');
                 $("#edit_visitDate").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_visitDate").find('.text-danger').remove();
                $("#edit_visitDate").closest('.form-group').addClass('has-success');
              }    


              if(first_name == "") {
                 $("#edit_first_name").after('<p class ="text-danger"> First name field is required</p>');
                 $("#edit_first_name").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_first_name").find('.text-danger').remove();
                $("#edit_first_name").closest('.form-group').addClass('has-success');
              }


              if(last_name == "") {
                 $("#edit_last_name").after('<p class ="text-danger"> Last name field is required</p>');
                 $("#edit_last_name").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_last_name").find('.text-danger').remove();
                $("#edit_last_name").closest('.form-group').addClass('has-success');
              }

        /*
              if(visitor_email == "") {
                 $("#edit_visitor_email").after('<p class ="text-danger"> Email field is required</p>');
                 $("#edit_visitor_email").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_visitor_email").find('.text-danger').remove();
                $("#edit_visitor_email").closest('.form-group').addClass('has-success');
              }

              if(visitor_contact == "") {
                 $("#edit_visitor_contact").after('<p class ="text-danger"> Email field is required</p>');
                 $("#edit_visitor_contact").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_visitor_contact").find('.text-danger').remove();
                $("#edit_visitor_contact").closest('.form-group').addClass('has-success');
              }

        */
              if(residential_address == "") {
                 $("#edit_residential_address").after('<p class ="text-danger"> Address field is required</p>');
                 $("#edit_residential_address").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_residential_address").find('.text-danger').remove();
                $("#edit_residential_address").closest('.form-group').addClass('has-success');
              }


              if(area == "") {
                 $("#edit_area").after('<p class ="text-danger"> Area field is required</p>');
                 $("#edit_area").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_area").find('.text-danger').remove();
                $("#edit_area").closest('.form-group').addClass('has-success');
              }


              if(city == "") {
                 $("#edit_city").after('<p class ="text-danger"> City field is required</p>');
                 $("#edit_city").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_city").find('.text-danger').remove();
                $("#edit_city").closest('.form-group').addClass('has-success');
              }


              if(province == "") {
                 $("#edit_province").after('<p class ="text-danger"> Province field is required</p>');
                 $("#edit_province").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_province").find('.text-danger').remove();
                $("#edit_province").closest('.form-group').addClass('has-success');
              }
/*
              if(guest_of == "") {
                 $("#edit_guest_of").after('<p class ="text-danger"> Guest of field is required</p>');
                 $("#edit_guest_of").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_guest_of").find('.text-danger').remove();
                $("#edit_guest_of").closest('.form-group').addClass('has-success');
              }
*/
              if(reference == "") {
                 $("#edit_reference").after('<p class ="text-danger"> edit_Reference field is required</p>');
                 $("#edit_reference").closest('.form-group').addClass('has-error');

              } else {
                $("#edit_reference").find('.text-danger').remove();
                $("#edit_reference").closest('.form-group').addClass('has-success');
              } 



              if(visitDate && first_name && last_name &&  residential_address
                   && area && city && province && reference){
				      	 var form = $(this);

				        //button loading
				        //$("#createVisitorBtn").button('loading');

				        $.ajax({
				                url : form.attr('action'),
								type: form.attr('method'),
								data: form.serialize(),
								dataType: 'json',
								success:function(response) {
									// button loading
									//$("#createVisitorBtn").button('reset');

									if(response.success == true) {
										// reload the manage member table 
										manageVisitorTable.ajax.reload(null, false);

										//$("#editVisitorForm")[0].reset();
										// remove the error text
										$(".text-danger").remove();
										// remove the form error
										$('.form-group').removeClass('has-error').removeClass('has-success');
				  	  			
				  	  			$('#edit-visitor-messages').html('<div class="alert alert-success">'+
				            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
				            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
				          '</div>');

				  	  			$(".alert-success").delay(500).show(10, function() {
											$(this).delay(3000).hide(10, function() {
												$(this).remove();
											});
										}); // /.alert
									}  // if

								} // /success
				        });// ajax
				      }  

				     return false;
				  });//submit visitor form function

    		}// success
    	});// ajax
    }
}



function removeVisitor(visitorId = null) {
	if(visitorId) {
       $("#removeVisitorBtn").unbind('click').bind('click', function() {
         $.ajax({
            url: 'php_action/removeVisitor.php',
            type: 'post',
            data: {visitorId : visitorId},
            dataType: 'json',
            success: function(response) {
              if(response.success == true) {

              	 //hide the modal
                 $("#removeVisitorModal").modal('hide');

                 //reload the manufacturer table
                 manageVisitorTable.ajax.reload(null, false);

                 $('.remove-messages').html('<div class="alert alert-success">'+
            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.messages +
          '</div>');

  	  			$(".alert-success").delay(500).show(10, function() {
							$(this).delay(3000).hide(10, function() {
								$(this).remove();
							});
						}); // /.alert
              }//success
            }// success
         });// ajax  
       
       });
	}//if
 }


 function displayDetails(visitorId = null, status = null, about_us = null) {
    if(visitorId) {

      $("#visitorId").remove();

      //refresh the form
      $("#display_contact").html('<i class="fa fa-phone"></i>');
      $("#display_address").html('<i class="fa fa-map-marker"></i>');
      $("#display_email").html('<i class="fa fa-envelope">');
    
      $(".displayVisitorFooter").after('<input type ="hidden" name ="visitorId" id ="visitorId" value="'+visitorId+'" />');
      
      $.ajax({
        url: 'php_action/fetchSelectedVisitor.php',
        type: 'post',
        data: {visitorId : visitorId},
        dataType: 'json',
        success: function(response) {
            var id = visitorId;
            var name = response.first_name +" "+ response.last_name;
            var address = response.residential_address +" "+ response.area +" "+ response.city;
            var contact = response.contact;
            var email = response.email;
            var date = response.date_of_visit;
            var guest_of = response.guest_of;
            
            //console.log(id);
            //console.log(address);
            //console.log(contact);
            //console.log(email);


            if(status == 1)
              {
                  $("#display_status").html("<a href='follow_up_page.php?id="+visitorId+"' style='text-decoration:none'><label class='label label-success'>Followed</label></a>");
              }else if(status == 2) {
                  $("#display_status").html("<a href='follow_up_page.php?id="+visitorId+"' style='text-decoration:none'><label class='label label-danger'>Not Followed</label></a>");
              }

            $("#display_reference").html('<i class="glyphicon glyphicon-info-sign"></i>Reference By: '+ about_us);
            $("#display_date").html('<i class="glyphicon glyphicon-calendar"></i>Visit Date: '+ date);
            $("#display_guest_of").html('<i class="glyphicon glyphicon-asterisk"></i>Guest Of: '+ guest_of);
            $("#display_name").text(name);
            $("#display_contact").append(contact);
            $("#display_address").append(address);
            $("#display_email").append('<a href="email_page.php?id='+visitorId+'">'+email+'</a>');
        }// success
      });// ajax
    }
}
