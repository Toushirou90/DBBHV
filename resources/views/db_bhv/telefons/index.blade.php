@extends('layouts.app')

@section('content')
    <h1 align="center">Telefonliste</h1>
    @if(count($telefons) > 0)
        <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col">Nutzer</th>
                <th scope="col">Raum</th>
                <th scope="col">Rufnummer</th>
                <th scope="col">Gerät</th>
            </thead>
        @foreach($telefons as $telefon)
                <tbody>
                  <tr>
                    <td>{{$telefon->nutzer}}</td>
                    <td>{{$telefon->raum}}</td>
                    <td>{{$telefon->nummer}}</td>
                    <td>{{$telefon->geraet}}</td>
                  </tr>
        <!--</div>-->
        @endforeach
                </tbody>
        </table>
        </div>
        @else
        Keine Räume eingetragen.
        @endif
@endsection