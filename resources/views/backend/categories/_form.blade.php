<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', $model->title, [
        'class'=>'form-control',
        'id'=>'title',
        'placeholder'=>'Category title'
    ]) !!}
    <small class="form-text text-muted">Description for category title.</small>
</div>

<div class="form-group">
    {!! Form::label('description','Description') !!}
    {!! Form::textarea('description', $model->description, [
        'class'=>'form-control',
        'id'=>'description',
        'placeholder'=>'Category description'
    ]) !!}
    <small class="form-text text-muted">Description for category description.</small>
</div>

<div class="form-group form-check">
    <div class="form-check form-check-inline">
        {!! Form::radio('active',1,$model->active>0, [
            'class'=>'form-check-input',
            'id'=>'active_on'
        ]) !!}
        {!! Form::label('active_on', 'ON',['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check form-check-inline">
        {!! Form::radio('active',0,$model->active<1, [
            'class'=>'form-check-input',
            'id'=>'active_off'
        ]) !!}
        {!! Form::label('active_off', 'OFF',['class'=>'form-check-label']) !!}
    </div>
</div>
