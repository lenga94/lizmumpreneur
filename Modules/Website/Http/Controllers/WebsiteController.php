<?php

namespace Modules\Website\Http\Controllers;

use App\Email;
use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Modules\Website\Entities\ClientForUpdate;

class WebsiteController extends Controller
{
    /**
     * ComingSoonController constructor.
     */
    public function __construct()
    {

    }

    public function comingSoonPage()
    {
        return view('website::coming_soon');
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
                $email->email_body = "Thank you for successfully subscribing to Lizmumpreneur. You will receive first hand updates regarding any activities or events carried out by Lizmumpreneur. Stay tuned.";
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
}
