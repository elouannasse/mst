<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller

{
    public function afficher(){
        $product = [
            'name'=>'name',
            'description'=>'description' ,
             'price'=>'price'

            
        ];
        return view('product') ;
       
      
          
       

    

    }
      
}
