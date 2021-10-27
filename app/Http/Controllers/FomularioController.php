<?php

namespace App\Http\Controllers;

use App\Models\fomulario;
use Illuminate\Http\Request;

class FomularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $new = new fomulario();
        $new->f1 = $request->input('1');
        $new->f2 = $request->input('2');
        $new->f3 = $request->input('3');
        $new->f4 = $request->input('4');
        $new->f5 = $request->input('5');
        $new->f6 = $request->input('6');
        $new->f7 = $request->input('7');
        $new->f8 = $request->input('8');
        $new->f9 = $request->input('9');
        $new->f10 = $request->input('10');

        $res = $new->save();
        return $res;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $M = fomulario::where('f1', '1a')->count();
        $F = fomulario::where('f1', '1b')->count();
        // * masculino P1 
        $MP1R1 = fomulario::where('f1', '1a')->where('f2', '2a')->count();
        $MP1R2 = fomulario::where('f1', '1a')->where('f2', '2b')->count();
        $MP1R3 = fomulario::where('f1', '1a')->where('f2', '2c')->count();
        $MP1R4 = fomulario::where('f1', '1a')->where('f2', '2d')->count();
        // * femenino P1
        $FP1R1 = fomulario::where('f1', '1b')->where('f2', '2a')->count();
        $FP1R2 = fomulario::where('f1', '1b')->where('f2', '2b')->count();
        $FP1R3 = fomulario::where('f1', '1b')->where('f2', '2c')->count();
        $FP1R4 = fomulario::where('f1', '1b')->where('f2', '2d')->count();

        // * masculino P1 
        $MP1R1 = fomulario::where('f1', '1a')->where('f2', '2a')->count();
        $MP1R2 = fomulario::where('f1', '1a')->where('f2', '2b')->count();
        $MP1R3 = fomulario::where('f1', '1a')->where('f2', '2c')->count();
        $MP1R4 = fomulario::where('f1', '1a')->where('f2', '2d')->count();
        // * femenino P1
        $FP1R1 = fomulario::where('f1', '1b')->where('f2', '2a')->count();
        $FP1R2 = fomulario::where('f1', '1b')->where('f2', '2b')->count();
        $FP1R3 = fomulario::where('f1', '1b')->where('f2', '2c')->count();
        $FP1R4 = fomulario::where('f1', '1b')->where('f2', '2d')->count();


        $data = [
            'M' => $M, 'F' => $F,
            'MP1R1' => $MP1R1,

            'MP1R2' => $MP1R2,
            'MP1R3' => $MP1R3,
            'MP1R4' => $MP1R4,

            'FP1R1' => $FP1R1,
            'FP1R2' => $FP1R2,
            'FP1R3' => $FP1R3,
            'FP1R4' => $FP1R4,
        ];
        return $data;
    }

    public function listData()
    {
        return fomulario::orderBy('id','desc')->get();
    }

    public function dataEst()
    {
        $res1a= fomulario::where('f1','1a')->count();
        $res1b= fomulario::where('f1','1b')->count();
        
        // * resultado de P1
        $respMp2a=fomulario::where('f1','1a')->where('f2','2a')->count();
        $respMp2b=fomulario::where('f1','1a')->where('f2','2b')->count();
        $respMp2c=fomulario::where('f1','1a')->where('f2','2c')->count();
        $respMp2d=fomulario::where('f1','1a')->where('f2','2d')->count();

        $respMp3a=fomulario::where('f1','1a')->where('f3','3a')->count();
        $respMp3b=fomulario::where('f1','1a')->where('f3','3b')->count();
        $respMp3c=fomulario::where('f1','1a')->where('f3','3c')->count();
        $respMp3d=fomulario::where('f1','1a')->where('f3','3d')->count();

        $respMp4a=fomulario::where('f1','1a')->where('f4','4a')->count();
        $respMp4b=fomulario::where('f1','1a')->where('f4','4b')->count();
      

        $respMp5a=fomulario::where('f1','1a')->where('f5','5a')->count();
        $respMp5b=fomulario::where('f1','1a')->where('f5','5b')->count();
       

        $respMp6a=fomulario::where('f1','1a')->where('f6','6a')->count();
        $respMp6b=fomulario::where('f1','1a')->where('f6','6b')->count();
       

        $respMp7a=fomulario::where('f1','1a')->where('f7','7a')->count();
        $respMp7b=fomulario::where('f1','1a')->where('f7','7b')->count();
        $respMp7c=fomulario::where('f1','1a')->where('f7','7c')->count();
       

        $respMp8a=fomulario::where('f1','1a')->where('f8','8a')->count();
        $respMp8b=fomulario::where('f1','1a')->where('f8','8b')->count();
        $respMp8c=fomulario::where('f1','1a')->where('f8','8c')->count();
       

        $respMp9a=fomulario::where('f1','1a')->where('f9','9a')->count();
        $respMp9b=fomulario::where('f1','1a')->where('f9','9b')->count();
       

        $respMp10a=fomulario::where('f1','1a')->where('f10','10a')->count();
        $respMp10b=fomulario::where('f1','1a')->where('f10','10b')->count();
        $respMp10c=fomulario::where('f1','1a')->where('f10','10c')->count();


        // * resultado femeninos
        $respFp2a=fomulario::where('f1','1b')->where('f2','2a')->count();
        $respFp2b=fomulario::where('f1','1b')->where('f2','2b')->count();
        $respFp2c=fomulario::where('f1','1b')->where('f2','2c')->count();
        $respFp2d=fomulario::where('f1','1b')->where('f2','2d')->count();

        $respFp3a=fomulario::where('f1','1b')->where('f3','3a')->count();
        $respFp3b=fomulario::where('f1','1b')->where('f3','3b')->count();
        $respFp3c=fomulario::where('f1','1b')->where('f3','3c')->count();
        $respFp3d=fomulario::where('f1','1b')->where('f3','3d')->count();

        $respFp4a=fomulario::where('f1','1b')->where('f4','4a')->count();
        $respFp4b=fomulario::where('f1','1b')->where('f4','4b')->count();
      

        $respFp5a=fomulario::where('f1','1b')->where('f5','5a')->count();
        $respFp5b=fomulario::where('f1','1b')->where('f5','5b')->count();
       

        $respFp6a=fomulario::where('f1','1b')->where('f6','6a')->count();
        $respFp6b=fomulario::where('f1','1b')->where('f6','6b')->count();
       

        $respFp7a=fomulario::where('f1','1b')->where('f7','7a')->count();
        $respFp7b=fomulario::where('f1','1b')->where('f7','7b')->count();
        $respFp7c=fomulario::where('f1','1b')->where('f7','7c')->count();
       

        $respFp8a=fomulario::where('f1','1b')->where('f8','8a')->count();
        $respFp8b=fomulario::where('f1','1b')->where('f8','8b')->count();
        $respFp8c=fomulario::where('f1','1b')->where('f8','8c')->count();
       

        $respFp9a=fomulario::where('f1','1b')->where('f9','9a')->count();
        $respFp9b=fomulario::where('f1','1b')->where('f9','9b')->count();
       

        $respFp10a=fomulario::where('f1','1b')->where('f10','10a')->count();
        $respFp10b=fomulario::where('f1','1b')->where('f10','10b')->count();
        $respFp10c=fomulario::where('f1','1b')->where('f10','10c')->count();
      



        $resulatado=
        [
            'M' => $res1a,
            'F' => $res1b,
            'resMP2a' => $respMp2a,
            'resMP2b' => $respMp2b,
            'resMP2c' => $respMp2c,
            'resMP2d' => $respMp2d,
            
            'resMP3a' => $respMp3a,
            'resMP3b' => $respMp3b,
            'resMP3c' => $respMp3c,
            'resMP3d' => $respMp3d,
            
            'resMP4a' => $respMp4a,
            'resMP4b' => $respMp4b,
           
            
            'resMP5a' => $respMp5a,
            'resMP5b' => $respMp5b,
           
            
            'resMP6a' => $respMp6a,
            'resMP6b' => $respMp6b,
           
            
            'resMP7a' => $respMp7a,
            'resMP7b' => $respMp7b,
            'resMP7c' => $respMp7c,

            
            'resMP8a' => $respMp8a,
            'resMP8b' => $respMp8b,
            'resMP8c' => $respMp8c,

            
            'resMP9a' => $respMp9a,
            'resMP9b' => $respMp9b,

            
            'resMP10a' => $respMp10a,
            'resMP10b' => $respMp10b,
            'resMP10c' => $respMp10c, 

            // *respuetas femeninas
            'resFP2a' => $respFp2a,
            'resFP2b' => $respFp2b,
            'resFP2c' => $respFp2c,
            'resFP2d' => $respFp2d,
            
            'resFP3a' => $respFp3a,
            'resFP3b' => $respFp3b,
            'resFP3c' => $respFp3c,
            'resFP3d' => $respFp3d,
            
            'resFP4a' => $respFp4a,
            'resFP4b' => $respFp4b,
           
            
            'resFP5a' => $respFp5a,
            'resFP5b' => $respFp5b,
           
            
            'resFP6a' => $respFp6a,
            'resFP6b' => $respFp6b,
           
            
            'resFP7a' => $respFp7a,
            'resFP7b' => $respFp7b,
            'resFP7c' => $respFp7c,

            
            'resFP8a' => $respFp8a,
            'resFP8b' => $respFp8b,
            'resFP8c' => $respFp8c,

            
            'resFP9a' => $respFp9a,
            'resFP9b' => $respFp9b,

            
            'resFP10a' => $respFp10a,
            'resFP10b' => $respFp10b,
            'resFP10c' => $respFp10c, 

        ];


        


        return $resulatado;
    }
}
