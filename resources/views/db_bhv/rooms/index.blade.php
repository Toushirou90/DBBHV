@extends('layouts.app')

@section('content')
    <h1 align="center">Raumliste</h1>
    @if(count($rooms) > 0)
        <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col">Etage</th>
                <th scope="col">Raumnummer</th>
                <th scope="col">Verwendungszweck</th>
              </tr>
            </thead>
        @foreach($rooms as $room)
                <tbody>
                  <tr>
                    <td>{{$room->etage}}</td>
                    <td>{{$room->raum}}</td>
                    <td>{{$room->zweck}}</td>
                  </tr>
        
        @endforeach
                </tbody>
        </table>
        {{$rooms->links()}}  
        </div>
        @else
        Keine Räume eingetragen.
        @endif
@endsection

