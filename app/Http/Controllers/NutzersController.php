<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nutzer;
use App\Institut;
use App\Computer;
use App\Room;
use DB;

class NutzersController extends Controller
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
        //$users = Nutzer::all();

        if (request()->has('institut')) {
            $users = DB::table('nutzers')
            ->join('rooms', 'nutzers.buero', '=', 'rooms.ro_id')
            ->join('telefons', 'nutzers.telefon', '=', 'telefons.te_id')
            ->join('instituts', 'nutzers.institut', '=', 'instituts.in_id')
            ->select('nutzers.*', 'rooms.raum', 'telefons.nummer', 'instituts.abk', 'instituts.in_id')
            ->where('nutzers.institut', request('institut'))
            ->orderBy('nachname','asc')
            ->paginate(30)
            ->appends('institut', request('institut'));
        } else {
        $users = DB::table('nutzers')
            ->join('rooms', 'nutzers.buero', '=', 'rooms.ro_id')
            ->join('telefons', 'nutzers.telefon', '=', 'telefons.te_id')
            ->join('instituts', 'nutzers.institut', '=', 'instituts.in_id')
            ->select('nutzers.*', 'rooms.raum', 'telefons.nummer', 'instituts.abk', 'instituts.in_id')
            ->orderBy('nachname','asc')
            ->paginate(30)
            ->appends('institut', request('institut'));
        }
        return view('db_bhv.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institut = Institut::all();
        $nutzer = Nutzer::all();

        $raume = DB::table('rooms')
        ->select('rooms.*')
        ->orderBy('raum','asc')
        ->get();

        foreach($raume as $raum) {
            $Selraume[$raum->ro_id] = $raum->raum;
        }

        $telefons = DB::table('telefons')
        ->select('telefons.*')
        ->orderBy('nummer','asc')
        ->get();

        foreach($telefons as $telefon) {
            $Seltelefon[$telefon->te_id] = $telefon->nummer;
        }

        return view('db_bhv.users.create')->with([
            'institut'=> $institut,
            'raume' => $Selraume,
            'telefon' => $Seltelefon,
            'nutzer' => $nutzer,

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
            'vorname' => 'required',
            'nachname' => 'required',
            'institut' => 'required'
        ]);

        // Create Post
        $nutzer = new Nutzer;
        $nutzer->vorname = $request->input('vorname');
        $nutzer->nachname = $request->input('nachname');
        $nutzer->email = $request->input('email');
        $nutzer->institut = $request->input('institut');
        $nutzer->buero = $request->input('buero');
        $nutzer->telefon = $request->input('telefon');
        $nutzer->save();

        return redirect('/user')->with('success', 'Neuen Mitarbeiter eingetragen');
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
        
        
        /*$nutzer = Nutzer::all();*/
        /*$nutzer = Nutzer::find($id)*/
        $institut = Institut::all();
        $nutzer = DB::table('nutzers')
        ->join('instituts', 'nutzers.institut', '=', 'instituts.in_id')
        ->join('rooms', 'nutzers.buero', '=', 'rooms.ro_id')
        ->join('telefons', 'nutzers.telefon', '=', 'telefons.te_id')
        ->select('nutzers.*', 'rooms.raum', 'telefons.nummer', 'instituts.abk')
        ->where ('nutzers.u_id', '=', $id)
        ->get()->first();

        $raume = DB::table('rooms')
        ->select('rooms.*')
        ->orderBy('raum','asc')
        ->get();

        foreach($raume as $raum) {
            $Selraume[$raum->ro_id] = $raum->raum;
        }

        $telefons = DB::table('telefons')
        ->select('telefons.*')
        ->orderBy('nummer','asc')
        ->get();

        foreach($telefons as $telefon) {
            $Seltelefon[$telefon->te_id] = $telefon->nummer;
        }

        return view('db_bhv.users.edit')->with([
            'nutzer' => $nutzer,
            'institut'=> $institut,
            'raume' => $Selraume,
            'telefon' => $Seltelefon,

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
            'nachname' => 'required'
        ]);

        // Update Post
        $nutzer = Nutzer::find($id);
        $nutzer->vorname = $request->input('vorname');
        $nutzer->nachname = $request->input('nachname');
        $nutzer->email = $request->input('email');
        $nutzer->institut = $request->input('institut');
        $nutzer->buero = $request->input('buero');
        $nutzer->telefon = $request->input('telefon');
        $nutzer->save();

        return redirect('/user')->with('success', 'Eintrag in Mitarbeiterliste aktualisiert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nutzer = Nutzer::find($id);
        $nutzer->delete();
        return redirect('/user')->with('success', 'Eintrag aus Mitarbeiterliste gelöscht');
    }
     
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('nutzers')
            ->join('rooms', 'nutzers.buero', '=', 'rooms.ro_id')
            ->join('telefons', 'nutzers.telefon', '=', 'telefons.te_id')
            ->join('instituts', 'nutzers.institut', '=', 'instituts.in_id')
            ->where('vorname', 'like', '%'.$query.'%')
            ->orWhere('nachname', 'like', '%'.$query.'%')
            ->orWhere('email', 'like', '%'.$query.'%')
            ->orWhere('instituts.abk', 'like', '%'.$query.'%')
            ->orWhere('telefons.nummer', 'like', '%'.$query.'%')
            ->orWhere('rooms.raum', 'like', '%'.$query.'%')
            ->orderBy('nachname', 'asc')
            ->get();
            
      }
      else
      {
       $data = DB::table('nutzers')
            ->join('rooms', 'nutzers.buero', '=', 'rooms.ro_id')
            ->join('telefons', 'nutzers.telefon', '=', 'telefons.te_id')
            ->join('instituts', 'nutzers.institut', '=', 'instituts.in_id')
            ->orderBy('nachname', 'asc')
            ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->vorname.'</td>
         <td>'.$row->nachname.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->abk.'</td>
         <td>'.$row->raum.'</td>
         <td>'.$row->nummer.'</td>'.
         '<td><small><a href="/user/'.$row->u_id.'/edit" class="btn btn-secondary">Edit</a></small></td>'.
       '</tr>';
         
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="left" colspan="7">Kein Eintrag gefunden</td>
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