@extends('layouts.app')

@section('content')
    <div class="table-responsive">
    <h1>Rechnerliste</h1>
    <h5>Filter:
      <a href="/pc?institut=5" class="btn btn-secondary">ZI</a>
      <a href="/pc?institut=3" class="btn btn-secondary">FI</a>
      <a href="/pc?institut=4" class="btn btn-secondary">SF</a>
      <a href="/pc?institut=6" class="btn btn-secondary">VW</a>
      <a href="/pc" class="btn btn-secondary">Reset</a>
      <a><input type="text" class="form-control" id="search" name="search"></input></a>
      <a href="/pc/create" class="btn btn-primary float-right">Rechner hinzufügen</a>
      </h5>
    </div>
        @if(count($computers) > 0)
        <div class="table-responsive">
        <table class="table table-hover table-sm table-bordered">
            <thead>
              <tr>
                <th scope="col">Rechnername</th>
                <th scope="col">Institut</th>
                <th scope="col">IP Adresse</th>
                <th scope="col">Raum</th>
                <th scope="col">Dose</th>
                <th scope="col">Nutzer</th>
                <th scope="col">Hersteller</th>
                <th scope="col">Modell</th>
                <th scope="col">Mac Adresse</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
        @foreach($computers as $computer)
                <tbody>
                  <tr>
                    <th scope="row">{{$computer->rechnername}}</th>
                  <td>{{$computer->abk}}</td>
                    <td>{{$computer->ip}}</td>
                    <td>{{$computer->raum}}</td>
                    <td>{{$computer->dose}}</td>
                    <td>{{$computer->nachname}}</td>
                    <td>{{$computer->hersteller}}</td>
                    <td>{{$computer->model}}</td>
                    <td>{{$computer->macadresse}}</td>
                    <td><a href="/pc/{{$computer->pc_id}}/edit" class="btn btn-secondary">Edit</a></td>
                    <td>{!!Form::open(['action' => ['ComputersController@destroy', $computer->pc_id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' =>"return confirm('Eintrag aus Rechnerliste wirklich löschen?');"])}}
                    {!!Form::close()!!}</td>
                  </tr>
       
        @endforeach
                </tbody>
        </table>
        {{$computers->links()}}  
        </div>
        <script type="text/javascript">
 
          $('#search').on('keyup',function(){
           
          $value=$(this).val();
           
          $.ajax({
           
          type : 'get',
           
          url : '{{URL::to('pc')}}',
           
          data:{'search':$value},
           
          success:function(data){
           
          $('tbody').html(data);
           
          }
           
          });
           
           
           
          })
           
          </script>
           
          <script type="text/javascript">
           
          $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
           
          </script>
        @else
        Keine Rechner gefunden.
        @endif
    
@endsection