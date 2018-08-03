<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Swit;
use DB;

class SwitchsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Titel';
        return view('db_bhv.switchs.index')->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $switch = substr($id, 0,1);
        $port = substr($id, 1,3);
        $id =   DB::table('switches')
        ->where ('switch', '=', $switch)
        ->Where('port', '=', $port)
        ->get()->first();

        $raume = DB::table('rooms')
        ->select('rooms.*')
        ->orderBy('raum','asc')
        ->get();

        foreach($raume as $raum) {
            $Selraume[$raum->ro_id] = $raum->raum;
        }



        return view('db_bhv.switchs.edit')->with([
            'switch'    =>  $switch,
            'port'      =>  $port,
            'id'        =>  $id,
            'raume'     =>  $Selraume
        
        ]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $switch = Swit::find($id);
        $switch->switch = $request->input('switch');
        $switch->port = $request->input('port');
        $switch->vlan = $request->input('vlan');
        $switch->raum = $request->input('raum');
        $switch->dose = $request->input('dose');
        $switch->save();

        return redirect('/switch')->with('success', 'Eintrag aktualisiert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
