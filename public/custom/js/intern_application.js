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

    $('#personal_information').show();
    //$('#parents_information').show();
    //$('#education_information').show();
    // $('#professional_experience').show();
    // $('#references').show();
    //$('#intern_uploads').show();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if ($item.attr('disabled') != "disabled") {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
        }

    });

    $("#number_of_work_experiences").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value

        var numInputs = $(this).val();

        if(numInputs > 0) {
            var appendhtml = '';

            for (var i = 0; i < numInputs; i++) {

                var position = i + 1;

                appendhtml += '' +
                    '<div class="row" style="margin-top: 20px">' +
                    '<div class="col-md-5 col-lg-5 col-sm-5">' +
                    '   <div class="form-group">' +
                    '       <label for="employers_name" class="col-sm-12 control-label">Name of Organisation '+ position +'</label>' +
                    '           <div class="col-sm-12">' +
                    '               <input type="text" name="employers_name'+ position +'" id="employers_name'+ position +'" class="form-control" placeholder="Name of Organisation" autocomplete="off" required />' +
                    '           </div>' +
                    '    </div>' +
                    '        <div class="form-group">' +
                    '           <label for="employers_name" class="col-sm-12 control-label">Title/Position Held '+ position +'</label>' +
                    '           <div class="col-sm-12">' +
                    '               <input type="text" name="job_title'+ position +'" id="job_title'+ position +'" class="form-control" placeholder="Title" autocomplete="off" required />' +
                    '           </div>' +
                    '        </div>' +
                    '</div>' +
                    '' +
                    '<div class="col-sm-6 col-md-6 col-lg-6">' +
                    '   <div class="form-group">' +
                    '       <label for="employers_name" class="col-sm-12 control-label">Type (Volunteer, Internship or Employee) '+ position +'</label>' +
                    '           <div class="col-sm-12">' +
                    '               <input type="text" name="employers_address'+ position +'" id="employers_address'+ position +'" class="form-control" rows="10" placeholder="Write Type" autocomplete="off" required />' +
                    '           </div>' +
                    '    </div>' +

                    '   <div class="form-group">' +
                    '       <label for="employers_name" class="col-sm-12 control-label">Organisation Contact '+ position +'</label>' +
                    '           <div class="col-sm-12">' +
                    '               <input type="text" name="employers_contact'+ position +'" id="employers_contact'+ position +'" class="form-control" placeholder="Organisation Contact" autocomplete="off" required />' +
                    '           </div>' +
                    '     </div>' +
                    '     </div>' +
                    '' +
                    '</div>';
            }

            $("#terms_of_reference").empty().append(appendhtml);

        } else {
            $("#terms_of_reference").empty().append(null);
        }
    });


    $("#reside_with").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var mothersHighestEducationLevel = $('#mothers_highest_education_level');
        var fathersHighestEducationLevel = $('#fathers_highest_education_level');
        var mothersEmploymentStatus = $('#mothers_employment_status');
        var fathersEmploymentStatus = $('#fathers_employment_status');
        var guardiansHighestEducationLevel = $('#guardian_highest_education_level');
        var guardianEmploymentStatus = $('#guardian_employment_status');

        if(selectedValue == 'Both my parents') {
            mothersHighestEducationLevel.attr('style','display: block');
            mothersHighestEducationLevel.attr('required', true);
            mothersEmploymentStatus.attr('style','display: block');
            mothersEmploymentStatus.attr('required', true);
            fathersHighestEducationLevel.attr('style','display: block');
            fathersHighestEducationLevel.attr('required', true);
            fathersEmploymentStatus.attr('required', true);
            fathersEmploymentStatus.attr('style','display: block');
            guardiansHighestEducationLevel.attr('required', false);
            guardiansHighestEducationLevel.attr('style','display: none');
            guardianEmploymentStatus.attr('required', false);
            guardianEmploymentStatus.attr('style','display: none');


        }
        else if(selectedValue == 'My mother only' ){
            mothersHighestEducationLevel.attr('style','display: block');
            mothersHighestEducationLevel.attr('required', true);
            mothersEmploymentStatus.attr('style','display: block');
            mothersEmploymentStatus.attr('required', true);
            fathersHighestEducationLevel.attr('style','display: none');
            fathersHighestEducationLevel.attr('required', false);
            fathersEmploymentStatus.attr('required', false);
            fathersEmploymentStatus.attr('style','display: none');
            guardiansHighestEducationLevel.attr('required', false);
            guardiansHighestEducationLevel.attr('style','display: none');
            guardianEmploymentStatus.attr('required', false);
            guardianEmploymentStatus.attr('style','display: none');

        }

        else if(selectedValue == 'My father only' ){
            fathersHighestEducationLevel.attr('style','display: block');
            fathersHighestEducationLevel.attr('required', true);
            fathersEmploymentStatus.attr('required', true);
            fathersEmploymentStatus.attr('style','display: block');
            mothersHighestEducationLevel.attr('style','display: none');
            mothersHighestEducationLevel.attr('required', false);
            mothersEmploymentStatus.attr('style','display: none');
            mothersEmploymentStatus.attr('required', false);
            guardiansHighestEducationLevel.attr('required', false);
            guardiansHighestEducationLevel.attr('style','display: none');
            guardianEmploymentStatus.attr('required', false);
            guardianEmploymentStatus.attr('style','display: none');

        }

        else if(selectedValue == 'My Guardian' ) {
            guardiansHighestEducationLevel.attr('required', true);
            guardiansHighestEducationLevel.attr('style', 'display: block');
            guardianEmploymentStatus.attr('required', true);
            guardianEmploymentStatus.attr('style', 'display: block');
            mothersHighestEducationLevel.attr('style', 'display: none');
            mothersHighestEducationLevel.attr('required', false);
            mothersEmploymentStatus.attr('style', 'display: none');
            mothersEmploymentStatus.attr('required', false);
            fathersHighestEducationLevel.attr('style', 'display: none');
            fathersHighestEducationLevel.attr('required', false);
            fathersEmploymentStatus.attr('required', false);
            fathersEmploymentStatus.attr('style', 'display: none');
        }

        else {
            mothersHighestEducationLevel.attr('style','display: none');
            mothersHighestEducationLevel.attr('required', false);
            fathersHighestEducationLevel.attr('style','display: none');
            fathersHighestEducationLevel.attr('required', false);
            mothersEmploymentStatus.attr('style','display: none');
            mothersEmploymentStatus.attr('required', false);
            fathersEmploymentStatus.attr('required', false);
            fathersEmploymentStatus.attr('style','display: none');
            guardiansHighestEducationLevel.attr('required', false);
            guardiansHighestEducationLevel.attr('style','display: none');
            guardianEmploymentStatus.attr('required', false);
            guardianEmploymentStatus.attr('style','display: none');
        }

    });


    $("#special_needs_question").change(function(){

        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var specificSpecialNeeds = $('#specific_special_needs');
        var specialNeeds = $('#special_needs');

        if(selectedValue == 'Yes') {
            specificSpecialNeeds.attr('style','display: block');
            specialNeeds.attr('required', true);
        } else {
            specificSpecialNeeds.attr('style','display: none');
            specialNeeds.attr('required', false);
        }
    });


    $("#nationality").change(function(){

        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var specificNationality = $('#specific_nationality');
        var nationalityType = $('#nationality_type');

        if(selectedValue == 'Other') {
            specificNationality.attr('style','display: block');
            nationalityType.attr('required', true);
        } else {
            specificNationality.attr('style','display: none');
            nationalityType.attr('required', false);
        }
    });
});


 attachInternPersonalInformation();
// attachParentsInformation();
// attachEducationInformation();
// attachProfessionalExperience();
// attachReferences();
//attachInternUploads();

function attachInternPersonalInformation() {

    console.log("attachInternPersonalInformation method");
    // remove the error
    $('.text-danger').remove();
    // remove the form-error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    //submit attachInternPersonalInformationForm function
    $("#attachInternPersonalInformationForm").unbind('submit').bind('submit', function() {

        //remove the error text
        $(".text-danger").remove();
        //remove the form error
        $(".form-group").removeClass("has-error").removeClass("has-success");


        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var other_names = $("#other_names").val();
        //var dob = $("#dob").val();
        var gender = $("#gender").val();
        var nationality_question = $("#nationality").val();
        var email = $("#email").val();
        var dial_code = $("#dial_code").val();
        var applicant_phone_number = $("#phone_number").val();
        //var zip_code = $("#zip_code").val();
        var residential_address = $("#residential_address").val();
        var town = $("#town").val();
        var special_needs_question = $("#special_needs_question").val();
        var topic_of_interest = $("#topic_of_interest").val();


        console.log("__________________________________Used In Development_________________________________");
        console.log("First Name: "+ first_name);
        console.log("Last Name: "+ last_name);
        console.log("Other Names: "+ other_names);
        console.log("Dial Code: "+ dial_code);
        console.log("Phone Number: "+ phone_number);
        //console.log("DOB: "+ dob);
        console.log("Gender: "+ gender);
        console.log(" Address: "+ residential_address);
        console.log("Email: "+ email);
        //console.log("Registration of Organisation: "+ zip_code);
        console.log("Topic Of Interest: "+ topic_of_interest);
        console.log("Town: "+ town);
        console.log("Nationality: "+ nationality);
        console.log("Special Need : "+ special_needs_question);
        console.log("__________________________________Used In Development_________________________________");


        if(first_name && last_name &&  other_names && gender && nationality && email && dial_code
            && phone_number && residential_address  && town  && special_needs_question && topic_of_interest
            ){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {

                        Swal.fire("Applicant Personal Information Successfully Submitted!", '', "success");

                        //move to the next step (step 2)
                        var step2 = $("#step-2"); // find element with id = step-2
                        var target = $(step2.attr('href')); // get element

                        navListItems.removeClass('btn-success').addClass('btn-default');

                        if(step2.attr('disabled') == "disabled") {
                            step2.removeAttr('disabled');
                        }

                        step2.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachParentsInformation();

                    }  else if(response.success == false) {

                        Swal.fire("Cannot Submit Personal Information!", response.messages, "warning");

                    }// if

                } // /success
            });// ajax

        }

        return false;
    });//submit Personal Information function
}

function attachParentsInformation() {

    console.log("attachParentsInformation method");

    // remove the error
    $('.text-danger').remove();
    // remove the form-error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    //submit attachTempattachParentsInformationForm function
    $("#attachTempattachParentsInformationForm").unbind('submit').bind('submit', function() {

        //remove the error text
        $(".text-danger").remove();
        //remove the form error
        $(".form-group").removeClass("has-error").removeClass("has-success");
        var reside_with = $('#reside_with').val(); //get intern location question from form input
        var mothers_highest_education_level = $('#mothers_highest_education_level').val(); //get usaid project question from form input
        var fathers_highest_education_level = $('#fathers_highest_education_level').val(); //get intern sponsorship question from form input
        var mothers_employment_status = $('#mothers_employment_status').val(); //get mentoring program question from form input
        var fathers_employment_status = $('#fathers_employment_status').val(); //get handicapped accessible question from form input
        var guardian_highest_education_level = $('#guardian_highest_education_level').val(); //get intern hosting question from form input
        var guardian_employment_status = $('#guardian_employment_status').val(); //get intern identification question from form input
        var combined_monthly_income =  $('#combined_monthly_income').val(); //get intern location address from form input


        console.log("__________________________________Used In Development_________________________________");
        console.log("Reside With  : "+ reside_with);
        console.log("Mothers Highest Education Level: "+ mothers_highest_education_level);
        console.log("Intern Sponsorship Question: "+ fathers_highest_education_level);
        console.log("Fathers highest education level: "+ mothers_employment_status);
        console.log("Fathers employment status: "+ fathers_employment_status);
        console.log("Guardian highest education level: "+ guardian_highest_education_level);
        console.log("Guardian employment status: "+ guardian_employment_status);
        console.log("Combined monthly income: "+ combined_monthly_income);
        console.log("__________________________________Used In Development_________________________________");


        if(reside_with && combined_monthly_income
            ){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {


                        Swal.fire("Applicant Parents Information Submitted!", "", "success");

                        //move to the next step (step 3)
                        var step3 = $("#step-3"); // find element with id = step-2
                        var target = $(step3.attr('href')); // get element

                        navListItems.removeClass('btn-success').addClass('btn-default');

                        if(step3.attr('disabled') == "disabled") {
                            step3.removeAttr('disabled');
                        }

                        step3.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachEducationInformation();

                    }  else if(response.success == false) {

                        Swal.fire("An Error Occurred! "+ response.messages, 'Please start your application from the beginning or contact us for additional help', "warning");

                    }// if

                } // /success
            });// ajax

        }

        return false;
    });//submit attachTempParentsInformationForm function
}

function attachEducationInformation() {

    console.log("attachEducationInformation method");

    // remove the error
    $('.text-danger').remove();
    // remove the form-error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    //submit tempAttachEducationInformationForm function
    $("#tempAttachEducationInformationForm").unbind('submit').bind('submit', function() {

        console.log('Am here');

        //remove the error text
        $(".text-danger").remove();
        //remove the form error
        $(".form-group").removeClass("has-error").removeClass("has-success");

        var qualification_obtained = $('#qualification_obtained').val(); //get intern location question from form input
        var name_of_institution = $('#name_of_institution').val(); //get usaid project question from form input
        var year_graduated = $('#year_graduated').val(); //get intern sponsorship question from form input
        var main_field_of_study = $('#main_field_of_study').val(); //get mentoring program question from form input
        var microsoft_suite_experience = $('#microsoft_suite_experience').val(); //get handicapped accessible question from form input



        console.log("__________________________________Used In Development_________________________________");
        console.log("Qualification obtained: "+ qualification_obtained);
        console.log("Name of institution: "+ name_of_institution);
        console.log("Year graduated: "+ year_graduated);
        console.log("Main field of study: "+ main_field_of_study);
        console.log("Microsoft suite experience: "+ microsoft_suite_experience);

        console.log("__________________________________Used In Development_________________________________");


        if(qualification_obtained && name_of_institution && year_graduated && main_field_of_study && microsoft_suite_experience
        ){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {


                        Swal.fire("Education Information Successfully Submitted!", "", "success");

                        //move to the next step (step 4)
                        var step4 = $("#step-4"); // find element with id = step-4
                        var target = $(step4.attr('href')); // get element

                        navListItems.removeClass('btn-success').addClass('btn-default');

                        if(step4.attr('disabled') == "disabled") {
                            step4.removeAttr('disabled');
                        }

                        step4.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachProfessionalExperience();

                    }  else if(response.success == false) {

                        Swal.fire("An Error Occurred! "+ response.messages, 'Please start your application from the beginning or contact us for additional help', "warning");

                    }// if

                } // /success
            });// ajax

        }

        return false;
    });//submit attachTempEducationInformationForm function
}

function attachProfessionalExperience() {
    // remove the error
    $('.text-danger').remove();
    // remove the form-error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    //submit internRequestsForm function
    $("#attachProfessionalExperienceForm").unbind('submit').bind('submit', function() {

        //remove the error text
        $(".text-danger").remove();
        //remove the form error
        $(".form-group").removeClass("has-error").removeClass("has-success");

        var number_of_work_experiences = $('#number_of_work_experiences').val(); //get number of number of places worked from form input

        console.log("__________________________________Used In Development_________________________________");
        console.log("Number of Places worked before: "+ number_of_work_experiences);
        console.log("__________________________________Used In Development_________________________________");


        if(number_of_work_experiences){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {

                        Swal.fire("Work Experience Successfully Submitted!" , "", "success");

                        //move to the next step (step 5)
                        var step5 = $("#step-5"); // find element with id = step-5
                        var target = $(step5.attr('href')); // get element

                        navListItems.removeClass('btn-success').addClass('btn-default');

                        if(step5.attr('disabled') == "disabled") {
                            step5.removeAttr('disabled');
                        }

                        step5.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachReferences();


                    }  else if(response.success == false) {

                        Swal.fire("An Error Occurred! "+ response.messages, 'Please start your application from the beginning or contact us for additional help', "warning");

                    }// if
                } // /success
            });// ajax

        }

        return false;
    });//submit ProfessionalExperienceForm function
}

function  attachReferences() {

    console.log("attachReferences method");

    // remove the error
    $('.text-danger').remove();
    // remove the form-error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    //submit attachReferencesForm function
    $("#attachReferencesForm").unbind('submit').bind('submit', function() {

        //remove the error text
        $(".text-danger").remove();
        //remove the form error
        $(".form-group").removeClass("has-error").removeClass("has-success");

        var referee_name_1 = $('#referee_name_1').val(); //get intern referee name 1 from form input
        var referee_organisation_1 = $('#referee_organisation_1').val(); //get referee organisation 1 from form input
        var dial_code_1 = $('#dial_code_1').val(); //get referee organisation 1 from form input
        var referee_contact_1 = $('#referee_contact_1').val(); //get referee contact 1 from form input

        var referee_name_2 = $('#referee_name_2').val(); //get intern referee name 2 from form input
        var referee_organisation_2 = $('#referee_organisation_2').val(); //get referee organisation 2 from form input
        var dial_code_2 = $('#dial_code_2').val(); //get referee organisation 2 from form input
        var referee_contact_2 = $('#referee_contact_2').val(); //get referee contact 2 from form input

        var referee_name_3 = $('#referee_name_3').val(); //get intern referee name 3 from form input
        var referee_organisation_3 = $('#referee_organisation_3').val(); //get referee organisation 3 from form input
        var dial_code_3 = $('#dial_code_3').val(); //get referee organisation 3 from form input
        var referee_contact_3 = $('#referee_contact_3').val(); //get referee contact 3 from form input




        console.log("__________________________________Used In Development_________________________________");

        console.log("Referee name 1: "+ referee_name_1);
        console.log("Referee organisation 1: "+ referee_organisation_1);
        console.log("DialCode 1: "+ dial_code_1);
        console.log("Referee contact 1: "+ referee_contact_1);

        console.log("Referee name 2: "+ referee_name_2);
        console.log("Referee organisation 2: "+ referee_organisation_2);
        console.log("DialCode 2: "+ dial_code_2);
        console.log("Referee contact 2: "+ referee_contact_2);

        console.log("Referee name 3: "+ referee_name_3);
        console.log("Referee organisation 3: "+ referee_organisation_3);
        console.log("DialCode 3: "+ dial_code_3);
        console.log("Referee contact 3: "+ referee_contact_3);


        console.log("__________________________________Used In Development_________________________________");


        if(referee_name_1 && referee_organisation_1 && dial_code_1 && referee_contact_1 &&
            referee_name_2 && referee_organisation_2 && dial_code_2 && referee_contact_2 &&
            referee_name_3 && referee_organisation_3 && dial_code_3 && referee_contact_3) {

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {


                        Swal.fire("References Successfully Submitted!", "", "success");

                        //move to the next step (step 6)
                        var step6 = $("#step-6"); // find element with id = step-5
                        var target = $(step6.attr('href')); // get element

                        navListItems.removeClass('btn-success').addClass('btn-default');

                        if(step6.attr('disabled') == "disabled") {
                            step6.removeAttr('disabled');
                        }

                        step6.addClass('btn-success');
                        allWells.hide();
                        target.show();

                        attachInternUploads();


                    }  else if(response.success == false) {

                        Swal.fire("An Error Occurred! "+ response.messages, 'Please start your application from the beginning or contact us for additional help', "warning");

                    }// if

                } // /success
            });// ajax

        }

        return false;
    });//submit attachReferencesForm function

}

function  attachInternUploads() {

    console.log("attachInternUploads method");

    // remove the error
    $('.text-danger').remove();
    // remove the form-error
    $('.form-group').removeClass('has-error').removeClass('has-success');

    //submit attachReferencesForm function
    $("#attachInternUploadsForm").unbind('submit').bind('submit', function() {

        //remove the error text
        $(".text-danger").remove();
        //remove the form error
        $(".form-group").removeClass("has-error").removeClass("has-success");

        var nrc = $('#nrc').val(); //get nrc from form input
        var academic_qualification = $('#academic_qualification').val(); //get academic qualification from form input
        var cv = $('#cv').val(); //get cv from form input


        if(nrc && academic_qualification && cv){

            const swalWithBootstrapButtons = Swal.mixin({
                width: "1160px",
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
                html:
                    '<section class="section" style="padding: 50px">\n' +
                    '    <div class="container">\n' +
                    '        <div class="row justify-content-center">\n' +
                    '        </div>\n' +
                    '        <div class="row justify-content-center">\n' +
                    '                    <span><h4 class="mt-4 mb-3">Youth Lead Zambia ResponsibilitiesYouth</h4></span>\n' +
                    '        </div>\n' +
                    '            <div >\n' +
                    '                <ul>\n' +
                    '                    <li class="li"> Identify, evaluate, and select qualified youth to participate in the program</li>\n' +
                    '                    <li class="li"> Identify, evaluate, and select organizations to serve as intern hosts and mentors</li>\n' +
                    '                    <li class="li"> Monitor, track, and report on youth intern and host organization participation and performance</li>\n' +
                    '                    <li class="li"> Collaborate with youth interns and host organization supervisors to set personal and career development goals</li>\n' +
                    '                    <li class="li"> Pay a monthly stipend of $USD 135.00 (Zambian Kwacha equivalent) to youth interns that meet all training and internship participation requirements.</li>\n' +
                    '                    <li class="li"> Provide financial support of up to $USD 2,000.00 for youth interns to develop and implement capstone projects. Note: Capstone projects are opportunities for youth to create their own solutions to challenges they identify in their community and to apply the skills they are learning through training and internships. Small projects will address challenges in the community related to governance, health, and women’s and youth rights. Host organizations are encouraged to contribute in-kind support to youth-led small projects</li>\n' +
                    '                    <li class="li"> Provide networking and relationship building opportunities for youth interns and mentee with community leaders, civil society organizations, entrepreneurs, and government officials.</li>\n' +
                    '                    <li class="li"> Provide technical support, guidance, and networking opportunities for host organizations to improve their capacity to implement internship and mentoring activities.</li>\n' +
                    '\n' +
                    '                </ul>\n' +
                    '            </div>\n' +
                    '\n' +
                    '        <div class="row justify-content-center">\n' +
                    '            <span><h4 class="mt-4 mb-3">Intern Host Organization Responsibilities</h4></span>\n' +
                    '        </div>\n' +
                    '        <div>\n' +
                    '            <ol>\n' +
                    '                <li class="li"> Submit a detailed scope of work for each intern requested. Note: Interns are required to work eight hours per day, Monday through Thursday, excluding government holidays. Every Friday interns are required to participate in Youth Lead trainings;</li>\n' +
                    '                <li class="li"> Assign a workstation with computer (laptop, desktop, or tablet) with internet access for each intern hosted;</li>\n' +
                    '                <li class="li"> Designate a supervisor / mentor for each intern hosted, responsible for providing on-the-job skills development and support during working hours;</li>\n' +
                    '                <li class="li"> Review and approve youth intern career and personal development goals within 30 days of the start of the internships;</li>\n' +
                    '                <li class="li"> Submit a copy of the organizations internship policy to Youth Lead within 30 days of the start of the internship. Note: Organizations that do not have an internship policy will receive support from Youth Lead to develop one within 60 days of the start of the internship;</li>\n' +
                    '                <li class="li"> Conduct at least one (1) formal mentoring session each week during the duration of the internship;</li>\n' +
                    '                <li class="li"> Conduct at least two (2) performance reviews with the youth intern during the duration of the internship;</li>\n' +
                    '                <li class="li"> Complete occasional surveys and participate in focus groups discussions organized by Youth Lead to enable the project to gather stakeholder input, refine activities and improve performance;</li>\n' +
                    '                <li class="li"> Review and approve youth intern attendance sheets every 30 days from the start of the internship. </li>\n' +
                    '            </ol>\n' +
                    '            <p>Youth Lead strongly encourages host organizations to provide financial or in-kind support to youth interns in addition to monthly stipend provided by the project. The Youth Lead stipend is only intended to alleviate the cost of transportation to/from the workplace by the intern. Also, host organization leadership and the assigned supervisors / mentors are requested to expose interns to as much of the organizational day to day operations as possible. This includes staff meetings; trips to meet with stakeholders, clients, or customers; or networking and advocacy opportunities.</p>\n' +
                    '        </div>\n' +
                    '\n' +
                    '        <div class="row justify-content-center">\n' +
                    '            <span><h4 class="mt-4 mb-3">Youth Intern Responsibilities</h4></span>\n' +
                    '        </div>\n' +
                    '        <div><div>\n' +
                    '            <ol>\n' +
                    '                <li class="li"> Attend all Youth Lead trainings, including Friday Sessions. Note: Attendance is mandatory. Absences require prior approval from Youth Lead. No more than two (2) excused absences will be permitted. Youth may be removed from the program for attendance issues. </li>\n' +
                    '                <li class="li"> Intern eight hours per day, Monday through Thursday, excluding government holidays. Note: Attendance is mandatory. Absences require prior approval from the intern supervisor</li>\n' +
                    '                <li class="li"> Perform all duties required of this position as detailed in the scope of work provided by the host organization and approved by Youth Lead;</li>\n' +
                    '                <li class="li"> Comply with all host organization policies, procedures, rules and regulations, both written and oral, as defined by the host organization;</li>\n' +
                    '                <li class="li"> Complete career and personal development goals within 30 days of the start of the internship;</li>\n' +
                    '                <li class="li"> Participate in at least one (1) formal mentoring session each week during the duration of the internship;</li>\n' +
                    '                <li class="li"> Participate in at least two (2) performance reviews with the supervisor / mentor during the duration of the internship</li>\n' +
                    '                <li class="li"> Complete occasional surveys and participate in focus groups discussions organized by Youth Lead to enable the project to gather input, refine activities and improve performance;</li>\n' +
                    '                <li class="li"> Complete attendance sheets and submit to supervisor every 30 days.</li>\n' +
                    '            </ol>\n' +
                    '            </div>\n' +
                    '            <p> This agreement does not represent an offer of employment, part-time or otherwise, or an apprenticeship and shall not be construed as such. As an intern, employee benefits will not be provided unless the host organization independently chooses to offer such benefits, including health, life, or other forms of insurance. Internships are “at-will” which means that either the intern, host organization, or Youth Lead project may terminate the internship program at any time without cause.</p>\n' +
                    '            <p>If Youth Lead interns have access to proprietary or confidential information, the host organization shall ensure that interns sign a confidentiality agreement form. It is not the responsibility of Youth Lead to ensure confidentiality of information.</p>\n' +
                    '        </div>\n' +
                    '    </div>\n' +
                    '\n' +
                    '        </div>\n' +
                    '    </div>\n' +
                    '</section>',
            });

            swalWithBootstrapButtons.fire({
                title: 'Conditions And Requirements',
                text: "You won't be able to revert this!",
                showCancelButton: true,
                confirmButtonText: 'Yes, I Agree',
                cancelButtonText: 'No, I Dont Agree',
                reverseButtons: true,
                showLoaderOnConfirm: true,
                preConfirm: (value) => {

                    document.getElementById('attachInternUploadsForm').submit();
                    return new Promise( resolve => {} ) // never-resolving promise
                    /* return false;/*fetch(`//api.github.com/users/${login}`)
                         .then(response => {
                             if (!response.ok) {
                                 throw new Error(response.statusText)
                             }
                             return response.json()
                         })
                         .catch(error => {
                             Swal.showValidationMessage(
                                 `Request failed: ${error}`
                             )
                         })*/
                }

            }).then((result) => {
                if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            });

        }

        return false;
    });//submit attachReferencesForm function

}
