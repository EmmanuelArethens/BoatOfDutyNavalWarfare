<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<table id="table2"> 

</table>
    <script>
        let table = document.querySelector('#table2');
                for (let i = 0; i < 10; i++) {
                    let row = document.createElement('tr');
                    table.appendChild(row);
                    for (let v = 0; v < 10; v++) {
                        let line = document.createElement('td');
                        row.appendChild(line);}}
    </script>
    <style>
   #table2 {
       border:1px solid black;
       height:600px;
       width:600px;

   }

   tr {

   }

   td {
       border:1px solid black;

   }
    </style>
</body>

</html>