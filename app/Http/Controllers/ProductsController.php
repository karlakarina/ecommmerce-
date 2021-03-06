<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a slisting of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =Product::all();
        return view("products.index",["products"=> 
            $products]);

        //se encarga de mostrar toda la coleccion de recursos todos lo productos grupo o coleccion
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=new Product;
        return view("products.create",["product"=>$product]);
        //despliega la vista con el formulario para crear un nuevo producto

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product;

        $product->title=$request->title;
        $product->description=$request->description;
        $product->pricing=$request->pricing;
        $product->user_id=Auth::user()->id;

        if ($product->
            save())
        {
            return redirect("/products");
        }else{
            return view ("products.create",["product"=>$product]);
        }


        //formulario que se muetra en create se envia a store y store guardar el nuevo producto
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =Product::find($id);
        return view('products.show',['product'=>$product]);
        //muestra el producto con este id 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view("products.edit",["product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $product=Product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->pricing=$request->pricing;
        


        if ($product->save())
        {
            return redirect("/products");
        }else{
            return view ("products.edit",["product"=>$product]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/products');
        //
    }
}
