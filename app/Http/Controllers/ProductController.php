<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index(){
        $products = Products::get();

        return view('products', compact('products'));
    }

    public function export(){
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function import(){
        Excel::import(new ProductsImport, request()->file('file'));
        return back();
    }
}
