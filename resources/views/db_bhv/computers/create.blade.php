@extends('layouts.app')

@section('content')
    <h1>Neuen Rechner eintragen</h1>   
    <br>
    {!! Form::open(['action' => 'ComputersController@store', 'method' => 'POST']) !!}
        <div class="container">
            <div class="col-sm-4">     
                {{Form::text('rechnername', '', ['class' => 'form-control', 'placeholder' => 'Rechnername'])}}
            </div>
            <div class="col-sm-4"> 
                {{Form::hidden('institut', '', ['class' => 'form-control', 'placeholder' => 'Institut'])}}
                @foreach($institut as $in)
                    {{Form::label('institut',$in->abk)}}
                    {{Form::radio('institut',$in->in_id)}}
                @endforeach
            </div>
            <div class="col-sm-4"> 
                    {{Form::select('nutzer',$nutzer,null, ['class' => 'form-control', 'placeholder' => 'Nutzer'])}}
            </div>
            <div class="col-sm-4"> 
                {{Form::text('ip', '', ['class' => 'form-control', 'placeholder' => 'IP Adresse'])}}
            </div>
            
            <div class="col-sm-4">
                {{Form::select('raum', $raume,null, ['class' => 'form-control', 'placeholder' => 'Raum'])}}
            </div>
           
            <div class="col-sm-4"> 
                {{Form::text('dose', '', ['class' => 'form-control', 'placeholder' => 'Dose'])}}
            </div>
            <div class="col-sm-4"> 
                    {{Form::text('macadresse', '', ['class' => 'form-control', 'placeholder' => 'MAC Adresse'])}}
            </div>
            <div class="col-sm-4"> 
                {{Form::text('hersteller', '', ['class' => 'form-control', 'placeholder' => 'Hersteller'])}}
            </div>
            <div class="col-sm-4"> 
                {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Modell'])}}
            </div>
            <div class="col-sm-4">
                {{Form::text('version', '', ['class' => 'form-control', 'placeholder' => 'Windows Version'])}}
            </div>
            <div class="col-sm-4">
                {{Form::text('kommentar', '', ['class' => 'form-control', 'placeholder' => 'Kommentar'])}}
            </div>
<br>
            <div class"container">
                {{Form::submit('Daten absenden', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
                <a href="/pc" class="btn btn-secondary">zurück</a>
            </div>

            </div>
        </div>
    
@endsection
