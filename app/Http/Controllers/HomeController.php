<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect; 

use App\Message;
use App\Notifications;
use Session;
use App\ReplyMessage;
use Carbon\Carbon;

use DB;

class HomeController extends Controller
{
  
    public function index()
    {
        $Events = DB::table('blogs')->whereDate('date', '>=', Carbon::now()->toDateString())->get();
        $title="Grace Community Bible Church | Welcome to GCBC";
        return view('front.index',compact('title','Events'));
    }


    public function about()
    {
        $title="About Us | Grace Community Bible Church";
        $About = DB::table('about')->get();
        return view('front.about',compact('title','About'));
    }

    public function philosophy()
    {
        $title="Our Philosophy | Grace Community Bible Church";
        $About = DB::table('about')->get();
        return view('front.philosophy',compact('title','About'));
    }

    public function objectives()
    {
        $title="Our Objectives | Grace Community Bible Church";
        $About = DB::table('about')->get();
        return view('front.objectives',compact('title','About'));
    }
    
    


    public function contact()
    {
        $title="Contact Us | Grace Community Bible Church";
        $About = DB::table('about')->get();
        return view('front.contact',compact('title','About'));
    }

    public function programs()
    {
        $title="Our Programs | Grace Community Bible Church";
        $About = DB::table('about')->get();
        return view('front.programs',compact('title','About'));
    }

    public function registration($slung)
    {
        $title="Register Event | Grace Community Bible Church";
        $Blogs = DB::table('blogs')->where('slung',$slung)->get();
        return view('front.register',compact('title','Blogs'));
    }

    

  
    public function sermons()
    {
        $title="Our Sermons | Grace Community Bible Church";
        $Sermons = DB::table('sermons')->orderBy('id','DESC')->get();
        return view('front.sermons',compact('title','Sermons'));
    }

    public function ministry($slung)
    {
        $Ministries = DB::table('ministries')->where('slung',$slung)->get();
        $title="Our Sermons | Grace Community Bible Church";
        return view('front.ministry',compact('title','Ministries'));
    }

    public function ministries()
    {
        $title="Our Ministries | Grace Community Bible Church";
        $Ministries = DB::table('ministries')->get();
        return view('front.ministries',compact('title','Ministries'));
    }

    public function give_now()
    {
        $title="Give to Grace Community Bible Church";
        $Ministries = DB::table('ministries')->get();
        return view('front.give',compact('title','Ministries'));
    }

    public function give_paybill()
    {
        $title="Give to Grace Community Bible Church";
        $Ministries = DB::table('ministries')->get();
        return view('front.give_paybill',compact('title','Ministries'));
    }

    
    
    
    public function sermon($slung)
    {
        $title="Our Sermons | Grace Community Bible Church";
        $Sermons = DB::table('sermons')->where('slung',$slung)->get();
        return view('front.sermon',compact('title','Sermons'));
    }

    

    
    public function blogs()
    {
        $Blog = DB::table('blogs')->get();
        $title="News & Events | Grace Community Bible Church";
        return view('blog.index',compact('title','Blog'));
    }

    public function blog($slung)
    {
        
        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        foreach ($Blog as $key => $value) {
            # code...
            $title="$value->title | Grace Community Bible Church";
            $titles = $value->title;
            $slung = $value->slung;
            $image = $value->image_one;
            return view('blog.blog',compact('title','Blog','titles','slung','image'));
        }

    }


  
    

    public function send_message(Request $request){
        if(isset($request->firstnamer)){
            return "Your Message Has been Sent, We will Get back To You Shortly";
        }else{
            $name = $request->name;
            $email = $request->email;
            $subject = $request->subject;
            $phone = $request->phone;
            $message = $request->message;

            $Message = new Message;
            $Message->name = $name;
            $Message->email = $email;
            $Message->subject = $subject;
            $Message->mobile = $phone;
            $Message->content = $message;
            $Message->save();

            $Notifications = new Notifications;
            $Notifications->type = 'Message';
            $Notifications->content = 'You have a new Message';
            $Notifications->save();

            Session::flash('message', "Your Message Has Been Sent");
            ReplyMessage::mailrequest($name,$email,$subject,$message);
            $messageback = "
                    <b>Email Sent</b>.<br>
                    Thank you $name,<br>
                    Your message has been submitted. We will contact you shortly.
            ";
    
        
            return Redirect::back();
        }


    }

    
    public function register_now(Request $request){
        $name = $request->name;
        $email = $request->email;
        $subject = $request->event;
        $phone = $request->mobile;
        $message = $request->message;

        $Message = new Message;
        $Message->name = $name;
        $Message->email = $email;
        $Message->subject = $subject;
        $Message->mobile = $phone;
        $Message->content = $message;
        $Message->save();

        $Notifications = new Notifications;
        $Notifications->type = 'Registration';
        $Notifications->content = 'You have a new Message';
        $Notifications->save();

        Session::flash('message', "Your Message Has Been Sent");
        ReplyMessage::mailrequest($name,$email,$subject,$message);
        $messageback = "
                <b>Email Sent</b>.<br>
                Thank you $name,<br>
                Your message has been submitted. We will contact you shortly.
        ";
  
    
        return Redirect::back();


    }

    public function terms()
    {
        $Terms = DB::table('terms')->get();
        $title="Terms and Conditions | Trice Real Estate | Best Realtor in Kasarani, Evaluation Services in Thika road";
        return view('front.terms',compact('title','Terms'));
    }

    public function privacy()
    {
        $Privacy = DB::table('privacy')->get();
        $title="Privacy Policy | Trice Real Estate | Best Realtor in Kasarani, Evaluation Services in Thika road";
        return view('front.privacy',compact('title','Privacy'));
    }

    public function copyrights()
    {
        $Copyright = DB::table('copyright')->get();
        $title="Copyright Statement | Trice Real Estate | Best Realtor in Kasarani, Evaluation Services in Thika road";
        return view('front.copyrights',compact('title','Copyright'));
    }

    
}
