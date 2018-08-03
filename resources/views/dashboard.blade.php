@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                
                     
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <hr>
                        <h3>Deine Blog Einträge</h3>     
                        <table class='table table-striped'>
                            <tr>
                                <th>Titel</th>
                                <th></th>
                                <th></th>
                            </tr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
