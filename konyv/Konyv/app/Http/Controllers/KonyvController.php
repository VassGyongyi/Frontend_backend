<?php

namespace App\Http\Controllers;

use App\Models\Konyv;
use Illuminate\Http\Request;

class KonyvController extends Controller
{
    public function index(){
        $konyvs = response()->json(Konyv::all());
        return $konyvs;
    }

    public function show($id){
        $konyv = response()->json(Konyv::find($id));
        return $konyv;
    }

    public function store(Request $request){
        $konyv = new Konyv();
        $konyv->nev = $request->nev;
        $konyv->szerzo = $request->szerzo;
        $konyv->leiras = $request->leiras;
        $konyv->kiadas = $request->kiadas;
        $konyv->kiado = $request->kiado;
        $konyv->save();
    }

    public function update(Request $request, $id){
        $konyv = Konyv::find($id);
        $konyv->szerzo = $request->szerzo;
        $konyv->leiras = $request->leiras;
        $konyv->kiadas = $request->kiadas;
        $konyv->kiado = $request->kiado;
        $konyv->save();
    }
    public function destroy($id){
         Konyv::find($id)->delete();
     
    }
}
