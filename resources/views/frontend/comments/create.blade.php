@extends('layouts.dashboard')

@section('content')
    {!! Form::model($model,['id'=>'createComment']) !!}
        <div class="form-group">
            {!! Form::label('message', __('messages.frontend.comments.fields.message')) !!}
            {!! Form::textarea('message', $model->message, ['class'=>'form-control','placeholder'=>__('messages.frontend.comments.fields.message')]) !!}
        </div>
        {!! Form::submit(__('messages.frontend.comments.create.button'), ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! $validator->selector('#createComment') !!}
@endsection
