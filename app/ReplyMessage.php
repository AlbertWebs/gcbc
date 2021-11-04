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
        $appName = 'Grace Community Bible Church';
        $appEmail = 'mail@gracecommunitybiblechurch.org';
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = 'info@gracecommunitybiblechurch.org';
        $toVariableName = 'Grace Community Bible Church';

        // Mail Merchant
        Mail::send('mailPage', $data, function($message) use ($email,$subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->replyto($email)->cc('info@gracecommunitybiblechurch.org')->cc('info@designekta.com')->subject($subject);
        });

        // Mail Client
        Mail::send('mailPages', $data, function($message) use ($email,$subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->replyto($FromVariable)->cc($email)->cc('info@gracecommunitybiblechurch.org')->cc('info@designekta.com')->subject($subject);
        });

        
    }
    
}
