<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Oefeningen</title>
</head>

<body onload="laad()">
    <table>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        
        <tbody id="tabelInhoudExcersizes"> </tbody>
    </table>

</body>

<script>
    "use strict"
    const apiBasis = "http://localhost:8000/api/"
    const apiExcersizes = apiBasis + "excersizes/"

//let functies = []
//let json = null

    const laadExcersizes = async () => {
       const respone = await axios.get(apiExcersizes, {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            }
       })

       if   (response.status != 200) {
            console.log("Er is iets fout gegaan")
            return
        }
        const response = await fetch(apiExcersizes)
        
        let tabelInhoud = ''
        json.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.Name}</td><td>${el.Description}</td><td>${el.Image}</td><td onclick="verwijder(${el.id})">x</td></tr>`)
        document.querySelector("#tabelInhoudExcersizes").innerHTML = tabelInhoud
       }
        /*
        const response = await fetch(apiExcersizes)
        console.log(response);
        const json = await response.data
        console.log(json)
       
       let tabelInhoud = ''
        json.map(el => tabelInhoud +=
            `<tr><td>${el.id}</td><td>${el.Name}</td><td>${el.Description}</td><td>${el.Image}</td><td onclick="verwijder(${el.id})">x</td></tr>`)
        document.querySelector("#tabelInhoudExcersizes").innerHTML = tabelInhoud*/
    

    const laad = async () => {
        laadExcersizes()
    }
</script>

</html>