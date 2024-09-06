<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynik</title>
    <style>
        #kartka {
            width: 400px;
            height: 200px;
            background-color: aliceblue;
            text-align: left;
            margin: auto;
            margin-top: 100px;
            border: solid black 3px;
        }
        a1,a2 {
            font-size: 20px;
            display: flex;
            text-align: center;
            margin-top: 5px;
            margin-left: 20px;
            font-weight: bold;
        }
        a1 {
            margin-top: 10px;
        }
        a {
            margin-left: 20px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div id="kartka">

        <a1> <?php echo $_POST["imie"]; ?></a1> 
        <a2> <?php echo $_POST["nazwisko"]; ?></a2> <br>
        <br>
        <a> Adres Zamieszkania: <?php echo $_POST["adres"]; ?><br></a> 
        <a> Nr Telefonu: <?php echo $_POST["numer"]; ?><br></a> 
        <a> E-mail: <?php echo $_POST["email"]; ?><br></a> 
        <a> Płeć: <?php echo $_POST["plec"]; ?><br></a> 
           
    </div>
</body>
</html>
