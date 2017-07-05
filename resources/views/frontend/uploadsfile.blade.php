@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="row">
@include('admin.sidebar')
 <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New article</div>
                    <div class="panel-body">
<div class="container">
{!! Form::open(array('url'=>'insertfile','method'=>'POST','class'=>'form-horizontal','files'=>true)) !!} 


    <div class="form-group"> 
      <div class="col-md-6">
      <label for="name">Title</label>
      <input type="text" name="file_title" class="form-control file_title_c" id="file_title_id" value="{{ Input::old('file_title') }}">
    @if ($errors->has('file_title'))<p class="help-block">{{$errors->first('file_title')}}</p>@endif
    </div>
  </div>

    <div class="form-group">
      <div class="col-md-6">
       <label for="upload">upload</label>
      <input type="file" class="filename" name="filenam">
      @if ($errors->has('filenam'))<p class="help-block">{{$errors->first('filenam')}}</p>@endif
    </div>
      </div>

     <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
{!! Form::close()!!}
</div>
</div>
</div>
</div>
<script>
@if(Session::has('message'))
var type="{{Session::get('alert-type','info')}}";
switch(type){

  case 'succes':
  toastr.success("{{Session::get('message')}}");
  break;
  case 'error':
  toastr.error("{{Session::get('message')}}");
  break;
}

@endif
@endsection
</script>

</body>
</html>
