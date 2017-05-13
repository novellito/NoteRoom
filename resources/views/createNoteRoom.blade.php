@extends('layouts.master')
 @section('title', 'Create A NoteRoom')



<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
        rgba(0, 0, 0, 0.55) url("createbg.jpeg") no-repeat 50% 30%;
        background-size: 100%;
        padding-bottom: 50px;
    }

    h1,
    label,
    p.help-block {
        color: white;
    }

    .input-group-addon {
        background-color: #a2c9e6;
    }

    .input.form-control {
        background-color: #c2e4f5;
    }
</style>
@section('content')

<h1 class="text-center">Create Noteroom</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-4" style="float:none; margin:0 auto;">
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
                        <!--possibly might not have invite feature working...same noteroom link-->
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
            </div>
        </div>
    </div>
</div>

@stop