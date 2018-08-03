@extends('layouts.app')

@section('content')
    <h1>Mitarbeiter editieren</h1>
    <br>   
                    {!! Form::open(['action' => ['NutzersController@update', $nutzer->u_id], 'method' => 'POST']) !!}
    <div class="form-group">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('vorname', 'Vorname')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('vorname', $nutzer->vorname, ['class' => 'form-control', 'placeholder' => 'Vorname'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('nachname', 'Nachname')}}
                </div>
                <div class="col-sm-4">
                        {{Form::text('nachname', $nutzer->nachname, ['class' => 'form-control', 'placeholder' => 'Nachname'])}}
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-2">
                        {{Form::label('email', 'Email')}}
                    </div>
                    <div class="col-sm-4">   
                        {{Form::text('email',$nutzer->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('institut', 'Institut')}}
                </div>
                    <div class="col-sm-4">
                        
                        {{Form::hidden('institut', $nutzer->institut, ['class' => 'form-control', 'placeholder' => 'Institut'])}}
                    @foreach($institut as $in)
                        {{Form::label('institut',$in->abk)}}                         
                    @if($nutzer->institut == $in->in_id)
                        {{Form::radio('institut',$in->in_id, true, ['checked' => 'checked'])}}
                    @else
                        {{Form::radio('institut',$in->in_id)}}                        
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('buero', 'Büro')}}
                </div>
                <div class="col-sm-4">                        
                    {{Form::select('buero', $raume,$nutzer->buero, ['class' => 'form-control', 'placeholder' => $nutzer->buero])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('telefon', 'Telefon')}}
                </div>
                <div class="col-sm-4">              
                    {{Form::select('telefon',$telefon,$nutzer->telefon, ['class' => 'form-control', 'placeholder' => $nutzer->telefon])}}
                </div>
            </div>
    <br>       
    <div class="row">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('aktualisieren', ['class' => 'btn btn-primary'] )}}

                    {!! Form::close() !!}

                    

                    {!!Form::open(['action' => ['NutzersController@destroy', $nutzer->u_id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('löschen', ['class' => 'btn btn-danger', 'onclick' =>"return confirm('Eintrag aus der Mitarbeiterliste wirklich löschen?');"])}}
                    {!!Form::close()!!}

                    <a href="/user" class="btn btn-secondary">zurück</a>
    </div>
<br>
<small>Eintrag erstellt am: {{$nutzer->created_at}} UTC</small>
<br>
<small>Eintrag zuletzt bearbeitet am: {{$nutzer->updated_at}} UTC</small>
@endsection
