<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MemberController extends Controller
{
    function index(Request $req)
    {

        $castes = Customer::select('caste')->distinct()->get();

        $search = $req['name'];
        $gender = $req['gender'];
        $caste = $req['caste'];

        $data = Customer::query()
                    ->when(request('name'),function($query){
                        $query->where('name', 'like', '%' . request('name') . '%');
                    })
                    ->when(request('gender'),function($query){
                        $query->where('gender', request('gender'));
                    })
                    ->when(request('caste'),function($query){
                        $query->where('caste', request('caste'));
                    })
                    ->get();

        return view('list', compact("data","castes"));
    }
    function show($id)
    {
        $data = Customer::find($id);
        return view('edit', compact("data"));
    }

    function delete($id)
    {
        $data = Customer::find($id);
        $data->delete();
        return redirect("list");
    }
    function Update(Request $req)
    {
        $data = Customer::find($req->id);
        $data->id = $req->id;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->Update();
        return redirect("list");
    }

}
