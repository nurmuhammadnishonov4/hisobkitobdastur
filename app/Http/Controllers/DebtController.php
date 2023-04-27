<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use App\Models\Debtmen;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function menu()
    {
        $debtmens = Debtmen::all();
        $Sumdebts = Debt::all();
        $SumReceived = 0;
        $SumGiven = 0;
        foreach ($Sumdebts as $item) {
            $SumReceived += $item->received;
            $SumGiven += $item->given;
        }
        return view('Debt.debtlayouts', compact('debtmens', 'SumReceived', 'SumGiven'));
    }

    public function menuAdd(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Debtmen::create($request->post());
        return redirect()->back();
    }

    public function debtAdd(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'received' => 'required',
            'given' => 'required',
            'comment' => 'required',
            'debtmen_id' => 'required',
        ]);
        Debt::create($request->post());
        return redirect()->back();
    }

    public function debtShow($id)
    {
        $Sumdebts = Debt::all();
        $SumReceived = 0;
        $SumGiven = 0;
        foreach ($Sumdebts as $item) {
            $SumReceived += $item->received;
            $SumGiven += $item->given;
        }
        $debtmens = Debtmen::all();
        $debts = Debtmen::with("debts")->find($id);
        return view('Debt.qarz', compact('debtmens', 'debts', 'SumReceived', 'SumGiven'));
    }

    // Day show
    public function DaydebtShow($id)
    {
        $debt = Debt::find($id);
        $debtname = Debtmen::with("debts")->find($debt->debtmen_id);
        return view('Debt.debtShow', compact('debt', 'debtname'));
    }

    // Day delete
    public function DaydebtDelete($id)
    {
        $debt = Debt::find($id);
        $debt->delete();
        return redirect()->back();
    }

    // Menu delete
    public function MenudebtDelete($id)
    {
        $debtmenu = Debtmen::find($id);
        $debtmenu->delete();
        return redirect()->back();
    }

}
