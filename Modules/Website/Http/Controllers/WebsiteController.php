<?php

namespace Modules\Website\Http\Controllers;

use App\Email;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\HostOrganisation\Entities\HostOrganisationApplication;
use Modules\Applications\Entities\Application;
use Modules\Website\Entities\ClientForUpdate;

class WebsiteController extends Controller
{

    public function websiteHomePage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        return view('website::home_page');
    }

    /**
     * Go to host organisation application page.
     * @param Request $request
     * @return Response
     */
    public function hostOrganisationApplicationPage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        $dialCodes = array('' => '~~SELECT~~');
        $countries = Country::all();

        foreach($countries as $country) {
            $dialCodes["{$country->id}"] = $country->country_name ."  ". $country->dial_code;
        }

        $context = [
            'dialCodes' => $dialCodes,
        ];


        return view('website::host_organisation_application_page', $context);
    }

    /**
     * Go to host organisation application confirmation page.
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function hostOrganisationApplicationConfirmationPage(Request $request, $id)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        $hostOrganisationApplication = Application::find($id);

        if($hostOrganisationApplication != null) {

            $context = [
                'hostOrganisationApplication' => $hostOrganisationApplication,
            ];

            return view('website::host_organisation_application_confirmation_page', $context);
        }
    }

    /**
     * Go to intern application confirmation page.
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function internApplicationConfirmationPage(Request $request, $id)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        $internApplication = Application::find($id);

        if($internApplication != null) {

            $context = [
                'internApplication' => $internApplication,
            ];

            return view('website::intern_application_confirmation_page', $context);
        }
    }

    /**
     * Go to intern application page.
     * @param Request $request
     * @return Response
     */
    public function internApplicationPage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        //get dial codes and nationalities
        $dialCodes = array('' => '~~SELECT~~');
        $nationalities = array('' => '~~SELECT~~');
        $countries = Country::all();

        foreach($countries as $country) {
            $dialCodes["{$country->id}"] = $country->country_name ."  ". $country->dial_code;
            $nationalities["{$country->id}"] = $country->nationality;
        }

        $context = [
            'dialCodes' => $dialCodes,
            'nationalities' => $nationalities,
        ];
        return view('website::intern_application_page', $context);
    }

    /**
     * Go to terms and conditions page.
     * @param Request $request
     * @return Response
     */
    public function termsAndConditions(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        return view('website::terms_and_conditions_page');
    }

    /**
     * Go to about page.
     * @param Request $request
     * @return Response
     */
    public function aboutPage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        return view('website::about_page');
    }

    /**
     * Go to contact page.
     * @param Request $request
     * @return Response
     */
    public function contactPage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        return view('website::contact_page');
    }

    /**
     * Go to youth leaders page.
     * @param Request $request
     * @return Response
     */
    public function youthLeadersPage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        return view('website::success_stories_page');
    }

    /**
     * Go to alumni page.
     * @param Request $request
     * @return Response
     */
    public function alumniPage(Request $request)
    {
        //forget or clear any active sessions
        $this->forgetAllActiveSessions($request);

        return view('website::alumni_page');
    }

    public function storeNewClientForUpdates()
    {
        //form input rules
        $rules = array(
            'name'=>'required|max:50',
            'email' =>'required|email|max:255',
        );

        // validate against the inputs from travel application form
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect()->back()
                ->withErrors($validator)
                ->withInput();

        } else {

            //declare input variables
            $name = Input::get('name');
            $emailAddress = Input::get('email');

            if(ClientForUpdate::where('email', $emailAddress)->count() > 0) {
                return redirect()->back()->with('warning', "The email address provided already exists. Please use a different email address");
            }

            //store new client for updates
            $response = $this->createNewClientForUpdate($name, $emailAddress);

            if($response['status']) {

                //create new email object
                $email = new Email();

                $email->recipient_name = $name;
                $email->recipient_email_address = $emailAddress;
                $email->email_name = "Lizmumpreneur";
                $email->email_body = "Thank you for successfully subscribing to Lizmumpreneur. You will receive first hand updates regarding any activities or events ca
rried out by Lizmumpreneur. Stay tuned.";
                $email->email_subject = "Updates Subscription";
                $email->email_header = "Liz Mumpreneur Zambia";

                //send email
                $response2 = $this->sendEmail($email);

                if($response2['status']) { $email->save(); }

                return redirect()->back()->with('success', $response['message']);
            } else {
                return redirect()->back()->with('error', $response['message']);
            }
        }
    }

    /****************************************************************************************/
    private function createNewClientForUpdate($name, $email)
    {
        $response = array();

        try {

            //save client for updates
            ClientForUpdate::create([
                'name' => $name,
                'email' => $email,
            ]);

            $response['status'] = true;
            $response['message'] = "Thank you for successfully registering for updates. Updates will be sent to your email address at {$email}";

            return $response;
        }

        catch(Exception $e) {

            report($e);

            $response['status'] = false;
            $response['message'] = "An internal server error occurred. Please try again later";

            return $response;
        }
    }

    public function sendEmail(Email $email)
    {
        $response = array();

        try {

            $to_name = $email->recipient_name;
            $to_email = $email->recipient_email_address;
            $emailSubject = $email->email_subject;
            $emailHeader = $email->email_header;

            $data = array(
                "name" => $email->email_name,
                "body" => $email->email_body,
                "recipientName" => $to_name,
            );

            Mail::send(
                "inc.email_template",
                $data,
                function($message) use ($to_name, $to_email, $emailSubject, $emailHeader) {

                    $message->to($to_email, $to_name)->subject($emailSubject);
                    $message->from("donotreply@gmail.com", $emailHeader);
                });

            $response['status'] = true;
            $response['message'] = "Email Successfully Sent to {$to_email}";

            return $response;
        }

        catch(Exception $e) {

            report($e);

            $response['status'] = false;
            $response['message'] = "Error: {$e->getMessage()}";

            return $response;
        }
    }

    public function viewTemplate() {
        return view('inc.email_template', ['recipientName' => 'mulenga chitalima', 'body' => 'test']);
    }



    /*--------------------------------------------------------------------------------------------*/
    private function forgetAllActiveSessions(Request $request)
    {
        //forget or clear any active host organisation application sessions
        $request->session()->forget('applicant_and_organisation_details');
        $request->session()->forget('organisation_information');
        $request->session()->forget('intern_request_forms');

        //forget or clear any active host organisation application sessions
        $request->session()->forget('intern_personal_information');
        $request->session()->forget('intern_parents_information');
        $request->session()->forget('intern_education_information');
        $request->session()->forget('intern_work_experienceForms');
        $request->session()->forget('intern_references_forms');
    }
}
