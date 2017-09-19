<?php
Route::get('/sumario',function(){
    
        //var_dump('hola');
        //dd('sumar');
        return "prueba de view";
    });
    
    Route::get('/sumario1/{operador1}-{operador2}',function($operador1, $operador2){
        
            //var_dump('hola');
            //dd('sumar');
           //return "prueba de view";
           return $operador1 + $operador2;
    });
    Route::get('/sumario2/{operador1?}-{operador2?}',function($operador1=8, $operador2=2){
            return $operador1 + $operador2;
    });
    
    Route::get('/sumario3/{numero}',function($numero){
        
        $array=[];
    
        for($i=0;$i<$numero;$i++){
            $array[]=uniqid();
        }
        return response()->json($array);
    
     })->where(['numero'=>'[0-9]+']);
    
     
