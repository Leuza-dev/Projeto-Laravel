<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Lista todos os eventos
     */
    public function index(){
      $events = DB::table("events")->get();

        return view('welcome', compact('events'));
    }

    /**
     * @return \Illuminate\Http\Response
     * Retorna a tela de cadastro do evento
     */
    public function create()
    {
        return view('events.create');
    }

     /**
     * Salva o evento no banco
     */
    public function store(Request $request)
    {
      dd($request->all());
    }
}
