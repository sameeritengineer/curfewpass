@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table table id="example" class="table display" >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Mobile No</th>
                          <th scope="col">Occupation</th>
                          <th scope="col">Message</th>
                          <th scope="col">Date</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($informations as $information)
                        <tr>
                          <th scope="row">1</th>
                          <td>{{$information->name}}</td>
                          <td>{{$information->email}}</td>
                          <td>{{$information->mobile_no}}</td>
                          <td>{{$information->occupation}}</td>
                          <td>{{$information->message}}</td>
                          <td>{{$information->date}}</td>
                          <td><button class="btn btn-primary" onclick="send_mail('{{$information->email}}')">Send Mail</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function send_mail(email)
{
    $.ajax({
        type:'post',
        url:'{{route("send_mail")}}',
        data:{'_token':'{{csrf_token()}}','email':email},
        success:function(data)
        {
            console.log(data);
        },
    })
}
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script>$('#example').DataTable();</script>

@endsection
