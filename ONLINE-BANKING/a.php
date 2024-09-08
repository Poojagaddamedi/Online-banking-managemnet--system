<?php
include 'config1.php';

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

     //Constraints
    if ($amount <= 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Negative or zero values cannot be transferred")';
        echo '</script>';
       
        
    } elseif ($amount > $sql1['current bls']) {
        echo '<script type="text/javascript">';
        echo 'alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
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
            echo "<script> alert('Hurray! Transaction is Successful'); window.location='History.php'; </script>";
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:aliceblue"> 
<div class="container-fluid">
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
</div>
<div class="container">
    <h2 class="text-center pt-4" style="color: black;">Easy Money Transfer</h2>
    <form method="post" name="tcredit" class="tabletext"><br>
        <div>
            <label style="color: black;"><b>Transfer From:</b></label>
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
            <label style="color: black;"><b>Transfer To:</b></label>
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
            <label style="color: black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
        </div>
        <br>
        <div class="text-center">
            <button class="btn mt-3" name="submit" type="submit" id="myBtn">Transfer Money</button>
        </div>
    </form>
</div>
</body>
</html>
