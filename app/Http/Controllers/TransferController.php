<?php

namespace App\Http\Controllers;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Models\Transfer;

class TransferController extends Controller
{
    public function create()
    {
        return view('Office.create');
    }
    public function dashboard()
{
    // قم بوضع الكود الخاص بعرض لوحة التحكم هنا
    return view('Office.dashboard');
}


public function store(Request $request)
{
    $request->validate([
        'sender_office' => 'required|string',
        'receiver_office' => 'required|string',
        'sender_name' => 'required|string',
        'receiver_name' => 'required|string',
        'amount' => 'required|numeric',
        'send_date' => 'required|date',
    ]);
    
    // إنشاء نموذج الحوالة وحفظه في قاعدة البيانات
    $transfer = Transfer::create($request->all());

    // تحديث رصيد المكتب المرسل
    $senderOffice = Office::where('name', $request->input('sender_office'))->first();
    $senderOffice->balance -= $request->input('amount');
    $senderOffice->save();

    // تحديث رصيد المكتب المستلم
    $receiverOffice = Office::where('name', $request->input('receiver_office'))->first();
    $receiverOffice->balance += $request->input('amount');
    $receiverOffice->save();

    return redirect()->route('Office.dashboard')->with('success', 'تمت إضافة الحوالة بنجاح.');
}
    
public function showTransfers()
{
    $transfers = Transfer::all(); // استرجاع جميع الحوالات من قاعدة البيانات
    //return response()->json(['transfers' => $transfers]); // Corrected key to 'transfers'
     return view('show', compact('transfers'));
}
public function showTransfers1()
{
    $transfers = Transfer::all(); // استرجاع جميع الحوالات من قاعدة البيانات
    //return response()->json(['transfers' => $transfers]); // Corrected key to 'transfers'
     return view('admin.Delete_transfers', compact('transfers'));
}


public function destroy($id)
{
    // العثور على الحوالة
    $transfer = Transfer::find($id);

    // حذف الحوالة
    $transfer->delete();

    return redirect()->route('admin.dashboard')->with('success', 'تم حذف الحوالة بنجاح.');
}



}

