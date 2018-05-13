<?php

namespace App\Http\Controllers;

use App\Lead;
use Illuminate\Support\Facades\Input;

class LeadController extends Controller
{
    public function create()
    {
        //Rule number One : Never trust user inputs ! ;)
        $name       =   Input::get('name');
        $email      =   Input::get('email');
        $phone      =   Input::get('phone');
        $message    =   Input::get('message');

        //create a bean
        $lead       =   new Lead();
        $lead->setName($name);
        $lead->setEmail($email);
        $lead->setPhone($phone);
        $lead->setMessage($message);

        $validation = $this->LeadValid($lead);
        if($validation['isValid'])
        {
            $myemail =  "achraf.bellaali@gmail.com";
            $msg     =  "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nMessage: " . $message;
            $success =  mail($myemail,"New Form Submission",$msg);
            if($success)
            {
                return view('Pages.Lead.succeed');
            }
            else
            {
                $error['notReceived'] = 'We couldn\'t receive your message, try later !';
                return view('Pages.Lead.failed', compact('error'));
            }
        }
        else
        {
            $error = $validation['error'];
            return view('Pages.Lead.failed', compact('error'));
        }
    }

    //Form validation (of curse it should be on frontend too !)
    private function LeadValid(Lead $lead)
    {
        //parameters
        $name       =   $lead->getName();
        $email      =   $lead->getEmail();
        $phone      =   $lead->getPhone();
        $message    =   $lead->getMessage();

        //error
        $error      =   [];

        //is Valid
        $isValid = true;

        //condition 1 : required
        if(
                $name       === null
            ||  $email      === null
            ||  $phone      === null
            ||  $message    === null
        )
        {
            $isValid            =   false;
            $error['required']  =   'All fields are required !';
        }

        //condition 2 : phone number all characters must be digits
        if(!is_numeric($phone))
        {
            $isValid            =   false;
            $error['phone']     =   'All characters must be digits !';
        }

        //condition 3 : email must be valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $isValid            =   false;
            $error['email']     =   'Email adress is not valid !';
        }

        $response = [
            'isValid'   =>  $isValid,
            'error'     =>  $error
        ];
        return $response;
    }
}
