var navListItems;
var allWells;
var allNextBtn;
var allPrevBtn;


$(document).ready(function() {

    navListItems = $('div.setup-panel div a');
    allWells = $('.setup-content');
    allNextBtn = $('.nextBtn');
    allPrevBtn = $('.prevBtn');

    allWells.hide();

    $('#fecip_applicant_and_organisation_details').show();
    //$('#uploads').show();
    //$('#intern_request').show();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if ($item.attr('disabled') != "disabled") {
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
        }

    });

    $("#organisationInformationFormPreviousButton").click(function(){
        allWells.hide();
        $('#fecip_applicant_and_organisation_details').show();
    });

    $("#internRequestsFormPreviousButton").click(function(){
        allWells.hide();
        $('#uploads').show();
    });


});

attachOrganisationAndApplicant();

function attachOrganisationAndApplicant() {

    console.log("attachOrganisationAndApplicant method");

    //submit attachOrganisationAndApplicantForm function
    $("#attachFecipOrganisationAndApplicantForm").unbind('submit').bind('submit', function() {


        var organisation_address = $("#organisation_address").val();
        var organisation_district = $("#organisation_district").val();
        var organisation_province = $("#organisation_province").val();


        console.log("__________________________________Used In Development_________________________________");
        console.log("Applicant Name: "+ applicant_name);
        console.log("Applicant Position: "+ applicant_position);
       // console.log("Dial Code: "+ dial_code);
        //console.log("Applicant Phone Number: "+ applicant_phone_number);
        console.log("Applicant Email: "+ applicant_email);
        console.log("Organisation Name: "+ organisation_name);
        console.log("Organisation Address: "+ organisation_address);
        console.log("Organisation Type: "+ organisation_district);
        console.log("Registration of Organisation: "+ organisation_province);
        console.log("__________________________________Used In Development_________________________________");
        if(applicant_name && applicant_position &&  applicant_email &&
            organisation_name && organisation_address && organisation_district && organisation_province){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {

                        Swal.fire("Applicant and Organisation Details Successfully Submitted!", '', "success");

                        //move to the next step (step 2)
                        var step2 = $("#step-2"); // find element with id = step-2
                        var target = $(step2.attr('href')); // get element


                        if(step2.attr('disabled') == "disabled") {
                            step2.removeAttr('disabled');
                        }

                        step2.removeClass('btn-default');
                        step2.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachOrganisationInformation();

                    }  else if(response.success == false) {

                        Swal.fire("Failed to Submit Applicant and Organisation Details!", response.messages, "warning");

                    }// if

                } // /success
            });// ajax

        }

        return false;
    });//submit attachOrganisationAndApplicantForm function
}

function attachOrganisationInformation() {

    console.log("attachOrganisationInformation method");

    //submit attachTempOrganisationInformationForm function
    $("#attachTempOrganisationInformationForm").unbind('submit').bind('submit', function() {

        var internLocationQuestion = $('#intern_location_question').val(); //get intern location question from form input
        var usaidProjectQuestion = $('#usaid_project_question').val(); //get usaid project question from form input
        var internSponsorshipQuestion = $('#intern_sponsorship_question').val(); //get intern sponsorship question from form input
        var mentoringProgramQuestion = $('#mentoring_program_question').val(); //get mentoring program question from form input
        var handicappedAccessibleQuestion = $('#handicapped_accessible_question').val(); //get handicapped accessible question from form input
        var internHostingQuestion = $('#intern_hosting_question').val(); //get intern hosting question from form input
        var internIdentificationQuestion = $('#intern_identification_question').val(); //get intern identification question from form input
        var internLocationAddress =  $('#intern_location_address').val(); //get intern location address from form input
        var fundedProjectName = $('#funded_project_name').val(); //get funded project name from form input
        var supportAmount = $('#support_amount').val(); //get support amount form input
        var mentorshipType = $('#mentorship_type').val(); //get mentorship type from form
        var durationOfInternship = $('#duration_of_internship').val(); //get duration of internship from form
        var frequency = $('#frequency').val(); //get frequency from form
        var advocacyEngagementQuestion = $('#advocacy_engagement_question').val();
        var internshipPolicyQuestion = $('#internship_policy_question').val(); //get internship policy question from form
        var specificCandidateIdentification = $('#specific_candidate_identification').val(); //get specific candidate identification from form

        console.log("__________________________________Used In Development_________________________________");
        console.log("Intern Location Question: "+ internLocationQuestion);
        console.log("Usaid Project Question: "+ usaidProjectQuestion);
        console.log("Intern Sponsorship Question: "+ internSponsorshipQuestion);
        console.log("Mentoring Program Question: "+ mentoringProgramQuestion);
        console.log("Handicapped Accessible Question: "+ handicappedAccessibleQuestion);
        console.log("Intern Hosting Question: "+ internHostingQuestion);
        console.log("Intern Identification Question: "+ internIdentificationQuestion);
        console.log("Intern Location Address: "+ internLocationAddress);
        console.log("Funded Project Name: "+ fundedProjectName);
        console.log("Support Amount: "+ supportAmount);
        console.log("Mentorship Type: "+ mentorshipType);
        console.log("Duration of Internship: "+ durationOfInternship);
        console.log("Frequency: "+ frequency);
        console.log("Internship Policy Question: "+ internshipPolicyQuestion);
        console.log("Specific Candidate Identification: "+ specificCandidateIdentification);
        console.log("Advocacy Engagement Question: "+ advocacyEngagementQuestion);

        console.log("__________________________________Used In Development_________________________________");


        if(internLocationQuestion && usaidProjectQuestion && internSponsorshipQuestion && mentoringProgramQuestion && handicappedAccessibleQuestion &&
            internHostingQuestion && advocacyEngagementQuestion){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {

                        Swal.fire("Organisation Details Successfully Submitted!", "", "success");

                        //move to the next step (step 3)
                        var step3 = $("#step-3"); // find element with id = step-2
                        var target = $(step3.attr('href')); // get element

                        //move to the next step (step 3)
                        if(step3.attr('disabled') == "disabled") {
                            step3.removeAttr('disabled');
                        }

                        step3.removeClass('btn-default');
                        step3.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachInternRequests();

                    }  else if(response.success == false) {

                        Swal.fire("An Error Occurred! "+ response.messages, 'Please start your application from the beginning or contact us for additional help', "warning");

                    }// if

                } // /success
            });// ajax

        }

        return false;
    });//submit attachTempOrganisationInformationForm function
}

