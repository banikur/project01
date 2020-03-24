<?php

namespace App\Http\Controllers\kab;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class PerdaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.kab_kota.index');
    }
    public function create()
    {
        $data["master_pajak"] = DB::table('master_jenis_pajak')
        ->where('id_pungutan',4)->get();
        
        return view('user.kab_kota.perda',$data);
    }
    
    public function pajak_detail(Request $request){
        $id = $request->jenis_pajak;
        $data["master_pajak"] = DB::table('master_pajak')
        ->where('jenis_pajak',$id)->get();
        return view('user.kab_kota.tarif',$data);
    }
}
