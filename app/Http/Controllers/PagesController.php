<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
class PagesController extends Controller
{
    public function getIndex(){
        return view('master');
    }
    public function getPvc(){
        return view('pages.pvc');
    }
    public function getAl(){
        return view('pages.al');
    }
    public function getKom(){
        return view('pages.komarnici');
    }
    public function getRol(){
        return view('pages.roletni');
    }
    public function getPromo(){
        return view('pages.promo');
    }

    public function getContact(){
        return view('pages.contact');
    }
    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::send('pages.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('aluplastmk@gmail.com');
            $message->subject($data['subject']);
        });
        Session::flash('success', 'Your Email was Sent!');
        return redirect('/');
    }
}
