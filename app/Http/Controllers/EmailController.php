<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Api Laravel - Doctores";
        $for = "pruebasuscripcionfg@gmail.com";
        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("tucorreo@gmail.com","Mensaje de Laravel");
            $msj->subject($subject);
            $msj->to($for);
        });
       // return redirect()->back();

						 
		return redirect('/citas')->with(['message'=>'EMAIL ENVIADO CORRECTAMENTE, NOS PONDREMOS EN CONTACTO CON USTED LO ANTES POSIBLE']);
	


    }
}