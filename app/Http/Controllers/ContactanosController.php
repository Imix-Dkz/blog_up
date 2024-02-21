<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{ //Aqui se generará el control del formulario de Contacto para que se preparen los datos que se mandarán
    public function index(){
        return view('contactanos.index');
    }
    public function store(Request $request){
        
        $request->validate([
            'name'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required'
        ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('google@gmail.com')->send($correo);

        //return "Mensaje enviado...<br>Desde el Controller de Contacto...";
        //Si se requiere mandar una alerta/variable se puede hacer de la siguiente forma...       
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado... Muchas gracias');
    }
}
