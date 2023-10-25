
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Ticket Booking System</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- CSS -->
    <style>
    body, html{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    scroll-behavior: smooth;
    }

    *, *::after, *::before{
        box-sizing: inherit;
    }
    .link-light{
        text-decoration: none;
    }

    .searchQuery{
        position: relative;
    }

    .sugg{
        position: absolute;
        width: 100%;
        z-index: 1;
        background-color: white;
        max-height: 179px;
        overflow: auto;
    }

    .sugg li{
        list-style-type: none;
        padding: 0;
        text-align: left;
        padding: 0.3rem;
        text-transform: capitalize;
        border-style: solid; 
        border-color: black;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
    }

    .sugg li:hover{
        background-color: #efefef;
        cursor: pointer;
    }


    .hl{
        background-color: #ddbea9;
    }


    #center_box{
        display: flex;
        content-align: center;
        justify-content: middle;
    }

    /* Overriding Bootstrap */

    nav a:hover{
        color: black;
    }
    nav{
        text-align: center;
        padding: 1.5rem 0;
    }

    nav div, nav ul{
        margin-top: 1rem;
    }

    nav div:first-child{
        margin-top: 0;
    }

    nav > div a{
        display: block;
    }

    nav ul{
        list-style-type: none;
        padding: 0;
        margin-bottom: 0;
    }

    nav a{
        padding-bottom: 0.2rem;
        text-decoration: none;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
    }

    nav a:not(.nav-logo):hover{
        text-decoration: underline;
    }

    .nav-logo{
        color: #D65238;
        letter-spacing: 5px;
        transition: none;
    }

.admin {
 padding: 0.5rem 0.5rem;
 border-radius: 4px;
 border: 0;
 background-color: white;
 box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
 letter-spacing: 1.5px;
 text-transform: uppercase;
 font-size: 15px;
 transition: all .5s ease;
}

.admin:hover {
 letter-spacing: 3px;
 background-color: #ff0000;
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(255 0 0) 0px 7px 29px 0px;
}

.admin:active {
 letter-spacing: 3px;
 background-color: #ff0000;
 color: hsl(0, 0%, 100%);
 box-shadow: rgb(255 0 0) 0px 0px 0px 0px;
 transform: translateY(10px);
 transition: 100ms;
}


    /* Alert Message on top of the header */
    .alert{
        z-index: 3;
        border-radius: 0px;
    }
    
    .btn-danger {
        color: #fff;
        background-color: #D7263D;
        border-color: #D81E5B;
    }

    .btn-primary {
        color: #fff;
        background-color: #0197F6;
        border-color: #C6D8D3;
    }

    #footercl{
        background-color: #E5CAA360;
    }

    #home{
        height: 70vh;
        background-image: url("assets/img/sample1.png");
        background-size: cover;
        background-position: 0% 65%;;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #nav{
        background-color: #E5CAA360;
        border-radius: 1rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: 3;
        backdrop-filter: blur(8px);
    }

    #route-search-form{
        width: 50%;
        padding: 1rem 0.5rem;
        color: black;
        position: relative;
        z-index: 1;
    }

    #route-search-form::before{
        content: "";
        position: absolute;
        top: 0%;
        left: 0%;
        height: 100%;
        width: 100%;
        background-color: #EAE2B760;
        backdrop-filter: blur(4px);
        z-index: -1;
        border-radius: 1rem; 
    }


    #route-search-form h1{
        margin-top: 0;
        text-align: center;
        color: black;
    }

    form{
        padding: 0 0.5rem;
        font-weight: bold;
    }

    #route-search-form > div{
        margin: 1rem 0;
    }

    form input, form textarea{
        border: 2px solid black;
        outline: none;
        width: 100%;
        font-size: inherit;
        border-radius: 5px;
        padding-left: 0.3rem;
    }


    #route-search-form form input{
        margin-top: 0.8rem;
    }


    #route-search-form form div:last-child{
        text-align: center;
    }

    form button{ 
        border:2px solid;
        padding: 0.3rem 0.7rem;
        font-weight: bolder;
        background-color: #ffffff80;
        transition: background-color 800ms, color 800ms;
        border-radius: 4px;
    }


    form button:hover{
        background-color: #fff;
        color: #201E22;
        cursor: pointer;
    }

    #info-num{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        backdrop-filter: blur(4px);
        background-color: #68C5DB30;
        border-radius: 1rem;
    }

    #info-num figure{
        flex-basis: 30%;
        padding: 2rem 0;
        text-align: center;
        border-radius: 5px;
    }

    #info-num figcaption{
        margin-top: 1rem;
        text-transform: uppercase;
    }

    #info-num .num{
        display: block;
        margin-bottom: 0.3rem;
        font-size: 1.2rem;
        font-weight: 800;
    }

    #pnr-enquiry{
        height: 80vh;
        background-image: url("assets/img/sample3.png");
        background-size: cover;
        background-position: 50% 50%;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        scroll-margin-top: 200px;
    }

    #pnr-form{
        padding: 4rem 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
        z-index: 1; 
    }

    #pnr-form form{
        width: 70%;
    }

    #pnr-form input{
        width: 100%;
    }

    #pnr-form::before{
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0%;
        background-color: black;
        border-radius: 1rem;
        z-index: -1;
        opacity: 0.5;
    }

    #pnr-form div{
        margin: 1rem auto;
        width: 90%;
    }

    #pnr-form button{
        font-weight: bold;
        font-size: 14px;
        padding: 0.3rem 0.7rem;
        text-transform: uppercase;
        border: 3px solid;
        border-radius: 5px;
        color: #212529;
        background-color: #CCD3DD;
        transition: background-color 400ms;
    }

    #pnr-form button:hover{
        background-color: #ebecee;
        cursor: pointer;
    }

    #about{
        scroll-margin-top: 170px;
        text-align: center;
        padding: 3rem 0;
        background-color: #e5e5e5;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 1rem;
    }

    #about h1{
        margin: 0;
    }

    #about p{
        line-height: 26px;
    }

    #contact{
        scroll-margin-top: 20px;
        background-color: black;
        color: white;
        padding: 3rem 0;
    }

    #contact-form{
        width: 60%;
        margin: 0 auto;
    }
    #contact-form h1{
        margin-top: 0;
        text-align: center;
    }

    #contact-form label{
        display: block;
        margin-bottom: 1rem;
    }

    #contact-form div{
        margin-top: 1rem;
    }


    footer{
        padding: 1rem 0;
        text-align: center;
        font-weight: bold;
    }

    footer p{
        margin: 0;
    }

    .pnr-details{
        list-style-type: none;
        padding: 0;
    }

    .nav-scroll{
        position: fixed;
        background-color: #E5CAA3A0;
        border-radius: 1rem;
    }

    .modal-content{
        transform: translate(0, 30%);
    }

    .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;  
}

.content {
    pointer-events: auto;
    background-clip: padding-box; 
    position: relative;
    display: flex;
    flex-direction: column;
    width: 330px;
    padding: 40px 30px;
    background: #dde1e7;
    border-radius: 10px;
    box-shadow: -3px -3px 7px #ffffff73,2px 2px 5px rgba(94,104,121,0.288);
    outline: 0;
}

.content .text {
  font-size: 33px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #595959;
}

.field {
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field:nth-child(2) {
  margin-top: 20px;
}

.field .input {
  height: 100%;
  width: 100%;
  padding-left: 45px;
  outline: none;
  border: none;
  font-size: 18px;
  background: #dde1e7;
  color: #595959;
  border-radius: 25px;
  box-shadow: inset 2px 2px 5px #BABECC,
              inset -5px -5px 10px #ffffff73;
}

.field .input:focus {
  box-shadow: inset 1px 1px 2px #BABECC,
              inset -1px -1px 2px #ffffff73;
}

.field .span {
  position: absolute;
  color: #595959;
  width: 50px;
  line-height: 55px;
}

.field .label {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 45px;
  pointer-events: none;
  color: #666666;
}

.field .input:valid ~ label {
  opacity: 0;
}

.forgot-pass {
  text-align: left;
  margin: 10px 0 10px 5px;
}

.forgot-pass a {
  font-size: 16px;
  color: #666666;
  text-decoration: none;
}

.forgot-pass:hover a {
  text-decoration: underline;
}

.button {
  margin: 15px 0;
  width: 100%;
  height: 50px;
  font-size: 18px;
  line-height: 50px;
  font-weight: 600;
  background: #dde1e7;
  border-radius: 25px;
  border: none;
  outline: none;
  cursor: pointer;
  color: #595959;
  box-shadow: 2px 2px 5px #BABECC,
             -5px -5px 10px #ffffff73;
}

.button:focus {
  color: #3498db;
  box-shadow: inset 2px 2px 5px #BABECC,
             inset -5px -5px 10px #ffffff73;
}

.sign-up {
  margin: 10px 0;
  color: #595959;
  font-size: 16px;
}

.sign-up a {
  color: #3498db;
  text-decoration: none;
}

.sign-up a:hover {
  text-decoration: underline;
}


.input {
  color: #000;
  font-size: 0.9rem;
  background-color: transparent;
  width: 100%;
  box-sizing: border-box;
  padding-inline: 0.5em;
  padding-block: 0.7em;
  border: none;
  border-bottom: var(--border-height) solid var(--border-before-color);
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.input-border {
  position: absolute;
  background: var(--border-after-color);
  width: 0%;
  height: 2px;
  bottom: 0;
  left: 0;
  transition: width 0.3s cubic-bezier(0.6, -0.28, 0.735, 0.045);
}

.input:focus {
  outline: none;
}

.input:focus + .input-border {
  width: 100%;
}

.form-control {
  position: relative;
  padding: 0rem 0rem;
  border: 0px;
}

.input-alt {
  font-size: 1.2rem;
  padding-inline: 1em;
  padding-block: 0.8em;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.input-border-alt {
  height: 3px;
  background: linear-gradient(90deg, #FF6464 0%, #FFBF59 50%, #47C9FF 100%);
  transition: width 0.4s cubic-bezier(0.42, 0, 0.58, 1.00);
}

.input-alt:focus + .input-border-alt {
  width: 100%;
}

    /* Tablet */
    @media only screen and (min-width: 784px){
        

        header{
            position: absolute;
            display: block;
            top: 0;
            width: 100%;
            z-index: 2;
            transition: background-color 500ms;
        }
        nav{
            top: 28%;
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin: 0%;
            padding: 0%;
        }

        nav > div{
            display: flex;
            align-items: center;
            flex-grow: 1;
            justify-content: center;
        }

        nav ul{
            display: flex;
            flex-grow: 1;
            justify-content: center;
        }

        nav div, nav ul{
            margin-top: 0;
        }
        
        nav a{
            border-bottom: 2px solid transparent;
            margin: 0 1rem;
            transition: border-color 800ms;
            border-radius: 2px;
        }

        nav a:not(.nav-logo):hover{
            border-color: black;
            text-decoration: none;
        }

        #home{
            height: 100vh;
            background-position: 40% 65%;
            background-attachment: fixed;
            display: block;
        }

            
        #route-search-form{
            position: absolute;
            top: 28%;
            right: 10%;
            width: 20rem;
            padding: 1rem 2rem;
                      
        }


        #route-search-form h1{
            margin-top: 0;
            text-align: center;
        }

        form{
            padding: 0 0.5rem;
            font-weight: bold;
        }

        #route-search-form form > div{
            margin: 1rem 0;
        }

        #block{
            width: 100%;
        }


    }


    /* Desktops */
    @media only screen and (min-width: 992px){
        /* Alert Message on top of the header */
        .alert{
            position: absolute;
            width: 100%;
            z-index: 3;
            border-radius: 0px;
        }

        .alert-dark{
            width: 50%;
            left: 50%;
            transform: translateX(-50%);
            border-radius:;
        }

        nav{
            width: 100%;
        }

        #home{
            background-position: 60% 65%;
        }


        #route-search-form{
            position: relative;
            top: 20%;
            right: -21%;
            width: 60rem;
            padding: 2.5rem 2rem;
        }

        #block{
            width: 100%;
            margin: 0 auto;
        }

        #info-num figure{
            flex-basis: 15%;
        }

        #pnr-enquiry{
            height: 50vh;
        }

        #pnr-form{
            width: 50%;
            backdrop-filter: blur(4px);
        }

        #about{
            height: auto;
            padding: 2rem;
            border-radius: 1rem;
            
        }
        #about div{
            width:50%;
        }

        #contact-form{
            width: 438px;
            margin: 0 auto;
        }
    }
</style></head>
<body>
    
    
    <header>
        <nav>
        <div id="nav" line-height="3">
            <div>
                <a href="#" class="nav-item nav-logo">MSRTC</a>
            </div>
            <ul>
                <li style="color: transparent;">___________________</li>
                <li><a href="#" class="nav-item">Home</a></li>
                <li><a href="#about" class="nav-item">About</a></li>
                <li><a href="#contact" class="nav-item">Contact</a></li>
            </ul>
            <div>
                <div style="display: inline-block;">
                    <a href="#" class="login nav-item" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="fas fa-sign-in-alt" style="margin-right: 0.4rem;"></i>Login</a>
                </div>
                <div style="display: inline-block;">
                    <a href="#pnr-enquiry" class="pnr nav-item">PNR Enquiry</a>
                </div>
            </div>
        </div>
    </nav>

    </header>
    <!-- Login Modal -->
    <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login As Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="assets/partials/_handleLogin.php" method="POST">
          <div class="mb-3">
          <label for="adminname" class="form-label">Username</label>
            <div class="form-control">
              <input type="text" class="input input-alt" id="adminname" name="adminname" placeholder="Username">
              <span class="input-border input-border-alt"></span>
            </div>
          </div>
          <div class="mb-3">
          <label for="adminname" class="form-label">Password</label>
            <div class="form-control">
              <input type="password" class="input input-alt" id="password" name="password" placeholder="Password">
              <span class="input-border input-border-alt"></span>
            </div>
          <div class="form-text">We'll never share your password with anyone else.</div>
            </div>
          <button type="submit" class="btn btn-success" name="submit">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>    
    <div id=center_box">
    <section id="home">
        <div id="route-search-form" style="margin-top: 0px;">
            <h1>Simple Bus Ticket Booking System</h1>

            <p class="text-center">Welcome to Simple Bus Ticket Booking System. Login now to manage bus tickets and much more. OR, simply scroll down to check the Ticket status using Passenger Name Record (PNR number)</p>

            <center>
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Administrator Login</button>
                
            </center>

            <br>
            <center>
            <a href="#pnr-enquiry"><button class="btn btn-primary">Scroll Down <i class="fa fa-arrow-down"></i></button></a>
            </center>
            
        </div>
    </section>
    </div>
    <div id="block">
        <section id="info-num">
            <figure>
                <img src="assets/img/route.svg" alt="Bus Route Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="16">100</span>
                    <span class="icon-name">routes</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/bus.svg" alt="Bus Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="16">100</span>
                    <span class="icon-name">bus</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/customer.svg" alt="Happy Customer Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num counter" data-target="7">100</span>
                    <span class="icon-name">happy customers</span>
                </figcaption>
            </figure>
            <figure>
                <img src="assets/img/ticket.svg" alt="Instant Ticket Icon" width="100px" height="100px">
                <figcaption>
                    <span class="num"><span class="counter" data-target="20">100</span> SEC</span> 
                    <span class="icon-name">Instant Tickets</span>
                </figcaption>
            </figure>
        </section>
        <section id="pnr-enquiry">
            <div id="pnr-form">
                <h2>PNR ENQUIRY</h2>
                <form action="/ABTSB/index.php" method="POST">
                    <div>
                        <input type="text" name="pnr" id="pnr" placeholder="Enter PNR">
                    </div>
                    <button type="submit" name="pnr-search">Submit</button>
                </form>
            </div>
        </section>
        <section id="about" background-color="white">
            <div>
                <h1>How This Was Built</h1>
                <h4>Inshort HTML,PHP,CSS,JS,MySQL</h4>
                <p>
                This System Was Developed as a Term Project for The Subject Database Management System in the Fifth semester. Having gained Knowledge in SQL due to the course and having previous exposure to HTML and CSS. When It Came To Implementing A Project that was the way to go! This Project Implements Classic HTML CSS and Bootstrap for the design of the website. The Database uses MySQL to store data, PHP is Used To Generate Queries for The Database hence acting as a backend and JS is Uesd To Enhance Interactivity of The System. This Entire Project is Hosted Locally and All Data is Stored Locally on the Database Present in the System.
                </p>
            </div>
        </section>
        <section id="contact">
            <div id="contact-form">
                <h1>Contact Us</h1>
                <form action="/ABTSB/index.php" method="POST">
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div>
                        <label for="email">Subject</label>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" name="query-submit">Submit</button>
                    <div></div>
                </form>
            </div>
        </section>
        <div id="footercl">
            <footer>
            <p>
                <i class="far fa-copyright"></i> 2023 - Simple Bus Ticket Booking System | Made with &#10084;&#65039; by Pranav Patil
                </p>
            </footer>
        </div>
    </div>
    
    <!-- Delete Booking Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle"></i></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <h2 class="text-center pb-4">
                    Are you sure?
            </h2>
            <p>
                Do you really want to delete your booking? <strong>This process cannot be undone.</strong>
            </p>
            <!-- Needed to pass pnr -->
            <form action="/ABTSB/index.php" id="delete-form"  method="POST">
                    <input id="delete-id" type="hidden" name="id">
                    <input id="delete-booked-seat" type="hidden" name="booked_seat">
                    <input id="delete-booked-bus" type="hidden" name="bus">
            </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="delete-form" class="btn btn-primary btn-danger" name="deleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- External JS -->
    <script src="assets/scripts/main.js"></script>
</body>
</html>