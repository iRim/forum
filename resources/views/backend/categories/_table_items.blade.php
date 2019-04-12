<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->title }}</td>
    <td>{{ $category->author_id }}</td>
    <td class="text-center">{{ $category->created_at }}</td>
    <td><span data-feather="{{ $category->active>0?'pause':'play' }}"></span></td>
    <td>
        <div class="btn-group btn-group-sm" role="group">
            <a href="{{ route('backend.categories.edit',$category->id) }}" class="btn btn-warning">
                <span data-feather="edit"></span>
                Edit
            </a>
            <a href="{{ route('backend.categories.delete',$category->id) }}" class="btn btn-danger">
                <span data-feather="delete"></span>
                Delete
            </a>
        </div>
    </td>
</tr>
