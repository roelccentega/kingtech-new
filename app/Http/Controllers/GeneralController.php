<?php

namespace App\Http\Controllers;
use App\Mail\ContactanosForm;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
    	return view('web.index');
    }
     public function about(){
     	return view('web.pages.about');
     }
     public function contact()
     {
     	return view('web.pages.contact');
     }

     public function postIndex(Request $request){
       //        dd($request->all());
        $request->validate([
            'name' => 'required',
//            'g-recaptcha-response' => 'required|captcha',

        ]);
        $emails = [ 'ccenteproga@gmail.com'];
        $mail = new ContactanosForm($request->all());
        Mail::to($emails)->send($mail);


//        Mail::to($request->user())->send(new OrderShipped($order));
        return redirect('/contacto')->with('notification','¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
//        return redirect('/contacto')->with('status', ' ¡Enhorabuena! Tu mensaje ha sido enviado con éxito.');
    }

    public function peruGaming()
    {
        return view('web.events.peru-gaming');
    }
     public function exporFeria()
    {
        return view('web.events.expo-feria');
    }
    
}
