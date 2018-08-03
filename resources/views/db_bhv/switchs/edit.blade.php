@extends('layouts.app')

@section('content')

<h1>Switch editieren</h1>
    <br>   
                    {!! Form::open(['action' => ['SwitchsController@update', $id->sw_id], 'method' => 'POST']) !!}
    <div class="form-group">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('id', 'Switch_ID')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('id', $id->sw_id, ['class' => 'form-control', 'placeholder' => '', 'readonly'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('switch', 'Core-Switch')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('switch', $id->switch, ['class' => 'form-control', 'placeholder' => '', 'readonly'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('port', 'Port')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('port', $id->port, ['class' => 'form-control', 'placeholder' => '', 'readonly'])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('vlan', 'V-Lan')}}
                </div>
                <div class="col-sm-4">
                    {{Form::text('vlan', $id->vlan, ['class' => 'form-control', 'placeholder' => ''])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('raum', 'Raum')}}
                </div>
                <div class="col-sm-4">                        
                    {{Form::select('raum', $raume,$id->raum, ['class' => 'form-control', 'placeholder' => $id->raum])}}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    {{Form::label('dose', 'Dose')}}
                </div>
                    <div class="col-sm-4">
                        
                        {{Form::hidden('dose', $id->dose, ['class' => 'form-control', 'placeholder' => ''])}}
                       
                        @for($i = 1; $i < 9; $i++)
                            @if($id->dose == 'D'.$i)
                            {{Form::label('dose','|D'.$i)}}
                            {{Form::radio('dose','D'.$i, true, ['checked' => 'checked'])}} 
                            @else
                            {{Form::label('dose','|D'.$i)}}
                            {{Form::radio('dose','D'.$i)}} 
                            @endif
                        @endfor
                        <br>
                        @for($i = 1; $i < 5; $i++)
                            @if($id->dose == 'T'.$i)
                            {{Form::label('dose','|T'.$i)}}
                            {{Form::radio('dose','T'.$i, true, ['checked' => 'checked'])}} 
                            @else
                            {{Form::label('dose','|T'.$i)}}
                            {{Form::radio('dose','T'.$i)}} 
                            @endif
                        @endfor

                </div>
            </div>
            <div class="container">
                <div class="row">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('aktualisieren', ['class' => 'btn btn-primary'] )}}

                        {!! Form::close() !!}

                        <a href="/switch" class="btn btn-secondary">zurück</a>
                </div>
            </div>

@endsection