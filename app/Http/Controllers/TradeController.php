<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use GuzzleHttp\Psr7\Header;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    public function index()
    {
        $trades = Trade::all();
        // dd($trades)

        return view('savdo', [
            'trades' => $trades
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'cash' => 'required',
            'terminal' => 'required',
            'product' => 'required',
            'spend' => 'required',
            'comment' => 'required',
        ]);

        Trade::create($request->post());

        return redirect()->back();
    }

    //delete
    public function destroy($id)
    {
        $trade = Trade::find($id);
        $trade->delete();
        return redirect()->back();
    }

    //edit
    public function edit($id)
    {
        $trade = Trade::find($id);
        return view('savdoEdit', [
            'trade' => $trade
        ]);
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'cash' => 'required',
            'terminal' => 'required',
            'product' => 'required',
            'spend' => 'required',
            'comment' => 'required',
        ]);

        $trade = Trade::find($id);
       // Trade::create($request->post());
        $trade->update($request->all());
        return redirect()->route('savdo');
    
     
    }

    //show
    public function show($id)
    {
        $trade = Trade::find($id);
        return view('savdoShow', [
            'trade' => $trade
        ]);
    }

//login
public function login(Request $request){
        $login = $request['email'];
    $password = $request['password'];
        // dd($login);
        // dd($password);
        if($login == 'admin@admin.com' && $password == 'admin'){
            return redirect()->route('savdo');
        }else{
            return redirect()->back();
        }
}

}


