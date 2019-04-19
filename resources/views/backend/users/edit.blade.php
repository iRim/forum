@extends('layouts.dashboard')

@section('content')

    {!! Form::model($model,['route'=>['backend.users.edit',$model->id]]) !!}
        @include('backend.users._form')
        {!! Form::submit('Edit user', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
