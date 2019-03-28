<div class="list-group-item">
    <img src="{{ $user->gravatar() }}" class="mr-3" alt="" width="60px">
    <a href="{{ route('users.show', $user)}}" title="">
        {{ $user->name}}
    </a>
</div>
