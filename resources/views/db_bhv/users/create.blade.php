@extends('layouts.app')

@section('content')
    <h1>Neuen Mitarbeiter eintragen</h1>   
    <br>
    {!! Form::open(['action' => 'NutzersController@store', 'method' => 'POST']) !!}
        <div class="container">
            <div class="col-sm-4">     
                {{Form::text('vorname', '', ['class' => 'form-control', 'placeholder' => 'Vorname'])}}
            </div>
            <div class="col-sm-4"> 
                {{Form::text('nachname', '', ['class' => 'form-control', 'placeholder' => 'Nachname'])}}
            </div>
            <div class="col-sm-4"> 
                {{Form::text('email','', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
            <div class="col-sm-4">
                
                
                @foreach($institut as $in)
                {{Form::label('institut',$in->abk)}}
                
                {{Form::radio('institut',$in->in_id)}}
                
                @endforeach
            </div>
            
            <div class="col-sm-4">
                {{Form::select('buero', $raume,'', ['class' => 'form-control', 'placeholder' => 'Büro'])}}
            </div>
           
            <div class="col-sm-4"> 
                {{Form::select('telefon',$telefon,'', ['class' => 'form-control', 'placeholder' => 'Telefon'])}}
            </div>
            <div class"col-sm-4">
                {{Form::submit('Daten absenden', ['class' => 'btn btn-primary'])}}
                {!! Form::close() !!}
                <a href="/user" class="btn btn-secondary">zurück</a>
            </div>
            
            

        </div>

    
@endsection