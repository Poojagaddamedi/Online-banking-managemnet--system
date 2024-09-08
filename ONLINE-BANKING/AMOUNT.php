<?php
include 'config1.php';
$message = '';
$type = '';
$popupClass = ''; // Variable to store the custom CSS class for the popup

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get form inputs and sanitize them
    $from = intval($_POST['from']);
    $to = intval($_POST['to']);
    $amount = floatval($_POST['amount']);

    // Fetch sender's details
    $sql = "SELECT * FROM cust WHERE id = $from";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        die("Query Failed: " . mysqli_error($conn));
    }
    $sql1 = mysqli_fetch_array($query);

    // Fetch receiver's details
    $sql = "SELECT * FROM cust WHERE id = $to";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        die("Query Failed: " . mysqli_error($conn));
    }
    $sql2 = mysqli_fetch_array($query);

    // Constraints
    if ($amount <= 0) {
        $message = "NO NEGATIVE BALANCE SHOULD TRANSFER!";
        $type = "error";
        $popupClass = "negative-popup"; // Set the class for negative transaction
    } elseif ($amount > $sql1['current bls']) {
        $message = "Insufficient Balance!";
        $type = "error";
        $popupClass = "negative1-popup"; // Set the class for insufficient balance transaction
    } else {
        // Deduct amount from sender's account
        $newbalance = $sql1['current bls'] - $amount;
        $sql = "UPDATE cust SET `current bls` = $newbalance WHERE id = $from";
        if (!mysqli_query($conn, $sql)) {
            die("Query Failed: " . mysqli_error($conn));
        }

        // Add amount to receiver's account
        $newbalance = $sql2['current bls'] + $amount;
        $sql = "UPDATE cust SET `current bls` = $newbalance WHERE id = $to";
        if (!mysqli_query($conn, $sql)) {
            die("Query Failed: " . mysqli_error($conn));
        }

        // Record the transaction
        $sender = $sql1['Customer name'];
        $receiver = $sql2['Customer name'];
        $sql = "INSERT INTO transactions(`Sender`, `Receiver`, `balance`) VALUES ('$sender', '$receiver', '$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            $message = "Transaction is Successful!";
            $type = "success";
            $popupClass = "success-popup"; // Set the class for successful transaction
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Money Transfer</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    body{
        font-family: montserrat;
        
    }
    nav{
        background: #0082e6;
        height: 80px;
        width: 100%;
    }
    label.logo{
        color: white;
        font-size: 35px;
        line-height: 80px;
        padding: 0 100px;
        font-weight: bold;
    }
    nav ul{
        float: right;
        line-height: 80px;
        margin: 0 5px;
    }
    nav ul li{
        display: inline-block;
        line-height: 80px;
        margin: 0 5px;
    }
    nav ul li a{
        color: aliceblue;
        font-size: 17px;
        margin-right: 30px;
        padding: 10px 20px;
        text-transform: uppercase;
    }
    a.active,a:hover{
        background-color: aqua;
        transition: .5s;
    }
    .checkbtn{
        font-size: 30px;
        color: white;
        float: right;
        line-height: 80px;
        margin-right: 40px;
        cursor: pointer;


    }
    #check{
        display: none;
    }
    @media (max-width:952px) {
        label.logo{
            font-size: 30px;
            padding-left: 50px;

        }
        nav ul li a{
            font-size: 16px;
        }
        
    }
    @media (max-width:858px){
        .checkbtn{
            display: block;
        }
        ul{
            position: fixed;
            width: 100%;
            height: 200px;
            background: #121212;
            top: 80px;
            transition: all 0.5s;
            left: -100%;
            padding: 15px;
            text-align: center;
        }
        nav ul li{
            display: block;
            margin: 15px 0;
            line-height: 30px;


        }
        nav ul li a{
            font-size: 20px;

        }
        a:hover,a.active{
            background: none;
            color: #0082e6
        }
        #check:checked~ul{
            left: 0;
            
        }

    }

    .negative-popup {
            background-image: url('s2.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .negative1-popup {
            background-image: url('s3.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .success-popup {
            background-image: url('s1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedan+SC&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedan+SC&display=swap');
*{
    box-sizing: border-box;

    
}
.footer{
    background-color: skyblue;
    max-width: 100%;
    margin: auto;
    padding: 5px 0;
    text-decoration: burlywood;
    
}
ul{
    list-style: none;
}
.row{
    display: flex;
    flex-wrap: wrap;

}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-family: "Poppins", sans-serif;
    font-weight: 900;
    font-style: normal;
    position: relative;
}
.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;


}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #bbbbbb;
    display: block;
    transition: all 0.3s ease;
}
.footer-col ul li a:hover{
    color: #ffffff;
   padding-left: 8px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255, 255, 255, 0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
color:#ffffff;
transition:  all 0.5s ease;


}
.footer-col .social-links a:hover{
    color: #24262b;
    background-color: white;
}
@media (max-width:767px) {
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
    
}
 

    </style>
</head>
<body style="background-color:pink"> 
<!--div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="th.jpg" width="50" height="50">
        </a>
        <div class="navbar-collapse collapse">
            <ul style="font-style: italic;" class="navbar nav mr-auto">
                <li style="font-size: large;" class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                <li style="font-size: large;" class="nav-item"><a class="nav-link active" href="contact.html">Contact us</a></li>
                <li style="font-size: large;" class="nav-item"><a class="nav-link" href="abou.html">About</a></li>
            </ul>
        </div>
        <form class="d-flex">
            <input class="form-control" type="search" placeholder="search">
            <button type="button">search</button>
        </form>
    </nav>
</div-->
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">BANKING SYSTEM</label>
            
        
    
    <ul>
        <li><a class="active" href="hm.html" >Home</a></li>
        <li><a href="ABOU.HTML">About</a></li>
        <li><a href="CC.html">Contact</a></li>
    </ul>
    </nav>
<div class="container">
    <h2 class="text-center pt-4" style="color: black;">Easy Money Transfer</h2>
    <form method="post" name="tcredit" class="tabletext"><br>
        <div>
            <label  class="col-sm-2 col-form-label" style="color: black;"><b>Transfer From:</b></label>
            <select name="from" class="form-control" required>
                <option value="" disabled selected>Choose account</option>
                <?php
                $sql = "SELECT * FROM cust";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo '<option class="table" value="' . htmlspecialchars($rows['id']) . '">' . htmlspecialchars($rows['Customer name']) . ' (Balance: ' . htmlspecialchars($rows['current bls']) . ')</option>';
                }
                ?>
            </select>
        </div>
        <br>
        <div>
            <label style="color: black;" class="col-sm-2 col-form-label"><b>Transfer To:</b></label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose account</option>
                <?php
                $sql = "SELECT * FROM cust";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo '<option class="table" value="' . htmlspecialchars($rows['id']) . '">' . htmlspecialchars($rows['Customer name']) . ' (Balance: ' . htmlspecialchars($rows['current bls']) . ')</option>';
                }
                ?>
            </select>
        </div>
        <br>
        <div>
            <label style="color: black;" class="col-sm-2 col-form-label"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
        </div>
        <br>
        <div class="text-center class="col-sm-10 col-md-10">
            <button class="btn btn-primary mt-3 offset-sm-2" name="submit" type="submit" id="myBtn">Transfer Money</button>
        </div>
    </form>
</div>
<div class="container-fluid">
    
   <div class="footer">
    <footer class="bg-dark text-white pt-5 pb-4">
      
            <div class="row">

                <div class="footer-col">
                    <h4>company</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order</a></li>
                </ul>
                </div>
                <div class="footer-col">
                    <h4> get started</h4>
                <ul>
                    <li><a href="#">about</a></li>
                    <li><a href="#"> our sevices</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#"> affilate program</a></li>
                </ul>
                </div>
                <div class="footer-col">
                    <h4>onlinesop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dresses</a></li>
                </ul>
                </div>
                <div class="footer-col">
                    <h4> follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i> </a>
                    <a href="#"><i class="fab fa-twitter"></i> </a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i> </a>
                    
                </div>
                </div>


                </div>
            </div>
</div>
        </footer>


<?php if (!empty($message)): ?>
<script type="text/javascript">
    Swal.fire({
        title: '<?= $message ?>',
        icon: '<?= $type ?>',
        customClass: {
            popup: '<?= $popupClass ?>' // Use the dynamic class here
        }
    });
</script>
<?php endif; ?>

</body>
</html>
