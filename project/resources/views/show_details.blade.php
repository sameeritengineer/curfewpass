@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <span class="float-left">Curfew Information</span>
                  <a href="{{route('home')}}" class="btn btn-info float-right">Back</a>
                </div>
                <div class="card-body">
                  <p><strong>Image: </strong><br><a href="{{asset('uploads/'.$information->image)}}" target="_blank"><img src="{{asset('uploads/'.$information->image)}}" width=200></a></p>
                  <p><strong>Aadhar Image: </strong><br><a href="{{asset('uploads/'.$information->aadhar_image)}}" target="_blank"><img src="{{asset('uploads/'.$information->aadhar_image)}}" width=200></a></p>
                  <p><strong>Name: </strong>{{$information->name}}</p>
                  <p><strong>Email: </strong>{{$information->email}}</p>
                  <p><strong>Mobile NO: </strong>{{$information->mobile_no}}</p>
                  <p><strong>Date: </strong>{{$information->date}}</p>
                  <p><strong>Occupation: </strong>{{$information->occupation}}</p>
                  <p><strong>Message: </strong>{{$information->message}}</p>
                  @if($information->status == 0)
                  <p>
                    <form action="{{route('send_mail')}}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{$information->id}}">
                      <button class="btn btn-primary" value="1" name="status" type="submit">Accept</button>
                      <button class="btn btn-danger" value="0" name="status" type="submit">Reject</button>
                    </form>
                  </p>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
