<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function createPage()
    {
        return view('pages.sellers.create');
    }

    public function editPage(int $id)
    {
        return view("pages.sellers.edit");
    }

    public function deletePage(int $id)
    {
        return view("pages.sellers.delete");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);


        $seller = Seller::create($validatedData);
        if( $seller && $seller->id ){
            return redirect("sellers/list")->with("success","Vendedor Cadastrado.")->setStatusCode(201);
        }else{
            return redirect("sellers/list")->with("error","Falha ao cadastrar vendedor.")->setStatusCode(400);
        }

    }

    public function edit(Request $request)
    {

    }

    public function delete(int $id)
    {
        Seller::destroy($id);
        return redirect("/sellers/list")->with("success","Vendedor deletado com sucesso.")->setStatusCode(204);
    }  
}
