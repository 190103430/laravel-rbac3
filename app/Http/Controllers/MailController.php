<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send(){
        $objectDemo= new \ stdClass();
        $objectDemo-> reciever='Almas';
        $objectDemo-> sender='Almas';
        Mail::to('190103430@stu.sdu.edu.kz')->send(new DemoEmail($objectDemo));
        
    }

}
