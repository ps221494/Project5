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

<body onload="laadUsers()">
    <table>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
        </tr>
        <tbody id="tabelInhoudUsers" />
    </table>

</body>

<script>
    "use strict"
    const apiBasis = "http://localhost:8000/api/"
    const apiUsers = apiBasis + "users/"

    const laadUsers = async () => {
        console.log('Laad users')
        //const response = await fetch(apiGebruikers)
        //const json = await response.json()
        const response = await axios.get(apiUsers)
        const json = await response.data
        let tabelInhoud = ''
        json.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.Name}</td><td onclick="verwijder(${el.id})">x</td></tr>`
            )
        document.querySelector("#tabelInhoudUsers").innerHTML = tabelInhoud

    }
</script>

</html>
