<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use\Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('home',compact('products'));
    }

    public function home()
    {
        return view('index');
    }

    public function addProduct(Request $request)
    {
        $product = new Product;
        $product->product_title = $request->product_title;
        $product->description = $request->detail;
        $product->price = $request->price;
        $product->save();
        return redirect('/');
    }

    public function  viewProducts()
    {
      $products = Product::all();
      return view('product-list',compact('products'));
    }

    public function deleteproduct($p_id)
    {
      Product::find($p_id)->delete();
      return redirect('/');
    }

    public function updateProduct($p_id)
    {
       $productData = Product::findOrFail($p_id);
       return view('update-product',compact('productData'));
    }

    public function updateCurrentProduct(Request $request)
    {
         Product::find($request->p_id)
                  ->update([
                        'product_title'=>$request->product_title,
                        'description'=> $request->detail,
                        'price'=>$request->price
                          ]);
          return redirect('view-products');
    }


    public function export()
    {
      return Excel::download(new ProductExport,'data.csv');
    }
}
