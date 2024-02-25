<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH TABLE GENERATOR</title>
</head>
<body>

    <form class="inputBox" action="handler.php" method="post">

        <h3 style="color: #FF0063">ACTIVITY 8.0</h3>
        <br><br>

            <h3>Enter Number: </h3>
            <input type="number" name="number" placeholder="Number" required="required">

        <br>

            <h3>Enter Max Number: </h3>
            <input type="number" name="maxNumber" placeholder="Max Number" required="required">
        
            <input type="submit" value="GENERATE">

    </form>

    <!-- INTERNAL CSS -->

    <style>

        @font-face {
            font-family: font1;
            src: url(./medias/NTVALENTINO.otf);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: font1;
            background: #A7D2CB;
        }

        h3 {
            font-size: 35px;
            font-weight:1500;
            color: #80558C;
        }

        .inputBox {
            width: 400px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
            background: #EBC7E8;
            text-align: center;
            box-shadow: 5px 10px rgba(77, 231, 55, 0.3);
        }

        .inputBox input[type = "number"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3C2A21;
            border-radius: 24px;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: black;
            transition: 0.25s;
        }

        .inputBox input[type = "number"]:focus {
            width: 280px;
            border-color: #F65A83;
        }

        .inputBox input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #F65A83;
            border-radius: 24px;
            padding: 14px 40px;
            outline: none;
            color: black;
            transition: 0.25s;
            cursor: pointer;
        }

        .inputBox input[type="submit"]:hover {
            background: #A760FF;
        }

    </style>
    
</body>
</html>