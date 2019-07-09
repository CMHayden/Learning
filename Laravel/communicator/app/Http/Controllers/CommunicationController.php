<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;


class CommunicationController extends Controller
{
    public function index(Request $request) {

        $requestJson = json_decode($request->getContent(), true);

        //$this->sendEmail($requestJson);

        $this->sendSMS($requestJson);

    }

    public function sendSMS($requestJson) {
        //
    }

    public function sendEmail($requestJson) {
        //
    }

}
