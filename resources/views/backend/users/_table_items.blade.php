<tr>
    <td>{{ $user->id }}</td>
    <td class="text-center">{{ $user->first_name }}</td>
    <td class="text-center">{{ $user->last_name }}</td>
    <td class="text-center">{{ $user->email }}</td>
    <td class="text-center">{{ $user->role }}</td>
    <td class="text-center"><span data-feather="{{ $user->active>0?'pause':'play' }}"></span></td>
    <td>
        <div class="btn-group btn-group-sm" role="group">
            <a href="{{ route('backend.users.edit',$user->id) }}" class="btn btn-warning">
                <span data-feather="edit"></span>
                Edit
            </a>
            <span class="btn btn-danger">
                    <span data-feather="delete"></span>
                    Delete
                {!! Form::open(['route'=>['backend.users.delete',$user->id]]) !!}
                    @method('DELETE')
                {!! Form::close() !!}
            </span>
        </div>
    </td>
</tr>
