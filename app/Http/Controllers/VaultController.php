<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vault;
use Illuminate\Support\Facades\Redirect;

class VaultController extends Controller
{
    public function show(Request $request)
    {
        $vaults = Vault::where('user_id', auth()->user()->id)->get();
        return view('dashboard', ['datas' => $vaults,]);
    }


    public function store(Request $request)
    {
        $validated = request()->validate([
            'name' => ['string', 'required'],
            'url' => ['string'],
            'pseudo' => ['string'],
            'mail' => ['string'],
            'password' => ['string', 'required'],
        ]);

        $validated["user_id"] = auth()->user()->id;

        Vault::create($validated);

        return Redirect::route('dashboard');
    }


    public function update(Request $request, string $id) 
    {
        $validated = request()->validate([
            'name' => ['string', 'required'],
            'url' => ['string'],
            'pseudo' => ['string'],
            'mail' => ['string'],
            'password' => ['string', 'required'],
        ]);

        $vault = Vault::where('id', $id)->first();

        $makerId = $vault["user_id"];
        
        if($makerId == auth()->user()->id){
            $vault->update([
                "name" => $validated["name"],
                "url" => $validated["url"],
                "pseudo" => $validated["pseudo"],
                "mail" => $validated["mail"],
                "password" => $validated["password"],
            ]);
            return Redirect::route('dashboard');
        }else{
            dd(403);
        }
    }


    public function destroy(string $id)
    {
        $vault = Vault::where('id', $id)->get();

        $makerId = $vault[0]["user_id"];

        if($makerId == auth()->user()->id){
            Vault::destroy($id);
            return Redirect::route('dashboard');
        }else{
            die;
        }
    }
}
