@extends('layouts.master')
    
@section('title', 'Create A NoteRoom')


@section('content') 

    <div id="wrapper">

        <!-- Navigation -->


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Noteroom</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fill some stuff out real quick~
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Name your Noteroom</label>
                                            <input class="form-control">
                                            <p class="help-block">Ex: Comp 380</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Message you want to send to other Collaborators.</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        <h1>Invite other collaborators</h1>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="example.email@my.school.edu">
                                        </div>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="example.email@my.school.edu">
                                        </div>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="example.email@my.school.edu">
                                        </div>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="example.email@my.school.edu">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <h1>Group Photo</h1>
                                    <div class="text-center">
                                        <img src="C:\Users\red1498\Desktop\b2\csun.png" class="rounded" alt="...">
                                    </div>
                                    <div class="form-group">
                                        <label>File input</label>
                                        <input type="file">
                                    </div>

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

    </div>
    <!-- /#wrapper -->
@stop
    <!-- jQuery -->
   