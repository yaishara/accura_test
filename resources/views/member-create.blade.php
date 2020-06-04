<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Member Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<body>
</head>
<body>
		
	<div class="container">
	  <h2>Member Form</h2>
	  @if(session()->has('message'))
		    <div class="alert alert-success">
		        {{ session()->get('message') }}
		    </div>
		@endif
	  <form method="post" action="{{route('member.store')}}">
	  	@csrf
	  	
  		<div class="row" style="margin-bottom: 20px;">
	    	<div class="col">
	      		<input type="text" class="form-control" id="f_name" placeholder="Enter First Name" name="f_name" required="required">
	    	</div>
		    <div class="col">
		      <input type="date" class="form-control" placeholder="Enter Date of birt hday" name="dob" required="required">
		    </div>
	  </div>
	  <div class="row" style="margin-bottom: 20px;">
	    	<div class="col">
	      		<input type="text" class="form-control" id="f_name" placeholder="Enter email" name="l_name" required="required">
	    	</div>
		    <div class="col">
		      <select type="text" class="form-control" placeholder="Select Divition" name="divition_id" required="required">
		      	<option>Divition</option>
		      	@foreach($divition as $key => $value)
		      	<option value="{{$key}}">{{$value}}</option>
		      	@endforeach
		      	</select>
		    </div>
	  </div>
	  <div class="row" style="margin-bottom: 20px;">
	    	<div class="col">
	      		<textarea type="text" class="form-control" id="summery" placeholder="Enter Summery" name="summery">
	    	</textarea>
		    </div>
	  </div>
	   <div class="row">
	    	<div class="col-md-4" style="margin-right: 10px;">
	      		<a href="{{route('member.index')}}"  class="btn btn-primary mb-2">Back</a>
		    
	      		<button type="submit" class="btn btn-success mb-2">Save</button>
		    </div>
	  </div>
</form>
	</div>

</body>

</html>