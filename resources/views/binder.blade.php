 @extends('layouts.master') @section('title', 'Binder Page') @section('content')

<style>
	.subjects.binder {
		font-size: 50px;
	}

	.panel.panel-info{
		position: relative;
	}

	.binder-ring-1 {
		position: fixed;
		width: 200px;
		height: 150px;
		top: 25%;
		left: 50%;
		margin-top: -100px;
		margin-left: -100px;
		z-index: 3;
	}

	.binder-ring-2 {
		position: fixed;
		width: 200px;
		height: 150px;
		top: 25%;
		left: 50%;
		margin-top: 90px;
		margin-left: -100px;
		z-index: 3;
	}

	.binder-ring-3 {
		position: fixed;
		width: 200px;
		height: 150px;
		top: 25%;
		left: 50%;
		margin-top: 300px;
		margin-left: -100px;
		z-index: 3;
	}

	.form-inline.createForm {
		position: absolute;
		bottom: 0;
		right:0;
		margin:0px 10px 5px 0px;
	}
</style>
<link rel="stylesheet" href="\NoteRoom\public\css\binder_page.css">
<div class="container-fluid">
	<div class="hidden-xs hidden-sm">
		<img src="img/binderring.png" alt="" class="binder-ring-1">
		<img src="img/binderring.png" alt="" class="binder-ring-2">
		<img src="img/binderring.png" alt="" class="binder-ring-3">
	</div>
	<div class="binder_content">

		<div class="col-sm-6">

			<div class="panel panel-info">
				<!-- Default panel contents -->
				<div class="panel-heading">Your Classes</div>
				<div class="panel-body binder">
					<ul class="subjects binder">
						@foreach ($user->noterooms as $noteroom)
							<a href="binder/{{$noteroom->id}}">
								{{$noteroom->title}}
							</a>
							<br> 
						@endforeach
					</ul>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel panel-info">
				<!-- Default panel contents -->
				<div class="panel-heading">Your Notes</div>
				<div class="panel-body binder">
					<h3 style="text-align: center;">
						You currently have no notes...
					</h3>

					<form class="form-inline createForm">
						<div class="form-group">
							<span>Create a Note: </span>
							<input type="text" class="form-control" id="createNR" placeholder="Enter Name">
						</div>

						<button type="submit" class="btn btn-sm btn-primary">Create</button>
					</form>
				</div>
			</div>



		</div>
	</div>


</div>


@stop