<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\CustomerType;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = Customer::with('customerType')->get();
        return view("pages.customers.list", [
            "customers" => $customers
        ]);
    }

    public function create()
    {
        $customerTypes = CustomerType::all();
        return view('pages.customers.create', [
            'types' => $customerTypes
        ]);
    }

    public function preview(int $id)
    {
        $customer = Customer::with('customerType')->where('id', $id)->get();
        return view('pages.customers.preview', [
            'customer' => $customer
        ]);
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.list')->with('success', 'Cliente deletado com sucesso!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->avatar->extension();
        $request->avatar->storeAs('public/images', $imageName);

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->avatar = $imageName;
        $customer->customer_type_id = 1;
        $customer->save();

        return redirect("customers/list")->with("success", "Cliente Cadastrado")->setStatusCode(201);
    }
}
