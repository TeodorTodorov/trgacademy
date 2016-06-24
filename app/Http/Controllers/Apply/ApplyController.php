<?php

namespace App\Http\Controllers\Apply;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;
use Mail;
use Illuminate\Http\Request;


class ApplyController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */


    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    public function apply(Request $request) {

        


        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $grade = $request->input('grade');
        $laptop = $request->input('laptop');
        $message = $request->input('message');
$data = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);


//Mail::send([], [], function ($message) {
 // $message->to('teodorvulchev@gmail.com')
//    ->subject('Hello world')
    // here comes what you want
  //  ->setBody('Hi, welcome user!');
//});
$mail = new PHPMailer();
$mail->isSMTP(); // $mail->Body = $body; etc
$mail->smtpConnect([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);
$mail->send();
$mail->smtpClose();



    }
}
