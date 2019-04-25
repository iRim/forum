<hr>
<div class="media">
    <svg class="bd-placeholder-img mr-3" width="64" height="64" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 64x64"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">64x64</text></svg>
    <div class="media-body">
        <h5 class="mt-0">{{ $comment->user->fullName() }}</h5>
        {{ $comment->message }}
        @if ($comment->files->count()>0)
            <div class="row">
                @foreach ($comment->files as $file)
                    <div class="col-sm-2">
                        <a href="/upload/{{ $file->file }}" target="blank">
                            <img src="/upload/{{ $file->file }}" class="img-thumbnail">
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
        <p class="text-right">{{ (new DateTime($comment->created_at))->format('d.m.Y H:i') }}</p>
    </div>
</div>
