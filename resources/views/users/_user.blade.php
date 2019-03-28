<div class="list-group-item">
    <img src="{{ $user->gravatar() }}" class="mr-3" alt="" width="60px">
    <a href="{{ route('users.show', $user)}}" title="">
        {{ $user->name}}
    </a>

    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user->id ) }}" method="POST" class="float-right">
            {{ csrf_field() }}
            {{ method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>
