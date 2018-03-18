<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;


class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        $query = $Request->get('q');
        $hasil = Barang::where('Merk','LIKE','%'.$query.'%')->paginate(10);

        return view('result',compact('hasil','query'));

    }

}
