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
        if (isset($data['DATA-NAME'])) {
            for ($i = 0; $i < count($data['DATA-NAME']); $i++) {
                $attributes[$data['DATA-NAME'][$i]] = $data['DATA-VALUE'][$i];
            }
        }
        $product = new Product();
        $product->createProduct($data['ARTICLE'], $data['NAME'], $data['STATUS'], $attributes);

        return redirect()->route('product.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $validate = $request->validate($this->rules);

        $data = $request->all();
        $attributes = [];
        if (isset($data['DATA-NAME'])) {
            for ($i = 0; $i < count($data['DATA-NAME']); $i++) {
                $attributes[$data['DATA-NAME'][$i]] = $data['DATA-VALUE'][$i];
            }
        }
        $product->updateProduct($data['ARTICLE'], $data['NAME'], $data['STATUS'], $attributes);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

}
