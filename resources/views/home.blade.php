@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

            <div class="row">
            <div class="container">
              <!-- <button href="#"  class="btn btn-xlarge" /><i class="fa fa-clock-o fa-5x" ></i> <span>Create</span></button> -->
              <a href="{{url('post/create')}}"><button type="button" class="btn btn-xlarge"><i class="fa fa-pencil fa-5x" ></i><span>Create</span></button></a>
              <a href="{{url('list/user')}}"><button type="button" class="btn btn-xlarge"><i class="fa fa-user fa-5x" ></i><span>Users</span></button></a>
              <!-- <button href="{{url('list/user')}}"  class="btn btn-xlarge" /><i class="fa fa-user fa-5x" ></i><span>Users</span></button> -->
            </div>
            </div>

                <div class="panel-body">
                    <a href="{{url('/post/create')}}"><button type="button" class="btn btn-primary">Buat postingan</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
