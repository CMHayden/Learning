<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;


class CommunicationController extends Controller
{
    public function index(Request $request) {

        $this->sendEmail($request);

        $this->sendSMS($request);

    }

    public function sendSMS($request) {

        $sid        = getenv('TWILIO_SID');
        $token      = getenv('TWILIO_TOKEN');
        $number     = getenv('TWILIO_SENDTONUMBER');
        $twilio     = new Client($sid, $token);

        $message_body = $request['message'];
        $from_number = $request['number'];

        $message = $twilio  ->messages
                            ->create("+447450563549",
                                    array("from" => "+441603340331",
                                            "body" => "$message_body  Sent by $from_number")
                                    );
    }

    public function sendEmail($request) {
        //
    }

}
