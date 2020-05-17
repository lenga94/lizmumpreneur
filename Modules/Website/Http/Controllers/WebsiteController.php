<?php

namespace Modules\Website\Http\Controllers;

use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
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
            $email = Input::get('email');

            if(ClientForUpdate::where('email', $email)->count() > 0) {
                return redirect()->back()->with('warning', "The email address provided already exists. Please use a different email address");
            }

            //store new client for updates
            $response = $this->createNewClientForUpdate($name, $email);

            if($response['status']) {
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
}
