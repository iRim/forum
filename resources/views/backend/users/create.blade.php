@extends('layouts.dashboard')

@section('content')

    {!! Form::model($model,['route'=>'backend.users.create']) !!}
        @include('backend.users._form')
        {!! Form::submit(__('messages.backend.users.buttons.create'), ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection


