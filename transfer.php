<?php
@include 'connection.php';
?>
<?php
    $user=$_GET['user'];
    $email=$_GET['email'];
    $currunt_amount=$_GET['currunt_amount'];
?>
<?php
    if(isset($_POST['submit'])){
        $amount=$_POST['amount'];
        $TO=$_POST['TO'];
        
        if($currunt_amount<$amount){
            echo'<script> alert("Your blance is not enough")</script>';
        }
        else{
            $currunt_amount=$currunt_amount-$amount;
            
            $send_query="select current_amount from `customer` where name='$TO'";
            $send_execute=mysqli_query($con,$send_query);
            
            $receiver_balance=mysqli_fetch_assoc($send_execute);
            // $row=mysqli_fetch_assoc($result);
            // echo $row['name'];
            $receiver_amount=$receiver_balance['current_amount'];
            $receiver_amount=$receiver_amount+$amount;


            $add="insert into `transfer` (money_from,money_to,amount) values ('$user','$TO',$amount)";

            $update_balance_of_sender="UPDATE `customer` SET current_amount='$currunt_amount' WHERE name='$user'";

            $update_balance_of_receiver="UPDATE `customer` SET `current_amount`='$receiver_amount' WHERE name='$TO'";

            $execute_sender_balance=mysqli_query($con,$update_balance_of_sender);
            $execute_receiver_balance=mysqli_query($con,$update_balance_of_receiver);

            $execute=mysqli_query($con,$add);
            if($execute){
                //  echo'<script> confirm("Succcessfully Payed")</script>';
                
                header('location:customer.php');
            }

        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pay</title>
    <style>
        * {
            box-sizing: border-box;
        }
        header{
            margin:10px;
        }
        body {
            background-image: url(wallpapers/background.png);
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 50vh;
            border: 1px solid black;
        }

        .card {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 250px;
            background-color: transparent;
            box-shadow: 0px 0px 15px #ffffff6b, inset 0 0 15px #54545491;
        }
        .card button{
            border-radius: 10px;
            width: 130px;
        }
        .card label{
            font-size: 20px;
        }
        #option {
            width: 150px;
            background-color: transparent;
            outline: red;
            border: none;
            text-align: center;
            border-bottom: 2px solid black;
        }
        .card input{
            width: 200px;
            text-align: center;
            outline: red;
            border: none;
            border-bottom: 2px solid black;
        }
        .select{
            background-color: transparent;
            border:none;
            border-bottom:2px solid black;
            text-align: center;
        }
        .number{
            background-color: transparent;
            border:none;
            border-bottom:2px solid black;
            text-align: center;
        }
        .btn{
            margin:20px 30px;
        }
    
    </style>
</head>

<body>
    <header>
        <h4>Name : <?php echo "$user" ;?></h4>
        <h4>Email : <?php echo "$email" ;?></h4>
        <h4>Balance : <?php echo "$currunt_amount" ;?></h4>
        <hr>
    </header>
    <div class="main">
        <div class="card"> 

            <form action="" method="post">
                <label for="option">Send to</label>
                <select name="TO" id="" class='select'>
                    <!-- <option value="">select option</option>
                    <option value="dipti">dipti</option>
                    <option value="sarang">sarang</option>
                    <option value="nakul">nakul</option> -->
                    <?php
                    $sql_="SELECT name FROM customer;";
                    $result=mysqli_query($con,$sql_);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$row['name'];
                            echo"<option >$name</option>";
                        }
                    }
                    ?>
                </select>
                <br>

                    <input type="number" name="amount" id="" placeholder="Enter amount to pay" class="number">
                    <br>
                    
                    <!-- <button type="button" class="btn btn-success" name="Pay">Pay</button> -->
                    <button type="submit" class="btn btn-success " name="submit">Pay</button>
                    <!-- <input type="button" value="Pay" class="btn btn-success" placeholder="Pay" name="Pay"> -->

                </form>
            
        </div>
    </div>

</body>

</html>