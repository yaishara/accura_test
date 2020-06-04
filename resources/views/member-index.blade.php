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
      <h2>Member List</h2>
      <div class="row">
       <div class="form-group" >
             <a class="btn btn-success "style="margin-left: 20px;" href="{{route('member.create')}}">Add New Member</a>
          </div>
      </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>First Name</th>
                    <th>ast Position</th>
                    <th>Date of Birth</th>
                    <th>Ds Divitions</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $key => $detail)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$detail->f_name}}</td>
                    <td>{{$detail->l_name}}</td>
                    <td>{{$detail->dob}}</td>
                    <td>{{$detail->divition->name}}</td>
                     <td>
                              <a class="btn btn-primary" href="{{route('member.edit',$detail->id)}}">Edit</a>
                           
                            <a class="btn btn-danger" href="{{route('member.destroy',$detail->id)}}">Delete</a>
                            </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>