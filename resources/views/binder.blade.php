
@extends('layouts.master')
    
@section('title', 'Binder Page')

@section('content')

<style>	
.subjects.binder{
	font-size:50px;
}

/*body {
    background: #ffffff url("img/binderbg.jpg") no-repeat;
		background-color:rgba(0, 0, 0, 0.4);
}

.panel-body.binder{
	  background: #ffffff url("img/binderbg.jpg") no-repeat;
}*/
</style>
<link rel= "stylesheet" href="\NoteRoom\public\css\binder_page.css">



<div class="container-fluid">


<div class="binder_content">
	
	

	{{-- <div class="box"> --}}
		


<div class="col-sm-6">
	
	<div class="panel panel-info">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Your Classes</div>
	  <div class="panel-body binder">
	    <ul class = "subjects binder">
				@foreach ($user->noterooms as $noteroom)

				{{$noteroom->title}}

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
	  </div>

	 
	</div>
	
</div>

	{{-- <img src="img/binderPic.png" style='width:100%; height:100%;' border="0" alt="Null"> --}}


	{{-- </div> --}}

</div>

	
</div>





@stop

