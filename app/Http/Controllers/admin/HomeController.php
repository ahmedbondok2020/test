<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\videos;
use Illuminate\Http\Request;

use App\comment_model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Swift_SmtpTransport;
use Swift_Mailer;
use Swift_Message;

use Config;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home.index');
    }

    public function send_to_blogger(Request $request)
    {
        $videos = videos::where('status', '=', 1)->skip(0)->take(1)->orderby('id', 'desc')->get();
        foreach ($videos as $video)
        {

            $data = array('title'=>$video->title,'description'=>$video->description,'image'=>$video->image);
//
////            Mail::to('egyptvision2017@gmail.com')->send(new SendMail($video->title,$video->description,$video->image));
////            $data = $video;
            Mail::send('mail', $data, function($message) {
                $message->to('egyptvision2017@gmail.com', 'videos details')->subject
                ('Laravel Basic Testing Mail');
                $message->from('info@mini-youtube.com','ahmed samy');
            });
//            Config::set('mail',['driver'=> 'smtp']);
//        Config::set('mail',['host'=> 'smtp.mini-youtube.com']);
//            dd('test test');
            // Create the Transport
//            $transport = (new Swift_SmtpTransport('smtp.mini-youtube.com', 25))
//                ->setUsername('info@mini-youtube.com')
//                ->setPassword('SMmf[.qI,y8(')
//            ;
//
//            // Create the Mailer using your created Transport
//            $mailer = new Swift_Mailer($transport);
//
//            // Create a message
//            $message = (new Swift_Message('first news'))
//                ->setFrom(['info@mini-youtube.com' => 'mini-youtube.com'])
//                ->setTo('egyptvision2017@gmail.com')
//                ->setBody('Here is the message itself')
//            ;
//
//            // Send the message
//            $mailer->send($message);
//            dd($message);
        }
        return 'done';
//        $data = array('name'=>"Virat Gandhi");


    }
}
