
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
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="{{url('post/'.$edit->id)}}" enctype="multipart/form-data" method="post" file="true">
                                  {{csrf_field()}}
                                  <input type="hidden" name="_method" value="PATCH">
                                  <div class="form-group">
                                      <label>judul</label>
                                      <input class="form-control" name="title" placeholder="Enter text" value="{{$edit->title}}">
                                  </div>

                                  <div class="form-group">
                                      <label>excerpt</label>
                                      <input class="form-control" name="excerpt" placeholder="Enter text"  value="{{$edit->excerpt}}">
                                  </div>


                                  <img src="{{asset('upload/'.$edit->image)}}" class="img-circle" alt="" width="200px height="200px" ">
                                  <div class="form-group">
                                      <label>File input</label>
                                      <input type="file" name="file" value="{{$edit->image}}">
                                  </div>

                                  <div class="form-group">
                                      <label>body</label>
                                      <textarea class="form-control" rows="3" name="body">{{$edit->body}}</textarea>
                                  </div>
                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

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
