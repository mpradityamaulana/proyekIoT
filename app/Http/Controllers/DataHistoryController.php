<?php

namespace App\Http\Controllers;
use App\Models\SensorData;
use Illuminate\Http\Request;

class DataHistoryController extends Controller
{
    public function datahistory(Request $request){
        $query = SensorData::query();

        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        if ($request->filled('beban')) {
            $query->where('beban', $request->beban);
        }

        if ($request->filled('kecepatan')) {
            $query->where('kecepatan', $request->kecepatan);
        }

        $data = $query->orderBy('created_at', 'desc')->paginate(10)->appends($request->query());

        return view('pages.datahistory', compact('data'));   
    }
}
