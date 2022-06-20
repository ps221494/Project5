<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Oefeningen</title>
</head>

<body onload="laadExcersizes()">
    <table>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        <tbody id="tabelInhoudExcersizes" />
    </table>

</body>

<script>
    "use strict"
    const apiBasis = ""
    const apiExcersizes = apiBasis + "excersizes/"

    const laadExcersizes = async () => {
        console.log('Laad gegevens')
        //const response = await fetch(apiGebruikers)
        //const json = await response.json()
        const response = await axios.get(apiExcersizes)
        const json = await response.data
        let tabelInhoud = ''
        json.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.Name}</td><td>${el.Description}</td><td>${el.Image}</td><td onclick="verwijder(${el.id})">x</td></tr>`
            )
        document.querySelector("#tabelInhoudExcersizes").innerHTML = tabelInhoud

    }
</script>

</html>