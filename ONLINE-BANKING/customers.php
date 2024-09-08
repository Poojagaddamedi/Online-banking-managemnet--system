<?php
require_once('config1.php');
$query=" select * from cust";
$result=mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedan+SC&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedan+SC&display=swap');

*{
        padding: 0;
        margin: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    body{
        font-family: montserrat;
        background-color: pink;
        
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
</head><body>
<div>

        <!--nav class="navbar  navbar-expand-sm   bg-secondary navbar-dark ">
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

        
        </nav-->
        <nav>
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
    </div></body>
<body >
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-9 mt-4 text-center">CUSTOMERS DETAILS</h2>
                    </div>
                    <div class="card-body">
                        <table class="table responsive table-bordered text-center">
                            <tbody>
                            <tr class="table-dark text-white">
                            <td>id</td>
                                <td >Customer name</td>
                                <td>Account num</td>
                                <td>Acoount type</td>
                                <td>citizenship</td>
                                <td>Email</td>
                                <td>current balance</td>
                                
                            
                            </tr>
                           <tr>
                            <?php
                            while($row =mysqli_fetch_assoc($result))
                            {

                           
                            ?>
                              <td> <?php echo $row['id']?></td>

                            <td> <?php echo $row['Customer name']?></td>
                            <td> <?php echo $row['Account num']?></td>


                            <td> <?php echo $row['Account type']?></td>


                            <td> <?php echo $row['citizenship']?></td>


                            <td> <?php echo $row['E-mail']?></td>


                            <td> <?php echo $row['current bls']?></td>
                           
                           






                           </tr>
                           <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" style="margin-top: 10px;">
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


                </div>
            </div>
        </div> 

    </footer>
</div>

    

    
</body>
</html>