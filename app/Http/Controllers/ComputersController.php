<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;
use App\Institut;
use App\Nutzer;
use App\Room;
use DB;

class ComputersController extends Controller
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
        /*
        
        if (request()->has('institut')) {
            $computers = DB::table('computers')
            ->join('nutzers', 'computers.nutzer', '=', 'nutzers.u_id')
            ->join('instituts', 'computers.institut', '=', 'instituts.in_id')
            ->join('rooms', 'computers.raum', '=', 'rooms.ro_id')
            ->select('computers.*', 'nutzers.nachname', 'instituts.abk', 'rooms.raum')
            ->where('computers.institut', request('institut'))
            ->orderBy('ip','asc')
            ->paginate(15)
            ->appends('institut', request('institut'));
        } else {


        $computers = DB::table('computers')
        ->join('nutzers', 'computers.nutzer', '=', 'nutzers.u_id')
        ->join('instituts', 'computers.institut', '=', 'instituts.in_id')
        ->join('rooms', 'computers.raum', '=', 'rooms.ro_id')
        ->select('computers.*', 'nutzers.nachname', 'instituts.abk', 'rooms.raum')
        ->orderBy('ip','asc')
        ->paginate(15);
    }
        */
        return view('db_bhv.computers.index');//->with('computers', $computers);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institut = Institut::all();

        $raume = DB::table('rooms')
        ->select('rooms.*')
        ->orderBy('raum','asc')
        ->get();

        foreach($raume as $raum) {
            $Selraume[$raum->ro_id] = $raum->raum;
        }

        $nutzer = DB::table('nutzers')
        ->select('nutzers.*')
        ->orderBy('nachname','asc')
        ->get();

        foreach($nutzer as $user) {
            $SelNutzer[$user->u_id] = $user->nachname .', '. $user->vorname;
        }
        return view('db_bhv.computers.create')->with([
            'institut' => $institut,
            'nutzer' => $SelNutzer,
            'raume' => $Selraume,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ip' => 'required',
            'nutzer' => 'required'
        ]);

        // Create Post
        $computer = new Computer;
        $computer->rechnername = $request->input('rechnername');
        $computer->institut = $request->input('institut');
        $computer->ip = $request->input('ip');
        $computer->macadresse = $request->input('macadresse');
        $computer->raum = $request->input('raum');
        $computer->dose = $request->input('dose');
        $computer->nutzer = $request->input('nutzer');
        $computer->hersteller = $request->input('hersteller');
        $computer->model = $request->input('model');
	$computer->version = $request->input('version');
	$computer->kommentar = $request->input('kommentar');
        $computer->save();

        return redirect('/pc')->with('success', 'Neuen Rechner eingetragen');
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
        $institut = Institut::all();
        $computer = Computer::find($id);
        /*$nutzer = Nutzer::all();*/

        $nutzer = DB::table('nutzers')
        ->select('nutzers.*')
        ->orderBy('nachname','asc')
        ->get();

        foreach($nutzer as $user) {
            $SelNutzer[$user->u_id] = $user->nachname .', '. $user->vorname;
        }

        $raume = DB::table('rooms')
        ->select('rooms.*')
        ->orderBy('raum','asc')
        ->get();

        foreach($raume as $raum) {
            $Selraume[$raum->ro_id] = $raum->raum;
        }

        return view('db_bhv.computers.edit')->with([
            'institut' => $institut,
            'computer' => $computer,
            'nutzer' => $SelNutzer,
            'raume' => $Selraume,
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
        $this->validate($request, [
            'ip' => 'required',
            'nutzer' => 'required'
        ]);

        // Update Post
        $computers = Computer::all();
        $computer = Computer::find($id);
        $data = [
            'computers' => $computers,
            'computer' => $computer,
        ];
        
        $computer->rechnername = $request->input('rechnername');
        $computer->institut = $request->input('institut');
        $computer->ip = $request->input('ip');
        $computer->macadresse = $request->input('macadresse');
        $computer->raum = $request->input('raum');
        $computer->dose = $request->input('dose');
        $computer->nutzer = $request->input('nutzer');
        $computer->hersteller = $request->input('hersteller');
        $computer->model = $request->input('model');
	$computer->version = $request->input('version');
	$computer->kommentar = $request->input('kommentar');
        $computer->save();

        return redirect('/pc')->with('success', 'Eintrag in Rechnerliste aktualisiert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computer = computer::find($id);
        $computer->delete();
        return redirect('/pc')->with('success', 'Eintrag aus Rechnerliste gelöscht');
    }
  
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $data=DB::table('computers')
        ->join('nutzers', 'computers.nutzer', '=', 'nutzers.u_id')
        ->join('instituts', 'computers.institut', '=', 'instituts.in_id')
        ->join('rooms', 'computers.raum', '=', 'rooms.ro_id')
        ->where('rechnername', 'like', '%'.$query.'%')
        ->orWhere('instituts.abk', 'like', '%'.$query.'%')
        ->orWhere('ip', 'like', '%'.$query.'%')
        ->orWhere('rooms.raum', 'like', '%'.$query.'%')
        ->orWhere('dose', 'like', '%'.$query.'%')
        ->orWhere('nutzers.nachname', 'like', '%'.$query.'%')
        ->orWhere('nutzers.vorname', 'like', '%'.$query.'%')
        ->orWhere('hersteller', 'like', '%'.$query.'%')
        ->orWhere('macadresse', 'like', '%'.$query.'%')
        ->orWhere('version', 'like', '%'.$query.'%')
	->orWhere('kommentar', 'like', '%'.$query.'%')
        ->orderBy('nachname', 'asc')
        ->get();  
                
      }
      else
      {
            $data=DB::table('computers')
            ->join('nutzers', 'computers.nutzer', '=', 'nutzers.u_id')
            ->join('instituts', 'computers.institut', '=', 'instituts.in_id')
            ->join('rooms', 'computers.raum', '=', 'rooms.ro_id')
            ->orderBy('ip','asc')
            ->get();  
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->rechnername.'</td>
         <td>'.$row->abk.'</td>
         <td>'.$row->ip.'</td>
         <td>'.$row->raum.'</td>
         <td>'.$row->dose.'</td>
         <td>'.$row->nachname.','.$row->vorname.'</td>
         <td>'.$row->hersteller.'</td>
         <td>'.$row->model.'</td>
	 <td>'.$row->macadresse.'</td>
	 <td>'.$row->version.'</td>
	 <td>'.$row->kommentar.'</td>'.
         '<td><small><a href="/pc/'.$row->pc_id.'/edit" class="btn btn-secondary">Edit</a></small></td>'.
       '</tr>';
         
       }
      }
      else
      {
       $output = '
       <tr>
       <td align="left" colspan="10">Kein Eintrag gefunden</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
