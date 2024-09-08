<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .banner-card{
            position: relative;
        }
        .row{
            padding: 20px;
        }
        .banner-card img{
            margin: 10px;
            padding: 10px;
            max-width: 100%;
            height: auto;
            float: left;
        }
        .banner-text{
            position: absolute;
            top: 25%;
            color: black;
            padding: 20px;

        }
        .banner-text h3{
            font-size: 26px;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 5px;
        }
         #box{
            width: 30%;
            background-color: pink;
            text-transform: capitalize;
            text-decoration: antiquewhite;
            padding: 20px;
            text-align: center;
            top: auto;
            float: left;
            margin-bottom: 20px;

            

        }
        #box1{
            width: 30%;
            background-color: pink;
            text-transform: capitalize;
            text-decoration: antiquewhite;
                padding: 20px;
            text-align: center;
            margin-top: 20px;
            top: auto;
            float: left;}


            #box2{
                width: 30%;
                background-color: pink;
                text-transform: capitalize;
                text-decoration: antiquewhite;
                padding: 20px;
                margin-top: 20px;
                text-align: center;
                top: auto;
                float: left;}
                #b{
                    position: absolute;
                   top: 80%;
                   left: 36%;
                   right: 25%;
                   bottom: 60%;
                   margin-top: 20px;
                   width: 30%;
                   background-color: black;

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

<body>
   <div class="header">
    <div class="container-fluid">

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

        
        </nav>

    <div class="row">
        <div class="banner-card">
            <img src="con.webp">
            <div class="banner-text">
                <h1>NEED  HELPP...?</h1>
                <h3>THIS Bank is for youu</h3>
            </div>

            <div id="box">
                <h1>EMAIL</h1>
                <p>gaddammedipoojaxyz@gmail.com</p>
                <h6>anytime available</h6>

            </div>
            <div id="box1">
                <h1>Address</h1>
                <p>SwitzerLand,Hyderbad,california</p>
                <h6>8527862368</h6>

            </div>
            <div id="box2">
                <h1>Department</h1>
                <p>EXCELLENT FACILIITIES</p>
                <h6>anytime available</h6>

            </div>
            <div id="b">
            <button class="btn btn-primary" style="float:right;"><a href="abou.html" style="color:white">MORE INFO</a></button></div>
    


           
        </div>

        <div id="chatbot" style="margin-top: 20px;">
                <h2>Chatbot Interaction</h2>
                <form method="post" id="chatbot-form">
                    <input type="text" name="user_input" placeholder="Ask the chatbot..." class="form-control" required>
                    <button type="submit" class="btn btn-primary mt-2">Send</button>
                </form>
                <div id="chatbot-response" class="mt-3"></div>
            </div>
    </div>

</div>
        


        

        </div>
    </div>
   </div>

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


                </div>
            </div>
        </div> 

    </footer></div>
    <script>
       document.getElementById('chatbot-form').addEventListener('submit', async function(event) {
           event.preventDefault();
           const userInput = document.querySelector('input[name="user_input"]').value;
           const responseDiv = document.getElementById('chatbot-response');

           try {
               const response = await fetch('http://localhost:5000/predict', {
                   method: 'POST',
                   headers: {
                       'Content-Type': 'application/json'
                   },
                   body: JSON.stringify({ message: userInput })
               });

               if (!response.ok) {
                   throw new Error('Network response was not ok');
               }

               const data = await response.json();
               responseDiv.innerHTML = `<div class='alert alert-success'>${data.answer}</div>`;
           } catch (error) {
               responseDiv.innerHTML = `<div class='alert alert-danger'>Error: ${error.message}</div>`;
           }
       });
   </script>

    
</body>




</html>

