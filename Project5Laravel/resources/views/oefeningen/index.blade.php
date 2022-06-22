<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Oefeningen</title>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>

<body onload="laad()">
    <table>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">verwijder</th>
        </tr>

        <tbody id="tabelInhoudExcersizes"> </tbody>
    </table>

</body>

<script>
    "use strict"
<<<<<<< HEAD
=======
<<<<<<< HEAD
    const apiBasis = "http://127.0.0.1:8000/api/excersizes"
=======
>>>>>>> 982a9e7877e83856a9cebb2dcdfe74f3b05451de
>>>>>>> ccb19d09be968b2da7904a1727f20a1840d5ca19
    const apiBasis = "http://localhost:8000/api/"
    const apiExcersizes = apiBasis + "excersizes/"

  //  const axios = require('axios');
//let functies = []
//let json = null

    const laadExcersizes = async () => {

       const response = await axios.get(apiExcersizes, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
       })

       console.log('response', response)
       if (response.status != 200) {
			alert(`Fout bij het lezen van de functies: ${response.status} (${response.statusText})`)
			return
		}
       const json = await response.data
        console.log(json)

        let tabelInhoud = ''
        json.data.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.Name}</td><td>${el.Description}</td><td>${el.Image}</td><button onclick="verwijder(${el.id})">x</button></tr>`)
        document.querySelector("#tabelInhoudExcersizes").innerHTML = tabelInhoud
       }
<<<<<<< HEAD
        /*
        const response = await fetch(apiExcersizes)
        console.log(response);
        const json = await response.data
        console.log(json)

       let tabelInhoud = ''
        json.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.Name}</td><td>${el.Description}</td><td>${el.Image}</td><td onclick="verwijder(${el.id})">x</td></tr>`)
        document.querySelector("#tabelInhoudExcersizes").innerHTML = tabelInhoud*/

=======
>>>>>>> ccb19d09be968b2da7904a1727f20a1840d5ca19

    const laad = async () => {
        laadExcersizes()
    }

    const verwijder = async (id) => {
        const response = await axios.delete(apiExcersizes + id, {
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
