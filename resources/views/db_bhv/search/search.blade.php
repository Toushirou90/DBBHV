@extends('layouts.app')
<br><br><br><br>
<html>
 
<head>
 
<meta name="_token" content="{{ csrf_token() }}">
 
 
 
<title>Live Search</title>
 

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 
</head>
 
<body>
 
<div class="container">
 
<div class="row">
 
<div class="panel panel-default">
 
<div class="panel-heading">
 
<h3>Products info </h3>
 
</div>
 
<div class="panel-body">
 
<div class="form-group">
 
<input type="text" class="form-controller" id="search" name="search"></input>
 
</div>
 
<table class="table table-bordered table-hover">
 
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
 
<th>Edit</th>
 
<th>Delete</th>
 
</tr>
 
</thead>
 
<tbody>
 
</tbody>
 
</table>
 
</div>
 
</div>
 
</div>
 
</div>
 
<script type="text/javascript">
 
$('#search').on('keyup',function(){
 
$value=$(this).val();
 
$.ajax({
 
type : 'get',
 
url : '{{URL::to('search')}}',
 
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
 
</body>
 
</html>