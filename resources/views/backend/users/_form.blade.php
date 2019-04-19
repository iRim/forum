<div class="form-group">
    {!! Form::label('last_name', __('messages.backend.users.fields.last_name')) !!}
    {!! Form::text('last_name', $model->last_name, [
        'class'=>'form-control',
        'id'=>'last_name',
        'placeholder'=>__('messages.backend.users.fields.last_name')
    ]) !!}
</div>

<div class="form-group">
    {!! Form::label('first_name', __('messages.backend.users.fields.first_name')) !!}
    {!! Form::text('first_name', $model->first_name, [
        'class'=>'form-control',
        'id'=>'first_name',
        'placeholder'=>__('messages.backend.users.fields.first_name')
    ]) !!}
</div>

<div class="form-group">
    {!! Form::label('email', __('messages.backend.users.fields.email')) !!}
    {!! Form::text('email', $model->email, [
        'class'=>'form-control',
        'id'=>'email',
        'placeholder'=>__('messages.backend.users.fields.email')
    ]) !!}
</div>


<div class="form-group form-check">
    <div class="form-check form-check-inline">
        {!! Form::radio('role','user',(empty($model->role) || $model->role=='user'), [
            'class'=>'form-check-input',
            'id'=>'role_user'
        ]) !!}
        {!! Form::label('role_user', __('messages.backend.users.fields.role_user'),['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check form-check-inline">
        {!! Form::radio('role','admin',$model->role=='admin', [
            'class'=>'form-check-input',
            'id'=>'role_admin'
        ]) !!}
        {!! Form::label('role_admin',__('messages.backend.users.fields.role_admin'),['class'=>'form-check-label']) !!}
    </div>
</div>

<div class="form-group form-check">
    <div class="form-check form-check-inline">
        {!! Form::radio('active',1,$model->active>0, [
            'class'=>'form-check-input',
            'id'=>'active_on'
        ]) !!}
        {!! Form::label('active_on', __('messages.backend.users.fields.active_on'),['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check form-check-inline">
        {!! Form::radio('active',0,$model->active<1, [
            'class'=>'form-check-input',
            'id'=>'active_off'
        ]) !!}
        {!! Form::label('active_off',__('messages.backend.users.fields.active_off'),['class'=>'form-check-label']) !!}
    </div>
</div>
