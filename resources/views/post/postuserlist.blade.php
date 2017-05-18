
@extends('layouts.postlayout')

@section('content')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        LIST USER
                    </div>
                    <div class="panel-body">
                      <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Admin</th>
                                            <th>Author</th>
                                            <th>User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($user as $user)
                                          <tr>
                                          <form class="" action="{{url('list/user')}}" method="post">
                                              {{csrf_field()}}


                                          <td>{{$user->id }}</td>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->email}}</td>
                                          <input type="hidden" name="id" value="{{$user->id}}">
                                          <td><input type="checkbox" {{$user->hasRole('Admin') ? 'checked' : ''}} name="role_admin" ></td>
                                          <td><input type="checkbox" {{$user->hasRole('Author') ? 'checked' : ''}} name="role_author" ></td>
                                          <td><input type="checkbox" {{$user->hasRole('User') ? 'checked' : ''}} name="role_user" ></td>
                                          <td> <button type="submit" class="btn btn-primary">submit</button></td>
                                          </form>
                                          <td>
                                            <form class="" action="{{url('list/user/'.$user->id)}}" method="post">
                                              {{csrf_field()}}
                                              {{method_field('delete')}}
                                              <input type="hidden" name="id" value="{{$user->id}}">
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>
                                        </form>
                                        </tr>
                                          @endforeach

                                    </tbody>
                                </table>

                            </div>
                            <!-- /.table-responsive -->
                        </div>

                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->



@endsection
