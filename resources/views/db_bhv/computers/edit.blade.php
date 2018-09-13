@extends('layouts.app')

@section('content')
    <h1>Rechner editieren</h1>
    <br>   
                    {!! Form::open(['action' => ['ComputersController@update', $computer->pc_id], 'method' => 'POST']) !!}
    <div class="form-group">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('rechnername', 'Rechnername')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('rechnername', $computer->rechnername, ['class' => 'form-control', 'placeholder' => 'Rechnername'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('institut', 'Institut')}}
                </div>
                    <div class="col-sm-4">
                        
                        {{Form::hidden('institut', $computer->institut, ['class' => 'form-control', 'placeholder' => 'Institut'])}}
                      @foreach($institut as $in)
                        {{Form::label('institut',$in->abk)}}
                        @if($computer->institut == $in->in_id)
                            {{Form::radio('institut',$in->in_id, true, ['checked' => 'checked'])}}
                        @else
                            {{Form::radio('institut',$in->in_id)}}                        
                        @endif
                        
                        
                     @endforeach
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-2">
                        {{Form::label('nutzer', 'User')}}
                    </div>
                    <div class="col-sm-4">   
                        {{Form::select('nutzer',$nutzer,$computer->nutzer, ['class' => 'form-control', 'placeholder' => $computer->nutzer])}}
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('ip', 'IP Adresse')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('ip', $computer->ip, ['class' => 'form-control', 'placeholder' => 'IP Adresse'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('raum', 'Raum')}}
                </div>
                <div class="col-sm-4">                        
                    {{Form::select('raum', $raume,$computer->raum, ['class' => 'form-control', 'placeholder' => $computer->raum])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('dose', 'Dose')}}
                </div>
                <div class="col-sm-4">              
                    {{Form::text('dose', $computer->dose, ['class' => 'form-control', 'placeholder' => 'Dose'])}}
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-2">
                        {{Form::label('macadresse', 'MAC Adresse')}}
                    </div>
                    <div class="col-sm-4">
                        {{Form::text('macadresse', $computer->macadresse, ['class' => 'form-control', 'placeholder' => 'MAC Adresse'])}}
                    </div>
            </div>    
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('hersteller', 'Hersteller')}}
                </div>
                <div class="col-sm-4">   
                    {{Form::text('hersteller', $computer->hersteller, ['class' => 'form-control', 'placeholder' => 'Hersteller'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('model', 'Modell')}}
                </div>
                <div class="col-sm-4">   
                    {{Form::text('model', $computer->model, ['class' => 'form-control', 'placeholder' => 'Modell'])}}
                </div>
            </div>
           <div class="row">
                <div class="col-sm-2">
                    {{Form::label('version', 'Version')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('version', $computer->version, ['class' => 'form-control', 'placeholder' => 'Bsp.:7 / 10 - 1803'])}}
                </div>
            </div>
  	   <div class="row">
                <div class="col-sm-2">
                    {{Form::label('kommentar', 'Kommentar')}}
                </div>
                <div class="col-sm-4">   
                    {{Form::text('kommentar', $computer->kommentar, ['class' => 'form-control', 'placeholder' => 'Bsp.: IMAC'])}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('aktualisieren', ['class' => 'btn btn-primary'] )}}

                    {!! Form::close() !!}

                    {!!Form::open(['action' => ['ComputersController@destroy', $computer->pc_id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('löschen', ['class' => 'btn btn-danger', 'onclick' =>"return confirm('Eintrag aus Rechnerliste wirklich löschen?');"])}}
                    {!!Form::close()!!}

                    <a href="/pc" class="btn btn-secondary">zurück</a>
    </div>
    </div>
<br>
<small>Eintrag erstellt am: {{$computer->created_at}} UTC</small>
<br>
<small>Eintrag zuletzt bearbeitet am: {{$computer->updated_at}} UTC</small>
@endsection

