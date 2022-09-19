<?php
@include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body{
            background-color: violet;
        }
        .main {
            height: 30vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .name{
            text-align: center;
            width: 100%;
            height: 40vh;
            margin-top: 130px;
        }
        .name h3{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: 2000;
            font-size: 70px;
            -webkit-text-stroke: 2px;
            -webkit-text-fill-color: transparent;
        }
        button{
            background-color: antiquewhite;
            width: 250px;
            height: 50px;
            font-size: 25px;
            border: 2px solid black;
            border-radius: 30px;
            transition:0.5s;
        }
        
        .main a{
            text-decoration: none;
        }


        .btn{
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            font-weight: 400;
            background: #fff;
            color: #fe6d84;
            padding: 10px 30px;
            border-radius: 30px;
            margin: 30px 0 10px;
            transition: background 1s,font-size 1s;
            position: relative;
            box-shadow: 5px 10px 15px #b43ab7;
        }
        .btn:hover{
            font-size: 21px;
        }
        .btn::after{
            content: "";
            width: 0px;
            height: 100%;
            bottom: -0.1%;  
            left: 50%;
            transform: translate(-50%);      
            position: absolute;
            background: #fe6d84;
            transition: width  1s,height 1s;
            opacity: 0.3;
            border-radius: 30px;
        }
        
        .btn:hover::after{
            width: 90%;
            height: 100%;            
        }
    </style>
</head>

<body>
    <div class="name">
        <h3>Welcome to XY Bank</h3>
    </div>
    <div class="main">
        <form action="customer.php" method="post">
            <button class="btn"><a href="customer.php">View all Customers</a> </button>
        </form>
        
    </div>

    <script>

    </script>
</body>

</html>