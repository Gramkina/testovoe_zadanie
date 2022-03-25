<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    /**
     * Rules of validation
     *
     * @var string[]
     */

    protected $rules = [
        'NAME' => 'required|min:10',
        'ARTICLE' => 'required|alpha_num',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validate = $request->validate($this->rules);

        $data = $request->all();
        $attributes = [];
        for ($i = 0; $i < count($data['DATA-NAME']); $i++) {
            $attributes[$data['DATA-NAME'][$i]] = $data['DATA-VALUE'][$i];
        }
        $product = new Product();
        $product->addProduct($data['ARTICLE'], $data['NAME'], $data['STATUS'], $attributes);

        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
