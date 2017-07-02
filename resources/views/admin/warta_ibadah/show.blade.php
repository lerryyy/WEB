@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">warta_ibadah {{ $warta_ibadah->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/warta_ibadah') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/warta_ibadah/' . $warta_ibadah->id . '/edit') }}" title="Edit warta_ibadah"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/warta_ibadah', $warta_ibadah->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete warta_ibadah',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $warta_ibadah->id }}</td>
                                    </tr>
                                    <tr><th> Waktu </th><td> {{ $warta_ibadah->waktu }} </td></tr><tr><th> Title </th><td> {{ $warta_ibadah->title }} </td></tr><tr><th> Upload </th><td> {{ $warta_ibadah->upload }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
