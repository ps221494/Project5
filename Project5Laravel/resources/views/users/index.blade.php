<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Users</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body onload="laad()" class="flex-col">
    <table>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </tr>
        <tbody id="tabelInhoudUsers" />
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.create') }}"> Create new user</a>
    </div>

    <div>
        <div class="form-login">
            @csrf
            <label for="email">Email</label>
            <input type="text" class="control-login" name="email" id="ipemail"/>
        </div>
        <div class="form-login">
            <label for="password">Password</label>
            <input type="text" class="control-login" name="password" id="ippwd"/>
        </div>
    </div>

</body>

<script>
    "use strict"
    const apiBasis = "http://localhost:8000/api/"
    const apiUsers = apiBasis + "users/"
    const apiLogin = apiBasis + "login"
    const laad = async () => {
        laadUsers()
    }

    const laadUsers = async () => {
        console.log('Laad users')
        try {
            const response = await axios.get(apiUsers, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            const json = await response.data
             const users = json.data;
            let tabelInhoud = ''
            users.map(el => tabelInhoud +=
                `<tr>
                <td>${el.id}</td>
                <td>${el.name}</td>
                <td>${el.email}</td>
                <td>${el.password}</td>
                <button class="btn btn-secondary" onclick="verwijder(${el.id})">x</button>
                <a class="btn btn-primary" href="edit/${el.id}">Edit</a>
            </tr>
            `
            )
            document.querySelector("#tabelInhoudUsers").innerHTML = tabelInhoud
        } catch (error) {
            console.log(error);
        }
    }
    const verwijder = async (id) => {

        const user = {}
            user.email = document.querySelector("#ipemail").value
            user.password = document.querySelector("#ippwd").value
        console.log(user)

        const login = await axios.post(apiLogin, user, { headers: { 'Content-Type': 'application/json' } })
        console.log (login.data.access_token)

        const token = await login.data.access_token

        console.log(token)

        const response = await axios.delete(apiUsers + id, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + token
            }
        })
        console.log(response)
        laad();
    }
</script>

</html>
