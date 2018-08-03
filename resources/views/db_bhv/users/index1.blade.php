@extends('layouts.app')

@section('content')
    <h1>Mitarbeiterliste</h1>
    <h5>Filter:
    <a href="/user?institut=5" class="btn btn-secondary">ZI</a>
    <a href="/user?institut=3" class="btn btn-secondary">FI</a>
    <a href="/user?institut=4" class="btn btn-secondary">SF</a>
    <a href="/user?institut=6" class="btn btn-secondary">VW</a>
    <a href="/user" class="btn btn-secondary">Reset</a>
    <a><input type="text" class="form-control" id="search" name="search"></input></a>
    <a href="/user/create" class="btn btn-primary float-right">Mitarbeiter hinzufügen</a>
    </h5>
    @if(count($users) > 0)
        <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col">Vorname</th>
                <th scope="col">Nachname</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Institut</th>
                <th scope="col">Buero</th>
                <th scope="col">Telefon</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
        @foreach($users as $user)
                <tbody>
                  <tr>
                    <td>{{$user->vorname}}</td>
                    <td>{{$user->nachname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->abk}}</td>
                    <td>R.{{$user->raum}}</td>
                    <td>-{{$user->nummer}}</td>
                    <td><a href="/user/{{$user->u_id}}/edit" class="btn btn-secondary">Edit</a></td>
                    <td>{!!Form::open(['action' => ['NutzersController@destroy', $user->u_id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' =>"return confirm('Eintrag aus Rechnerliste wirklich löschen?');"])}}
                    {!!Form::close()!!}</td>
                  </tr>
        
            @endforeach
                </tbody>
               
        </table>
        {{$users->links()}}
        </div>
        @else
        <br>
      Keine Mitarbeiter in eingetragen.
        @endif
@endsection
