<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PaginaController extends Controller
{
    //
    public function canciones(){

        $listaCanciones = [];
        $listaCanciones[] = ["nombre" => 'culpable o no', 'artista' => 'Luis Miguel'];
        $listaCanciones[] = ["nombre" => 'Tonta', 'artista' => 'Diego Verdague'];
        if(!is_null($id)){
            $cancion_sel = $listaCanciones[$id];
    
        } else{
    
            $cancion_sel = null;
    
        }
    
        
    
       // dd($listaCanciones);
        return view('canciones', compact('listaCanciones', 'cancion_sel'));
        //->with(['listaCanciones'=>$listaCanciones]);
    }

    public function contacto(){
        return view('contacto');
        


        }

        public function bautizo(Request $request){
            //dd($request->all(), $request->nombre, $request->input('codigo'));
            //recibe y valida
            $request->validate([
                'nombre'=>'required|min:3|max:255',
                'codigo'=>['required','integer','max:9'] ,



            ]);


            //guarda
            //redirecciona
           
            

        }
}

