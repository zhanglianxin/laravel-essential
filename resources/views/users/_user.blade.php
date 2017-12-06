<li>
    <img src="{{ $user->avatar() }}" alt="{{ $user->name }}" class="avatar">
    <a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>
@can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">Delete</button>
    </form>
@endcan
</li>