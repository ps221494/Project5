<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create Users</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body>
    <table>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
        </tr>
        <tbody id="tabelInhoudUsers" />
    </table>

    <form method="POST" action="{{ route('users.store') }}">
        <div class="form-user">
            @csrf
            <label for="name">Name</label>
            <input type="text" class="control-user" name="name"/>
        </div>
        <div class="form-user">
            <label for="email">Email</label>
            <input type="text" class="control-user" name="email"/>
        </div>
        <div class="form-user">
            <label for="password">Password</label>
            <input type="text" class="control-user" name="password"/>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

    {{-- <div class="pull-right">
        <a class="btn btn-primary" onclick="create()" href="{{ route('users.index') }}"> Create new user</a>
    </div> --}}

</body>

<script>
    "use strict"
    const apiBasis = "http://localhost:8000/api/"
    const apiUsers = apiBasis + "users/"

    const create = async () => {
        const response = await axios.create(apiUsers + id, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        console.log(response)
    }

</script>

</html>
