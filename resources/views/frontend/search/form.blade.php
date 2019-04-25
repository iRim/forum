{!! Form::open(['route'=>'frontend.search', 'class' => 'w-100']) !!}

{!! Form::text('search', request()->post('search'), ['class'=>'form-control form-control-dark','placeholder'=>__('messages.frontend.search.title')]) !!}

{!! Form::close() !!}
