<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Transfer History</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    </style>
</head>

<body>
<!--div class="container-fluid">

        <nav class="navbar  navbar-expand-sm   bg-secondary navbar-dark ">
            <a class="navbar-brand href=#">
                <img src="th.jpg" width="50" height="50">
            </a>
            <div class="navbar-collapse collapse">
                
                <ul style="font-style: italic;" class="navbar nav mr-auto ">
                    <li  style="font-size: large";class="nav-item"><a class="nav-link" href="home.html">Home</a></li>
                    <li  style="font-size: large";class="nav-item"><a class="nav-link active" href="contact.html">Contact us</a></li>
                    <li  style="font-size: large"; class="nav-item"><a class="nav-link" href="abou.html">About</a></li>
                </ul>
            </div>
            <form class="d-flex">
                <input class="form-control" type="search" placeholder="search">
                <button type="button">search</button>
            </div>

        
        </nav></div--> <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">BANKING SYSTEM</label>
            
        
    
    <ul>
        <li><a class="active" href="hm.html" >Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="CC.html">Contact</a></li>
    </ul>
    </nav>
    </body>
<body>
<div class="container-fluid">
        <h2 class="text-center pt-4" style="color : white;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
        <h1 style="text-align: center;">TRANSACTION HISTORY DETAILS</h1>
    <table class="table table-hover table-striped table-condensed table-bordered">
    <div class="table-responsive mx-auto" style="width: fit-content;">
        <thead style="color : black;">
            <tr class="table-dark text-white">
                <th class="text-center">Sno</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">DateTime</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config1.php';

            $sql ="select * from transactions";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;" class="table-success">
            <td class="py-2"><?php echo $rows['Sno']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['Datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody></div>
    </table>

    </div>
</div>
<div class="container-fluid">
<div class="footer">
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
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


                </div></div>
            </div>
        </div> 

    </footer>
</div>

    
</body>
</html>