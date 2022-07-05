<form method="POST" action="{{ route('users.update', $id->id) }}">
    <div class="form-user">
        @csrf
        @method("PATCH")
        <label for="name">Name</label>
        <input type="text" class="control-user" name="name" value="{{$id -> name}}"/>
    </div>
    <div class="form-user">
        <label for="email">Email</label>
        <input type="text" class="control-user" name="email" value="{{$id -> email}}"/>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
