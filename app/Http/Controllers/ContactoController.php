<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{
    public function store(){

        $mensaje = request()->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'asunto' => 'required',
            'contenido' => 'required|min:10'
        ]);

        //Enviar correo

        Mail::to('cristian.duquew@gmail.com')->queue(new MensajeRecibido($mensaje));

        return back()->with('status', 'Recibimos tu mensaje, res responderemos en menos de 24 horas.');
    }
}
