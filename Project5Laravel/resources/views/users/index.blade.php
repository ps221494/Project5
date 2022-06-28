<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Users</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body onload="laad()">
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

</body>

<script>
    "use strict"
    const apiBasis = "http://localhost:8000/api/"
    const apiUsers = apiBasis + "users/"

    const laad = async () => {
        laadUsers()
    }

    const laadUsers = async () => {
        console.log('Laad users')

        const response = await axios.get(apiUsers, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })

        const json = await response.data
       // console.log(json);

        let tabelInhoud = ''
        json.data.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.name}</td><td>${el.email}</td><td>${el.password}</td><button onclick="verwijder(${el.id})">x</button></tr>`
            )
        document.querySelector("#tabelInhoudUsers").innerHTML = tabelInhoud

    }

    const verwijder = async (id) => {
        const response = await axios.delete(apiUsers + id, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
        })
        console.log(response)
        laad();
    }

</script>

</html>
