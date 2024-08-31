<?php

namespace App\Http\Controllers\Sellers;
use App\Http\Controllers\Controller;

use App\Models\Seller;

class SellerController extends Controller
{
    public function list()
    {
        $sellers = Seller::all();
        return view("pages.sellers.list", [
            'sellers' => $sellers
        ]);
    }

    public function create()
    {
        return view('pages.sellers.create');
    }

    public function edit(Seller $id)
    {
        return view("pages.sellers.edit");
    }
}
