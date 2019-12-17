@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="">User List</a></div>

                <div class="card-body">
                	<table class="table table-striped">
        <thead>
        <tr>
            <th>S.no</th>
            <th>User name</th>
            <th>mail</th>
            
        </tr>
        </thead>
        @foreach($data as $datas)
        <tbody>             
           

        <tr >
            <td>{{$datas->id}}</td>
            <td>{{$datas->name}}</td>
            <td>{{$datas->email}}</td>
        </tr>

        </tbody>
                    @endforeach

    </table>
                
                </div>
                </div>
            </div>
        </div>
    </div>
</div><br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="">Book List</a></div>

                <div class="card-body">
               <table class="table table-striped">
        <thead>
        <tr>
            <th>s.no</th>
            <th>Book name</th>         
            <th>subscription</th>

        </tr>
        </thead>
        <tbody>
        <tr >
            <td>{{$datas->id}}</td>
            <td>{{$datas->upload}}</td>
        </tr>
        </tbody>
    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
