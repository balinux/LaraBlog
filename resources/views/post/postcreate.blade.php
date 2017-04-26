
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

                                <form role="form" action="{{url('post')}}"  enctype="multipart/form-data" method="post">
                                  {{csrf_field()}}

                                    <div class="form-group">
                                        <label>judul</label>
                                        <input class="form-control" name="title" placeholder="Enter text">
                                    </div>


                                    <div class="form-group">
                                        <label>excerpt</label>
                                        <input class="form-control" name="excerpt" placeholder="Enter text">
                                    </div>


                                    <div class="form-group">
                                        <label>File input</label>
                                        <input type="file" name="file">
                                    </div>

                                    <div class="form-group">
                                        <label>body</label>
                                        <textarea class="form-control my-editor" rows="3" name="body"></textarea>
                                        <!-- <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea> -->
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
