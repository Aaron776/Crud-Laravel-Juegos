<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
class JuegosController extends Controller
{
    public function index(){
       
        $juegos=Juego::all();
        return view('juegos.index',compact('juegos')); 
    }

    public function create(){
        return view('juegos.create');
    }

    public function store(Request $request){
        $request->validate([
            'titulo' => ['required'],
            'genero' => ['required'],
            'precio' => ['required'],
        ]);

        $juego= new Juego();
        $juego->titulo=$request->titulo;
        $juego->genero=$request->genero;
        $juego->precio=$request->precio;
        $juego->save();
        return redirect()->route('juegos.index');
    }

    public function edit($id){
        $juego=Juego::find($id);

        return view('juegos.edit',compact('juego'));
    }

    public function update(Request $request,$id){
        $juego=Juego::find($id);
        $juego->update($request->all());
        return redirect()->route('juegos.index');
    }

    public function destroy($id){
        $juego=Juego::find($id);
        $juego->delete();
        return redirect()->route('juegos.index');
    }   
}
