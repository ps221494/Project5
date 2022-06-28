<form method="POST" action="{{ route('users.update', $user->id) }}">
    <div class="form-user">
        @csrf
        @method("PATCH")
        <label for="name">Name</label>
        <input type="text" class="control-user" name="name" value="{{$user -> name}}"/>
    </div>
    <div class="form-user">
        <label for="email">Email</label>
        <input type="text" class="control-user" name="email" value="{{$user -> email}}"/>
    </div>
    <div class="form-user">
        <label for="password">Password</label>
        <input type="text" class="control-user" name="password" value="{{$user -> password}}"/>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
