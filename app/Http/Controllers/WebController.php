<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blog\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class WebController extends Controller
{
    public function home(){

        $mobile = $this->isMobile();

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.home', compact('states', 'mobile'));
    }

    public function creditos(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.creditos', compact('states'));
    }

    public function about(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.nosotros', compact('states'));
    }

    public function avaluo(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.avaluo', compact('states'));
    }

    public function creditos_hipotecarios(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.credit_h', compact('states'));
    }

    public function vip(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.vip', compact('states'));
    }

    public function consumo(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.consumo', compact('states'));

    }

    public function construccion(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.construccion', compact('states'));

    }

    public function consumo_hipotecario(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.consumo-hipotecario', compact('states'));
    }

    public function microcreditos(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.microcreditos', compact('states'));
    }

    public function amortizacion(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.amortizacion', compact('states'));
    
    }

    public function contacto(){

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.contacto', compact('states'));

    }

    public function thank(){
        return view('web.thank');
    }

    public function blog(){

        $articles = Article::where('status', 1)->get();

        return view('web.blog', compact('articles'));
    }

    public function showArticle($slug){

        $article = Article::where('slug', $slug)->first();

        $states = DB::table('info_states')->where('country_id', 63)->get();

        return view('web.article', compact('article', 'states'));
        
    }

    public function getcities($idState){
        $cities = DB::table('info_cities')->where('state_id', $idState)->get();
        return response()->json($cities);
    }

    public function sendlead(Request $request){

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6Le1UsshAAAAAInuqh1QQ_C3jCx6YQAn_tDBNnOO',
            'response' => $request->input('g-recaptcha-response')
        ])->object();

        $message = "<br><strong>Nuevo Lead Creditos</strong>
                    <br> Nombre: ". strip_tags($request->name) . " " . strip_tags($request->lastname) ."
                    <br> Telef: ".  strip_tags($request->phone)."
                    <br> Email: ".  strip_tags($request->email)."
                    <br> Ubicacion: ". strip_tags($request->state)." ".strip_tags($request->city)
                    ;

        if($request->type && $request->mount){
            $message .= "
            <br> Tipo de Credito: ".strip_tags($request->type)."
            <br> Monto: $".strip_tags($request->mount)."
            ";
        } else if($request->type_propertie){
            $message .= "
                <br> Tipo de Propiedad: ".strip_tags($request->type_propertie)."
                <br> Servicio: Avalúo de Propiedad
            ";
        }

        $message .= "
        <br> Mensaje: ".strip_tags($request->message)."
        <br> Fuente: Website";
                
        $header='';
        $header .= 'From: <leads@casacredito.com>' . "\r\n";
        $header .= "Reply-To: ".'info@casacredito.com'."\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //mail('mvargas@casacredito.com,info@casacredito.com','Lead CasaCredito: '.strip_tags($request->leadName), $message, $header);

        if($response->success && $response->score >= 0.7){
            mail('sebas31051999@gmail.com', 'Lead Casa Credito: ' . strip_tags($request->name), $message, $header);
            mail('info@casacredito.com', 'Lead Casa Credito: ' . strip_tags($request->name), $message, $header);
        } else {
            mail('sebas31051999@gmail.com', 'Bot Lead Casa Credito: ' . strip_tags($request->name), $message, $header);
        }

        return redirect()->route('web.thank');

    }

    public function sendLeadFromPost(Request $request){

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6Le1UsshAAAAAInuqh1QQ_C3jCx6YQAn_tDBNnOO',
            'response' => $request->input('g-recaptcha-response')
        ])->object();

        $message = "<br><strong>Nuevo Lead Creditos</strong>
                    <br> Nombre: ". strip_tags($request->name) . " " . strip_tags($request->lastname) ."
                    <br> Telef: ".  strip_tags($request->phone)."
                    <br> Email: ".  strip_tags($request->email)."
                    <br> Ubicacion: ". strip_tags($request->state)." ".strip_tags($request->city) . "
                    <br> Servicio: ".strip_tags($request->service)."
                    <br> Monto: $".strip_tags($request->mount) . "
                    <br> Mensaje: ".strip_tags($request->message)."
                    <br> Fuente: Website"
                    ;
                
        $header='';
        $header .= 'From: <leads@casacredito.com>' . "\r\n";
        $header .= "Reply-To: ".'info@casacredito.com'."\r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //mail('mvargas@casacredito.com,info@casacredito.com','Lead CasaCredito: '.strip_tags($request->leadName), $message, $header);

        if($response->success && $response->score >= 0.7){
            mail('sebas31051999@gmail.com', 'Lead Casa Credito: ' . strip_tags($request->name), $message, $header);
            mail('info@casacredito.com', 'Lead Casa Credito: ' . strip_tags($request->name), $message, $header);
        } else {
            mail('sebas31051999@gmail.com', 'Bot Lead Casa Credito: ' . strip_tags($request->name), $message, $header);
        }

        return redirect()->route('web.thank');
    }

    public function isMobile(){
        return is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
    }

    public function politicas(){
        return view('web.politicas');
    }

    // public function showNotaryPage(){
    //     return view('web.notaria.index');
    // }

}
