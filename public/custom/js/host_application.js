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

    $('#applicant_and_organisation_details').show();
    //$('#organisation_information').show();
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
        $('#applicant_and_organisation_details').show();
    });

    $("#internRequestsFormPreviousButton").click(function(){
        allWells.hide();
        $('#organisation_information').show();
    });

    $("#number_of_interns").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var numInputs = $(this).val();
        var appendhtml = '';

        for (var i = 0; i < numInputs; i++) {

            var position = i + 1;

            appendhtml += '' +
                '<div class="row" style="margin-top: 20px">' +
                    '<div class="col-md-5 col-lg-5 col-sm-5">' +
                    '   <div class="form-group">' +
                    '       <label for="intern_position" class="col-sm-12 control-label">Position of Intern</label>' +
                '           <div class="col-sm-12">' +
                '               <input type="text" name="intern_position'+ position +'" id="intern_position'+ position +'" class="form-control" placeholder="Intern Position" autocomplete="off" required />' +
                '           </div>' +
                    '    </div>' +
                '        <div class="form-group">' +
                '           <label for="intern_position" class="col-sm-12 control-label">Supervisor Name of Intern '+ position +'</label>' +
                '           <div class="col-sm-12">' +
                '               <input type="text" name="supervisor_name'+ position +'" id="supervisor_name'+ position +'" class="form-control" placeholder="Supervisor Name" autocomplete="off" required />' +
                '           </div>' +
                '        </div>' +
                    '</div>' +
                    '' +
                    '<div class="col-md-7 col-lg-7 col-sm-7">' +
                    '   <div class="form-group">' +
                    '       <label for="intern_position" class="col-sm-12 control-label">Scope of Work of Intern '+ position +'</label>' +
                '           <div class="col-sm-12">' +
                '               <textarea type="textarea" name="intern_scope'+ position +'" id="article-ckeditor'+ position +'" class="form-control" rows="10" placeholder="Paste Scope Of work" autocomplete="off" required ></textarea>' +
                '           </div>' +
                    '    </div>' +
                    '</div>' +
                    '' +
                '</div>';
        }



        $("#terms_of_reference").empty().append(appendhtml);

    });

    $("#organisation_type").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var specificOrganisationType = $('#specific_organisation_type');
        var typeOfOrganisation = $('#type_of_organisation');

        if(selectedValue == 'Other') {
            specificOrganisationType.attr('style','display: block');
            typeOfOrganisation.attr('required', true);
        } else {
            specificOrganisationType.attr('style','display: none');
            typeOfOrganisation.attr('required', false);
        }

    });

    $("#organisation_sector_targets").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var specificSectorTarget = $('#specific_sector_target');
        var sectorTarget = $('#sector_target');

        if(selectedValue == 'Other') {
            specificSectorTarget.attr('style','display: block');
            sectorTarget.attr('required', true);
        } else {
            specificSectorTarget.attr('style','display: none');
            sectorTarget.attr('required', false);
        }

    });

    $("#intern_location_question").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var specificInternAddress = $('#specific_intern_address');
        var internLocationAddress = $('#intern_location_address');

        if(selectedValue == 'No') {
            specificInternAddress.attr('style','display: block');
            internLocationAddress.attr('required', true);
        } else {
            specificInternAddress.attr('style','display: none');
            internLocationAddress.attr('required', false);
        }

    });

    $("#usaid_project_question").change(function(){

        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var usaidFundedProject = $('#usaid_funded_project');
        var fundedProjectName = $('#funded_project_name');

        if(selectedValue == 'Yes') {
            usaidFundedProject.attr('style','display: block');
            fundedProjectName.attr('required', true);
        } else {
            usaidFundedProject.attr('style','display: none');
            fundedProjectName.attr('required', false);
        }
    });

    $("#intern_sponsorship_question").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var financialSupport = $('#financial_support');
        var supportAmount = $('#support_amount');

        if(selectedValue == 'Yes') {
            financialSupport.attr('style','display: block');
            supportAmount.attr('required', true);
        } else {
            financialSupport.attr('style','display: none');
            supportAmount.attr('required', false);
        }
    });

    $("#mentoring_program_question").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var mentorshipCategory = $('#mentorship_category');
        var mentorshipType = $('#mentorship_type');

        if(selectedValue == 'Yes') {
            mentorshipCategory.attr('style','display: block');
            mentorshipType.attr('required', true);
        } else {
            mentorshipCategory.attr('style','display: none');
            mentorshipType.attr('required', false);
        }
    });

    $("#intern_hosting_question").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        //div's
        var internshipDuration = $('#internship_duration');
        var internshipPolicy = $('#internship_policy');
        var candidateIdentification = $('#candidate_identification');

        //inputs
        var durationOfInternship = $('#duration_of_internship');
        var internshipPolicyQuestion = $('#internship_policy_question');
        var internIdentificationQuestion = $('#intern_identification_question');

        if(selectedValue == 'Yes') {

            //div's
            internshipDuration.attr('style','display: block');
            internshipPolicy.attr('style','display: block');
            candidateIdentification.attr('style','display: block');

            //inputs
            durationOfInternship.attr('required', true);
            internshipPolicyQuestion.attr('required', true);
            internIdentificationQuestion.attr('required', true);

        } else {

            //div's
            internshipDuration.attr('style','display: none');
            internshipPolicy.attr('style','display: none');
            candidateIdentification.attr('style','display: none');

            //inputs
            durationOfInternship.attr('required', false);
            internshipPolicyQuestion.attr('required', false);
            internIdentificationQuestion.attr('required', false);
        }
    });

    $("#intern_identification_question").change(function(){
        //selection changed
        console.log("Selected Value: "+ this.value);//this will give the selected option's value
        var selectedValue = this.value;

        var internIdentification = $('#intern_identification');
        var specificCandidateIdentification = $('#specific_candidate_identification');

        if(selectedValue == 'Other') {
            internIdentification.attr('style','display: block');
            specificCandidateIdentification.attr('required', true);
        } else {
            internIdentification.attr('style','display: none');
            specificCandidateIdentification.attr('required', false);
        }
    });

});

attachOrganisationAndApplicant();

function attachOrganisationAndApplicant() {

    console.log("attachOrganisationAndApplicant method");

    //submit attachOrganisationAndApplicantForm function
    $("#attachOrganisationAndApplicantForm").unbind('submit').bind('submit', function() {

        var applicant_name = $("#applicant_name").val();
        var applicant_title = $("#applicant_title").val();
        var dial_code = $("#dial_code").val();
        var applicant_phone_number = $("#applicant_phone_number").val();
        var applicant_email = $("#applicant_email").val();
        var organisation_name = $("#organisation_name").val();
        var organisation_address = $("#organisation_address").val();
        var organisation_type = $("#organisation_type").val();
        var registration_of_organisation = $("#registration_of_organisation").val();
        var organisation_sector_targets = $("#organisation_sector_targets").val();
        var organisation_information_main_source = $("#organisation_information_main_source").val();


        console.log("__________________________________Used In Development_________________________________");
        console.log("Applicant Name: "+ applicant_name);
        console.log("Applicant Title: "+ applicant_title);
        console.log("Dial Code: "+ dial_code);
        console.log("Applicant Phone Number: "+ applicant_phone_number);
        console.log("Applicant Email: "+ applicant_email);
        console.log("Organisation Name: "+ organisation_name);
        console.log("Organisation Address: "+ organisation_address);
        console.log("Organisation Type: "+ organisation_type);
        console.log("Registration of Organisation: "+ registration_of_organisation);
        console.log("Organisation Sector Targets: "+ organisation_sector_targets);
        console.log("Organisation Information Main Source: "+ organisation_information_main_source);
        console.log("__________________________________Used In Development_________________________________");
        if(applicant_name && applicant_title && dial_code && applicant_phone_number && applicant_email &&
            organisation_name && organisation_address && organisation_type && organisation_type && registration_of_organisation &&
            organisation_sector_targets && organisation_information_main_source){

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

                        Swal.fire("Cannot Submit Applicant and Organisation Details!", response.messages, "warning");

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

function attachInternRequests() {

    //submit internRequestsForm function
    $("#internRequestsForm").unbind('submit').bind('submit', function() {

        var numberOfInterns = $('#number_of_interns').val(); //get number of interns requested from form input

        console.log("__________________________________Used In Development_________________________________");
        console.log("Number of interns requested: "+ numberOfInterns);
        console.log("__________________________________Used In Development_________________________________");


        if(numberOfInterns){

            var form = $(this);
            $.ajax({
                url : form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success:function(response) {
                    console.log(response);

                    if(response.success == true) {

                        let timerInterval;

                        Swal.fire({
                            title: 'Intern Request Successfully Submitted!',
                            icon: 'success',
                            timer: 2000,
                            timerProgressBar: true,
                            onBeforeOpen: () => {
                                Swal.showLoading();
                                timerInterval = setInterval(() => {
                                    Swal.getContent().querySelector('b')
                                        .textContent = Swal.getTimerLeft();
                                }, 100);
                            },
                            onClose: () => {
                                clearInterval(timerInterval);
                            }
                        }).then((result) => {
                            if (
                                /* Read more about handling dismissals below */
                                result.dismiss === Swal.DismissReason.timer
                            ) {
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
                                    text: "You won't be able to revert this if you proceed",
                                    showCancelButton: true,
                                    confirmButtonText: 'Yes, I Agree',
                                    cancelButtonText: 'No, I Dont Agree',
                                    reverseButtons: true,
                                    showLoaderOnConfirm: true,
                                    preConfirm: (value) => {

                                        //redirect to store host organisation application
                                        // similar behavior as an HTTP redirect
                                        document.getElementById('store-application').submit();
                                        return new Promise( resolve => {} );
                                    }
                                })
                            }
                        }).then((result) => {
                            if (
                                /* Read more about handling dismissals below */
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire(
                                    'Cancelled',
                                    'Can not submit application without agreeing to the terms and conditions',
                                    'error'
                                );
                            }
                        });

                    }  else if(response.success == false) {

                        Swal.fire("An Error Occurred! "+ response.messages, 'Please start your application from the beginning or contact us for additional help', "warning");

                    }// if
                } // /success
            });// ajax

        }

        return false;
    });//submit internRequestsForm function
}
