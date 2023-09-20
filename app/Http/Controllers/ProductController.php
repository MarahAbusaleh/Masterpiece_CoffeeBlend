<?php

namespace App\Http\Controllers;
use App\DataTables\ProductDataTable;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductDataTable $dataTables)
    {
        return $dataTables->render('Admin.Pages.product.index');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
