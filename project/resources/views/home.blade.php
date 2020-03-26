@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Curfew Information</div>
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table table id="example" class="table display" >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Mobile No</th>
                          <th scope="col">Date</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($informations as $information)
                        <tr>
                          <th scope="row">1</th>
                          <td>{{$information->name}}</td>
                          <td>{{$information->email}}</td>
                          <td>{{$information->mobile_no}}</td>
                          <td>{{$information->date}}</td>
                          <td><a href="{{route('show_details',[$information->id])}}" class="btn btn-primary">View</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
