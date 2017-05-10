 @extends('layouts.master') @section('title', 'Binder Page') @section('content')

<style>
	.subjects.binder {
		font-size: 50px;
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
</style>
<link rel="stylesheet" href="\NoteRoom\public\css\binder_page.css">
<div class="container-fluid">
	<div class="hidden-xs">
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
						@foreach ($user->noterooms as $noteroom) {{$noteroom->title}}
						<br> @endforeach
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
				</div>
			</div>
		</div>
	</div>


</div>


@stop