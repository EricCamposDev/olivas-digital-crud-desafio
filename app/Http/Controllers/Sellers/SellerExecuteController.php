<?php

namespace App\Http\Controllers\Sellers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;

class SellerExecuteController extends Controller
{
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

    public function update(Request $request)
    {

    }

    public function destroy(Seller $id)
    {  
        Seller::destroy($id);
        return redirect("/sellers/list")->with("success","Vendedor deletado com sucesso.")->setStatusCode(204);
    }
}
