<div class="form-group">
    {!! Form::label('title', __('messages.backend.categories.fields.title')) !!}
    {!! Form::text('title', $model->title, [
        'class'=>'form-control',
        'id'=>'title',
        'placeholder'=>__('messages.backend.categories.fields.title')
    ]) !!}
    <small class="form-text text-muted">{{ __('messages.backend.categories.descriptions.title') }}</small>
</div>

<div class="form-group">
    {!! Form::label('description',__('messages.backend.categories.fields.description')) !!}
    {!! Form::textarea('description', $model->description, [
        'class'=>'form-control',
        'id'=>'description',
        'placeholder'=>__('messages.backend.categories.fields.description')
    ]) !!}
    <small class="form-text text-muted">{{ __('messages.backend.categories.descriptions.description') }}</small>
</div>

<div class="form-group form-check">
    <div class="form-check form-check-inline">
        {!! Form::radio('active',1,$model->active>0, [
            'class'=>'form-check-input',
            'id'=>'active_on'
        ]) !!}
        {!! Form::label('active_on', __('messages.backend.categories.fields.active_on'),['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check form-check-inline">
        {!! Form::radio('active',0,$model->active<1, [
            'class'=>'form-check-input',
            'id'=>'active_off'
        ]) !!}
        {!! Form::label('active_off',__('messages.backend.categories.fields.active_off'),['class'=>'form-check-label']) !!}
    </div>
</div>
