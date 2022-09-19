
<!-- connecting to database -->
<?php
@include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    
    <style>
        *{
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align:center;
        }
        body{
            background-image: url(wallpapers/background.png);
        }
        .table_body {
            display: flex;
            justify-content: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            position: absolute;
            top: 50px;
        }
        .tHeadMain{
            padding: 10px 20px;
            font-size: x-large;
            width: 100px;
            border: 1px solid black;
            border-radius: 10px;
        }
        .tHeadSub{
            width: 120px;
            height: 40px;
            border: 1px solid black;
            border-radius: 10px;
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
            margin: 20px 0 10px;
            transition: background 1s,font-size 1s;
            position: relative;
            box-shadow: 5px 10px 15px #b43ab7;
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
        .tHeadSub a{
            display:block;
        }
        .bt{
            background-color: transparent;
            border: none;
        }
    </style>
</head>

<body>
    
    <!-- Table starts here -->
    <table class="table_body">
        <thead>
            <tr class="table_row">
                <th class="tHeadMain" >Sr no</th>
                <th class="tHeadMain" >Name</th>
                <th class="tHeadMain">Email</th>
                <th class="tHeadMain">Balance</th>
                <th class="tHeadMain">Transfer</th>
                <th class="tHeadMain">View Details</th>
            </tr>
        </div>

            <?php
                $temp="temp";
                $sql="select * from `customer`"  ;
                $result=mysqli_query($con,$sql);
                if($result){
                    
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $currunt_amount=$row['current_amount'];
                        echo '
                        <tr>
                        <th class="tHeadSub" scope="col">'.$id.'</th>
                        <th class="tHeadSub" scope="col">'.$name.'</th>
                        <th class="tHeadSub" scope="col">'.$email.'</th>
                        <th class="tHeadSub" scope="col">'.$currunt_amount.'</th>
                        <form action="transfer.php" name="id">
                            <th class="tHeadSub">
                                <button class="bt"><a class="btn" href="transfer.php?user='.$name.'&email='.$email.'&currunt_amount='.$currunt_amount.'">Pay</a></button>
                            </th> 
                        
                        
                            <th class="tHeadSub">
                                <button class="bt" ><a class="btn" href="view.php?user='.$name.'&email='.$email.'&currunt_amount='.$currunt_amount.'">View</a></button>
                            </th> 
                        </form>
                        </tr>
                        ';
                    }
                }
            ?> 
           
        </thead>
    </table>
           
   
</body>

</html>