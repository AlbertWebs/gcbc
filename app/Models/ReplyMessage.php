<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mail;

class ReplyMessage extends Model
{
    public static function mailrequest($name,$email,$subject,$message){
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'messages'=>$message,
        );
        $subject = $subject;
        $appName = 'Trice Real Estate';
        $appEmail = 'mail@tricerealestate.com';
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = 'info@tricerealestate.com';
        $toVariableName = 'Trice Real Estate';

        // Mail Merchant
        Mail::send('mailPage', $data, function($message) use ($email,$subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->replyto($email)->cc('info@tricerealestate.com')->cc('info@designekta.com')->subject($subject);
        });

        // Mail Client
        Mail::send('mailPages', $data, function($message) use ($email,$subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->replyto($FromVariable)->cc($email)->cc('info@designekta.com')->subject($subject);
        });

        
    }
    
}
