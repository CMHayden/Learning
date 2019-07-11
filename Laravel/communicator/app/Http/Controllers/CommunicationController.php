<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Mailgun\Mailgun;


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

        $mg = Mailgun::create(env('MAILGUN_SECRET'));
        $email = env('MAIL_TO_ADDRESS');

        $message_body = $request['message'];
        $from =         $request['email'];

        $mg->messages()->send(env('MAILGUN_DOMAIN'), [
            'from'    => "COMMUNICATOR <$from>",
            'to'      => "<$email>",
            'subject' => 'Communicator Message',
            'text'    => "$message_body"
        ]);
        return app('Illuminate\Http\Response')->status();
    }

}
