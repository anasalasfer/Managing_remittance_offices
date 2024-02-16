<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExchangeRate;

class ExchangeRateController extends Controller
{
    public function create()
    {
        return view('Office.create1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'office_name' => 'required|string',
            'publish_date' => 'required|date',
            'usd_to_try' => 'required|numeric',
            'try_to_usd' => 'required|numeric',
            'usd_to_syp' => 'required|numeric',
            'syp_to_usd' => 'required|numeric',
        ]);

        ExchangeRate::create($request->all());

        return redirect()->route('show1')->with('success', 'تمت إضافة أسعار الصرف بنجاح.');
    }

    public function showAllRates()
    {
        $exchangeRates = ExchangeRate::all();
        //return response()->json(['exchangeRates' => $exchangeRates]);
        return view('show1', compact('exchangeRates'));
    
    }
    public function showAllRates1()
    {
        $exchangeRates = ExchangeRate::all();
        //return response()->json(['exchangeRates' => $exchangeRates]);
        return view('admin.Delete_prices', compact('exchangeRates'));
    
    }

    public function destroy($id)
    {
        // العثور على سجل الصرف بواسطة الهوية
        $exchangeRate = ExchangeRate::find($id);

        // التحقق من وجود السجل قبل حذفه
        if ($exchangeRate) {
            // حذف السجل
            $exchangeRate->delete();

            return redirect()->route('admin.dashboard')->with('success', 'تم حذف أسعار الصرف بنجاح.');
        } else {
            // يمكنك التعامل مع عدم العثور على السجل هنا
            return redirect()->route('admin.dashboard')->with('error', 'لم يتم العثور على أسعار الصرف.');
        }
    }


}