<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\SpreadsheetService;

class RkoController extends Controller
{
    private $spreadsheetService;

    public function __construct(SpreadsheetService $service)
    {
        $this->spreadsheetService = $service;
    }

    public function showData()
    {
        // Ambil data dari service
        $data = $this->spreadsheetService->readData();
    
        // Pastikan $data tidak kosong atau null
        return view('rko.index', compact('data'));
    }
    

    public function addData(Request $request)
    {
        $this->spreadsheetService->writeData($request->all());
        return redirect()->back()->with('success', 'Data added successfully!');
    }
}
