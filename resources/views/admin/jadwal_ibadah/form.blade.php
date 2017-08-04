<div class="form-group {{ $errors->has('pelayan_firman') ? 'has-error' : ''}}">
    {!! Form::label('pelayan_firman', 'Pelayan Firman', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pelayan_firman', null, ['class' => 'form-control']) !!}
        {!! $errors->first('pelayan_firman', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('waktu') ? 'has-error' : ''}}">
    {!! Form::label('waktu', 'Waktu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">

<input type="text" name="daterange" id="waktu" value="01/01/2015 - 01/31/2015" />
<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script>

    </div>
</div>

<div class="form-group {{ $errors->has('ibadah') ? 'has-error' : ''}}">
    {!! Form::label('ibadah', 'Ibadah', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ibadah', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ibadah', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('upload') ? 'has-error' : ''}}">
    {!! Form::label('upload', 'Upload', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('upload', null, ['class' => 'form-control']) !!}
        {!! $errors->first('upload', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('user_id', Auth::id(), ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
