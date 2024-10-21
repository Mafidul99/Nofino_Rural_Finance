<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Mail;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



class ContactController extends Controller
{
    public function index()
    {
    return view("common.contact");
    }

    public function sendmail2(Request $request)
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'phone' => 'required|min:10|max:15',
            'message' => 'required|min:3|max:1000',
        ]);

        $adminEmail = "nofinoruralfinance@gmail.com";

        $response = Mail::to("$adminEmail")->send(new ContactUs($data));

        //dd($request->all());
        //return redirect()->back()->with('success', "Application Request Successfully ! Our team will contact with you very soon");

        if($response){
            return back()->with('success', "Request has been Successfully ! Our team will contact with you very soon");
        }else{
            return back()->with("error", "Request Not Successfull ! Plaese try again");
        }

    }



}
