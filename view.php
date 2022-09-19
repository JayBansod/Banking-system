<?php

@include 'connection.php';
if(isset($_GET['user'])){
    $user=$_GET['user'];
    $email=$_GET['email'];
    $currunt_amount=$_GET['currunt_amount'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }
        body{
            background-image: url(wallpapers/background.png);
        }
        .table_body {
            display: flex;
            justify-content: center;
            justify-content: center;
            width: 100%;
            height: auto;
            position: absolute;
            top: 90px;
        }
        .tHeadMain{
            padding: 10px 20px;
            font-size: x-large;
            width: 100px;
            border: 1px solid black;
            border-radius: 10px;
        }
        .tHeadSub{
            width: 100px;
            height: 40px;
            border: 1px solid blue;
            border-radius: 10px;
        }
        .table_body button{
            width: 100px;
            height: 30px;
            border:none;
            font-size: 20px;
            background:none;
        }
        
        .table_body button a{
            text-decoration: none;
            transition: color 0.2s;
        }
        .table_body button a:hover{
            color: rgb(196, 21, 82);
        }
    </style>
</head>
<body>
    <p>Name :- <?php echo $user ?></p>
    <p>Email :- <?php echo $email ?></p>
    <p>Balance :- <?php echo $currunt_amount ?></p>
    <br><br>
    <div>
    <table class="table_body">
        <thead>
            <tr class="table_row">
                <th class="tHeadMain" >To</th>
                <th class="tHeadMain">From</th>
                <th class="tHeadMain">Amount</th>
            </tr>
            <?php
                // $dipti="dipti";
                $sql="select * from `transfer` where money_from ='$user' or money_to='$user'"  ;
                $result=mysqli_query($con,$sql);
                if($result){
                    // $row=mysqli_fetch_assoc($result);
                    // echo $row['name'];

                    while($row=mysqli_fetch_assoc($result)){
                        $money_from=$row['money_from'];
                        $money_to=$row['money_to'];
                        $amount=$row['amount'];
                        echo '
                        <tr>
                        <th class="tHeadSub" scope="col">'.$money_to.'</th>
                        <th class="tHeadSub" scope="col">'.$money_from.'</th>
                        <th class="tHeadSub" scope="col">'.$amount.'</th>
                        </tr>
                        ';
                    }
                }
            ?> 
           
        </thead>
    </table>
    </div>

</body>
</html>