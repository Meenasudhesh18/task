@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin uploade</div>

                <div class="card-body">
                	 <table class="table table-striped">
        <thead>
        <tr>
            <th>s.no</th>
            <th>Book name</th>         

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
@endsection
