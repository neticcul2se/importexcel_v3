<?php


namespace App\Http\Controllers;
use App\User;
use App\Data;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\imports\CsvImport;

class CsvFile extends Controller
{
    //
        function index(){
            $data = User::latest()->paginate(10);
            return view('csv_file_pagination',compact('data'))
            ->with('i',(request()->input('page',1)-1)*10);
        }


public function csv_export(){
    return Excel::download(new CsvExport,'sample.csv');
}

    public function csv_import()
    {
         Excel::import(new CsvImport,request()->file('file'));
       
        return back();


    }
}


