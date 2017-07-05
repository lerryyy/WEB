
<!DOCTYPE html>
<html>
  <head>
    <title>File Download in laravel 5.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
      .table1 {
        border-radius: 5px;
        width: 50%;
        margin: 0px auto;
        float: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="panel panel-success">
        <div class="panel-heading">Download file</div>
        <div class="panel-body">
        	<br>
        	<br>
          <table class="table table-bordered table1">
            <thead>
              <tr class="w3-red">
                <th>File Name</th>
                <th>Action</th>
              </tr>
            </thead>
            @foreach($downloads as $x)
              <tr>
                <td>{{$x -> file_title}}</td>
                <td>
                  <a href="download/{{$x->file_name}}" download="{{$x->file_name}}"><button type="button" class="btn btn-primary btn-xs"> Download </button></a>
                </td>
              </tr>
            @endforeach
           </table>
        </div>
      </div>
      
    </div>
  </body>
</html> 
 