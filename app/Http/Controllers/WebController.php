<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function home(){
        return view('web.home');
    }

    public function creditos(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.creditos', compact('states'));
    }

    public function getcities($idState){
        $cities = DB::table('info_cities')->where('state_id', $idState)->get();
        return response()->json($cities);
    }

    public function sendlead(Request $request){

        $message = "<br><strong>Nuevo Lead Creditos</strong>
                    <br> Nombre: ". strip_tags($request->name) . " " . strip_tags($request->lastname) ."
                    <br> Telef: ".  strip_tags($request->phone)."
                    <br> Email: ".  strip_tags($request->email)."
                    <br> Ubicacion: ". strip_tags($request->state)." ".strip_tags($request->city)."
                    <br> Tipo de Credito: ".strip_tags($request->type)."
                    <br> Monto: $".strip_tags($request->mount)."
                    <br> Mensaje: ".strip_tags($request->message)."
                    <br> Fuente: Website";
                
        $header='';
        $header .= 'From: <leads@casacredito.com>' . "\r\n";
        $header .= "Reply-To: ".'info@casacredito.com'."\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //mail('mvargas@casacredito.com,info@casacredito.com','Lead CasaCredito: '.strip_tags($request->leadName), $message, $header);
        mail('sebas31051999@gmail.com', 'Lead CasaCredito: ' . strip_tags($request->name), $message, $header);

        return "mail enviado";

    }

}
