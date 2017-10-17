<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuppliersProduct;
use App\Product;
use App\Supplier;
class SuppliersProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplierProducts = $supplier->product;


        return response()->json($supplierProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $product->update($request->all());

        // return response()->json($product,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // $product->delete();

        // return response()->json(null, 204);
    }

    public function searchProduct(Request $request) {

        $sproduct = Product::where('prod_name', 'LIKE', '%'.$request['product'].'%')->get();
        if(count($product) == 0) {
            $sp[]= 'No supplier found.';
        }
        else {
            foreach($product as $key => $value) {
                $sp[] = $value;
            }
        }
        return response()->json($prod);
    }
}
