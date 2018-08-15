@extends('layouts.app')
@section('content')
<html>
 
<head>
 
<meta name="_token" content="{{ csrf_token() }}">
 
 
 
<title>Rechnerliste</title>
 

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 
</head>
 
<body>
 
    <h1 align="center">Rechnerliste</h1><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
            <a><input type="text" class="form-control" id="search" name="search" placeholder="Suchleiste"></input></a>  
        </div>
        <div class="col-sm-4">
            <h5 align="center">Anzahl der Einträge: <span id="total_records"></span></h5> 
        </div>
        <div class="col-sm-4">
            <a href="/pc/create" class="btn btn-primary float-right">Rechner hinzufügen</a>
        </div>     
      </div>    
    </div>

 
<div class="panel-body">
 
<div class="form-group">
 

 
</div>
 
<table class="table table-bordered table-sm table-hover">
 
<thead>
 
<tr>
 
    <th>Rechnername</th>

    <th>Institut</th>
        
    <th>IP Adresse</th>
        
    <th>Raum</th>
        
    <th>Dose</th>
        
    <th>Nutzer</th>
        
    <th>Hersteller</th>
    
    <th>Modell</th>
        
    <th>Mac Adresse</th>
        
    <th>Kommentar</th>

    <th>Edit</th>
        
    
 
</tr>
 
</thead>
 
<tbody>
</tbody>
 
</table>


 
</div>
 
</div>
 
</div>
 
</div>



<script>
    $(document).ready(function(){
    
        fetch_customer_data();
       
        function fetch_customer_data(query = '')
        {
         $.ajax({
          url:"{{ route('pc_live_search.action') }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data)
          {
           $('tbody').html(data.table_data);
           $('#total_records').text(data.total_data);
          }
         })
        }
       
        $(document).on('keyup', '#search', function(){
         var query = $(this).val();
         fetch_customer_data(query);
        });
       });
    </script>


</body>
 
</html>
@endsection

