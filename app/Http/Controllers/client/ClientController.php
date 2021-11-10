<?php

namespace App\Http\Controllers\client;

use App\Car;
use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index($id)
    {
        $client = Client::findOrFail($id);
        return view('client.view', compact('client'));
    }

    public function carCreate($id){
        $client = Client::findOrFail($id);
        return view('client.carModel', compact('client'));

    }
    public function carStore(Request $request,$id){
        $client = Client::findOrFail($id);

        $request->validate([
            'model' => 'required|min:1',
            'client_id' => 'required|min:1|integer',

        ]);
        $clientId = $client->id;
        $model = $request->input('model');

        $car = new Car();
        $car ->model = $model;
        $car ->client_id = $clientId;

        $car->save();


        return redirect()->route('client.view');

    }
}
