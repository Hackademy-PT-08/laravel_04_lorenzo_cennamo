<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $tech = [
        ['id' => 1, 'name' => 'OnePlus 11', 'brand' => 'OnePlus', 'price' => 800],
        ['id' => 2, 'name' => 'IPhone 14', 'brand' => 'Apple', 'price' => 1000],
        ['id' => 3, 'name' => 'Surface 9', 'brand' => 'Microsoft', 'price' => 2000],
        ['id' => 4, 'name' => 'PlayStation 5', 'brand' => 'Sony', 'price' => 500],
    ];

    public function index(){
        return view('products', ['tech' => $this->tech]);
    }

    public function show($id){
        foreach($this->tech as $tech) {
            if($id == $tech['id']){
            return view('product-detail', ['tech' => $tech]); 
            }
        }
        
    }
};