<!DOCTYPE html>
<html>
    <head>
        <title>PatchYourDevice</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Rubik&display=swap" rel="stylesheet">

    </head>
    <body>
        
        
        <!-- 	font-family: 'PT Serif', serif;
        font-family: 'Rubik', sans-serif; -->

        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 header-desk bg-light p-3 ">
                        <div  class="logoinfo">
                            <a class="text-decoration-none  sailorblue" href="index.html">
                                <span class="font26px fontpt">PatchYourDevice</span> 
                                <div class="d-inline font26px"> 
                                   <img height="70px" width="70px"src="imgs/logo.jpeg" class="fa fa-mobile" aria-hidden="true">
                                    <sup class="blinking">(Beta Version)</sup>
                                </div>
                            </a>
                        </div>		
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand bg-sailorblue nav-dark shadowbox">
                <div class="container">
                    <div class="row">
                        <ul class="nav nav-pills">
                              <li class="nav-item">
                                <a href="index.php" class="nav-link active fontrubik">Home</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="Coming Soon.php" class="nav-link navlink mint fontrubik">Services</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="Coming Soon.php" class="nav-link navlink mint fontrubik">Prices</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="Coming Soon.php" class="nav-link navlink mint fontrubik">About</a>
                            </li>
                                                        <li class="nav-item mx-2">
                                <a href=""  data-toggle="modal" data-target="#buildYourPC" 
                                   class="nav-link navlink mint">Build Gaming PC</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="#feedback" class="nav-link navlink mint fontrubik">Reviews</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="Coming Soon.php" class="nav-link navlink mint fontrubik">Shop</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="Contact Us.php" class="nav-link navlink mint">Contact Us</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a href="FAQs.php" class="nav-link navlink mint">FAQ</a>
                            </li>
                              <li class="nav-item mx-2 bor-main">
                                <a href="register.php" data-toggle="" data-target="" 
                                   class="nav-link navlink mint">
                                    Register your Problem
                                </a>
                            </li>
   
                        </ul> </div>
                </div>
            </nav></header>
        <br>
       <div>
        </div>                
                   

       

        <!-- Modal -->
        <div class="modal fade" id="buildYourPC" tabindex="-1" role="dialog" aria-labelledby="buildYourPCTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize" id="buildYourPCTitle">Give some details about your future PC :)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal"  method="POST" action="pcbuild.php">
                            
                            <h6 >If money is constraint then please specify budget if not then go for components list.</h6>
                            <div class="form-group">

                                <label class="control-label col-lg-3" >Budget:</label>
                                <div class="col-lg-9">
                                    <input type="text" id="budget" name="budget" class="form-control" placeholder="Should be more than 30,000/-" required>
                                </div>
                            </div>
                             <div class="form-group">
                                
                              
                            </div>
                           <div class="modal-header mb-3">
                           	 <h5 class="modal-title ">Would you like to specify some components..</h5>
                           </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3" >CPU:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="CPU"id="CPU" placeholder="Enter CPU Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="Motherboard">Motherboard:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="Motherboard" id="Motherboard" placeholder="Enter Motherboard Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="RAM">RAM:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="RAM" id="RAM" placeholder="Enter RAM Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="GPU">GPU:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="GPU" id="GPU" placeholder="Enter GPU Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="Harddisk">Hard Disk:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="Harddisk" id="Harddisk" placeholder="Enter Hard Disk Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="SSD">SSD:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="SSD"id="SSD" placeholder="Enter SSD Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="Power Supply">Power Supply:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control"name="Powersupply" id="Powersupply" placeholder="Enter Power Supply Name" >
                                </div>
                            </div>

                               <div class="form-group">
                                <label class="control-label col-lg-3" for="Cabinet">Cabinet:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="Cabinet" name="Cabinet" placeholder="Enter Cabinet Name" >
                                </div>
                            </div>
                             <div class="form-group">
                             <label class="control-label col-lg-3" for="email">Preference </label>


                                    
                                    <select name="prefer" id="prefer" class="control-label " width="100%">
                                    <option>BEST BUDGET</option>
           
                                    <option>WORKSTATION</option>
           
                            
                                    <option>PROFESSIONAL</option>
        
                                        <option>OVERALL</option>
                                </select>
                            
                            </div>
                            
                             <div class="form-group">
                             <label class="control-label col-lg-3" for="email">TYPE </label>


                                    
                                    <select name="type" id="type" class="control-label " width="100%">
                                    <option>GAMING</option>
           
                                    <option>PROFESSIONAL</option>
           
                            
                                    <option>COLLEGE</option>
        
                                        <option>OVERALL</option>
                                </select>
                            
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-lg-3">Something Else</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="elsee" id="elsee" placeholder="Another component">
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-lg-3">Your Name</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="name" id="name" >
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-lg-3">Email id</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="email" id="email" >
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-lg-3">Phone number</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="phn" id="phn" >
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="control-label col-lg-3">Full Address</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="adr" id="adr" >
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal /-->



        <div class="container shadow-lg mb-4">
            <div class="mt-3 text-center ">	
                <h1 class="pt-4 fontpt"> We fix devices with care</h1>
                <p class="fontrubik">One stop solution for all your hardware
                and software needs.</p>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class=" nav-item" role="show">
                    <a style="padding:22px;" class="nav-link navtab active text-dark " id="home-tab" data-toggle="tab" href="#phone" role="tab" aria-controls="home" aria-selected="true"> 
                        <i class="fas fa-mobile icon" ></i><div class="d-inline">
                            <span class="title">Cell Phone</span><br>
                            <span class="subtitle"><i>Smartphones,iPhones</i></span>
                        </div>
                    </a>
                </li>
                <li class=" nav-item" role="show">
                    <a class="nav-link navtab p-4 text-dark sailorblue" id="profile-tab" data-toggle="tab" href="#computer" role="tab" aria-controls="profile" aria-selected="false">
                        <i class="fas fa-desktop font45"></i>
                        <div class="d-inline">
                            <span class="title">Computer</span><br>
                            <span class="subtitle"><i style="margin-left: 22px;">Laptop, Mac, Desktop</i></span>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="show">
                    <a style="padding:24px 40px 24px 40px;" class="nav-link navtab text-dark sailorblue" id="contact-tab" data-toggle="tab" href="#tablet" role="tab" aria-controls="contact" aria-selected="false">
                        <i class="fas fa-tablet-alt font45"></i>
                        <div class="d-inline">
                            <span class="title" style="padding-right: 60px;">Tablet</span><br>
                            <span class="subtitle" ><I style="margin-left: 18px;">iPad, ...</I></span>
                        </div></a>
                </li>
                <li class="nav-item" role="show">
                    <a style="padding: 26px 10px 26px 10px; " class="nav-link navtab  text-dark sailorblue" id="contact-tab" data-toggle="tab" href="#watch" role="tab" aria-controls="contact" aria-selected="false">
                        <i class="fas fa-dragon " style="font-size: 40px;"></i>
                        <div class="d-inline">
                            <span class="title">Build Gaming PC</span><br>
                            <span class="subtitle" ><i style="margin-left: 21px;">Your own gaming PC</i></span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active text-center" id="phone" role="tabpanel" aria-labelledby="home-tab">
                    <img width="100%" height="500" src="imgs/1.jpg"> 
                </div>
                <div class="tab-pane fade text-center" id="computer" role="tabpanel" aria-labelledby="profile-tab"> 
                    <img width="100%" height="500" src="imgs/2.jpeg">
                </div>
                <div class="tab-pane fade" id="tablet" role="tabpanel" aria-labelledby="contact-tab"> 
                    <img width="100%" height="500" src="imgs/tab.jpg">
                </div>
                <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="contact-tab"> 
                    <img width="100%" height="500" src="imgs/gamingPC.jpg">
                </div>
            </div>

            <!-- My SideNav -->
            <div class="sideNav">
                <nav>
                    <ul>
                         <li>
                            <a href="https://www.facebook.com/patchyour.deviceonfb">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/patchyourdevice">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/patchyourdeviceoninsta/?hl=en">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/md-shams-azam-462a8a1b8/">
                                <i class="fab fa-linkedin-in"></i>
                                <span>Linkedin</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/feed/my_videos">
                                <i class="fab fa-youtube"></i>
                                <span>Youtube</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- slider -->
        <section>
            <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imgs/broken.jpg" height="400" class="d-block w-100" alt="img">
                        <div class="carousel-caption  fontpt font-weight-bold  ">
                            <h1>Broken Screen? Dont Worry </h1>
                            <h2> We will Fix it</h2>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <img src="imgs/repair3.jpg" height="400" class="d-block w-100 " alt="img">
                        <div class="carousel-caption  font-weight-bold fontpt">
                            <h1>Quick and Ontime Repair</h1>
                            <h2>Service that gives life to your device</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!--<div class="ml-5 container zindexcontainer  justify-content-center d-flex ">
            <div class="row ">
                <div class="col-lg-4 col-sm-12 shadow  text-center rounded bg-white fontrubik">
                    <h4 class="p-4 mb-0 mt-3"> 
                        <a class="link"  href="Contact Us.html"> 
                            <i class="fas fa-phone-alt"></i> 
                            Contact Us
                        </a> 
                    </h4>	
                </div> 

                <div class="col-lg-4 col-sm-12 shadow  text-center rounded bg-white fontrubik">
                    <h4 class="p-4 mb-0 mt-3"> 
                        <a class="link" href="Coming Soon.html">
                            <i class="fas fa-map-marker-alt"></i> 
                            Your location for pickup 
                        </a> 
                    </h4> 
                </div>  
                <div class="col-lg-4 col-sm-12 shadow  text-center rounded bg-white fontrubik">
                    <h4 class="p-4 mb-0 mt-3"> 
                        <a class="link" href="Coming Soon.html">
                            <i class="fas fa-edit"></i> 
                            Details About Device
                        </a> 
                    </h4>
                </div>	
            </div>
        </div>->>
    </section>
        <!--<section style="margin-top: 100px;">
            <div>
                <h1 class="text-center fontpt">How Does it work</h1>
                <p class="text-center fontpt">Get Your device fixed in 3 easy steps</p>
            </div>
            <div class="container mainstep mt-4">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 step text-center">
                        <div style="padding:30px;" class="stepicon  mx-auto">
                            <img class="trans" width="80" height="85" src="imgs/broken.png" alt="broken">
                        </div>
                        <h4 class="mt-3 fontpt "> <b>Step 1.</b>Register your device</h4>
                        <div>
                            <p style="padding-left: 68px; padding-right: 85px;" class="fontrubik">For better understanding of your problems.</p>	
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 step text-center">
                        <div style="padding: 30px;" class="stepicon  mx-auto " >
                            <img class="trans" width="80" height="85" src="imgs/paper.png" alt="paper">
                        </div>
                        <h4 class="mt-3 fontpt  "> <b>Step 2.</b>Receive an estimate</h4>
                        <div>
                            <p style="padding-left: 40px; padding-right: 40px;" class="fontrubik">Check your repair cost</p>	
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 step text-center">
                        <div style="padding: 30px;" class="stepicon mx-auto " >
                            <img class="trans" width="80" height="85" src="imgs/courier.png" alt="courier">
                        </div>
                        <h4 class="mt-3 fontpt "> <b>Step 3.</b>Courier or Pickup</h4>
                        <div>
                            <p style="padding-left: 30px; padding-right: 30px;" class="fontrubik">
                                Get your device at your home or office. Pickup , doorstep service or courier
                            </p>	
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section class="pt-50" style="background-color: #232427">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 white">
                        <h1 class="text-center fontpt">How Does it work</h1>
                        <p class="text-center fontpt">Get Your device fixed in 3 easy steps</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="box">
                                <div class="content">
                                    <h2>01</h2>
                                    <h3>Step 01</h3>
                                    <h4>Register your device</h4>
                                    <p>For better understanding of your problems.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="box">
                                <div class="content">
                                    <h2>02</h2>
                                    <h3>Step 02</h3>
                                    <h4>Receive an estimate</h4>
                                    <p>Check your repair cost.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="box">
                                <div class="content">
                                    <h2>03</h2>
                                    <h3>Step 03</h3>
                                    <h4>Courier or Pickup</h4>
                                    <p>Pickup and delivery at a location that is convenient for you.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="advantage shadow-lg">
                <img class="advantageimg" src="imgs/repair3.jpg" align="advantage">
                <div class="advantagetitle">
                    <h1 style="text-align:center">Additional Benefits</h1>
                    <p style="text-align:center">Fix issues easily</p>
                </div>
                <div class="advimg ">
                    <img width="300" src="imgs/advimg.png" alt="advimg">
                </div>
                <div class="aboutone">
                    <div class="circleone one p-3 ">
                        <h4 class="fontpt">01</h4>
                    </div>
                    <h4 class="fontpt">30 days warranty on all repairs <sup>*</sup></h4>
                    <p class="fontrubik fontsize18">30 days warranty from the day of repair.
                    </p>
                </div>
                <div class="abouttwo">
                    <div class="circletwo two p-3" >
                        <h4 class="fontpt">02</h4>
                    </div>
                    <h4 class="fontpt">Premium Grade Parts</h4>

                    <p class="fontrubik fontsize18">We use the best parts that are available.
                    </p>
                </div>
                <div class="aboutthree">
                    <div class="circlethree three p-3">
                        <h4 class="fontpt">03</h4>
                    </div>
                    <h4 class="fontpt">Certified Technicians</h4>

                    <p class="fontrubik fontsize18"> Rest easy knowing that our technicians are fully certified and are capable
                        of handling all your issues with ease.
                    </p>
                </div>
                <div class="aboutfour">
                    <div class="circlefour four p-3">
                        <h4 class="fontpt">04</h4>
                    </div>
                    <h4 class="fontpt">Lowest  Price Guarantee</h4>

                    <p class="fontrubik fontsize18">  Our lowest price guarantee ensures that we always offer the best price to our customers.</p>
                </div>
            </div>
        </section>

        <!-- Feedback -->
        <section id="feedback">
            <div class="container-fluid feedback shadow-lg mt-5" style="background-image: url('imgs/repair3.jpg') !important; opacity: 1;">

                <div class="row ">		
                    <div class="col-12 left-box">
                        <h2 class="pt-4 pl-3 pb-2 text-center text-white fontpt ">Feedback</h2>
                        <p class="pl-3 text-center text-white fontrubik">See what our customers say about us</p>

                        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active rounded ">
                                    <div class="card">
                                        <div class="card-header bg-white text-center border-0 ">
                                            <div class="row justify-content-center ">
                                                <div class="col"> 
                                                    <img class="align-self-center text-center rounded-circle outside img-fluid" src="imgs/12.jpg" width="80" height="60"> 
                                                </div>
                                            </div>
                                            <div class="row text-center name">
                                                <div class="col">
                                                    <h5 class="mb-0 profile-pic">ROCHAN MOHAPATRA</h5> <small class="mt-0">ASHOKA UNIVERSITY</small>
                                                    <p><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star-o mr-1"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 text-center pb-3 ">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col">
                                                    <p class="bold"> <span><img class="img-fluid quotes" src="https://i.imgur.com/U20aFIt.png" width="10" height="20"></span> I honestly had no hopes cuz my phone was in a really bad condition. But to my surprise, the technies were able to make it work after a reasonable prize. That was something unexpected and was happy that I dint have to burn a hole in my pocket. Highly recommended to all those who have to get their devices fixed  <span><img class="img-fluid quotes-down" src="https://i.imgur.com/DPzmyiD.png" width="40" height="40"> </span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center bg-white border-0 mt-0 pt-0">
                                            <div class="row">
                                                <div class="col"><span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-google-plus" aria-hidden="true"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item text-white">
                                    <div class="card">
                                        <div class="card-header bg-white text-center border-0 ">
                                            <div class="row justify-content-center ">
                                                <div class="col"> <img class="align-self-center text-center rounded-circle outside img-fluid" src="imgs/13.jpg" width="80" height="60"> </div>
                                            </div>
                                            <div class="row text-center name">
                                                <div class="col">
                                                    <h5 class="mb-0 profile-pic">Aayush</h5> <small class="mt-0">MANIPAL UNIVERSITY</small>
                                                    <p><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 text-center pb-3 ">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col">
                                                    <p class="bold"> <span><img class="img-fluid quotes" src="https://i.imgur.com/U20aFIt.png" width="40" height="40"></span> Great service offered at good competitive pricing . All in all extremely happy with the overall service quality <span><img class="img-fluid quotes-down" src="https://i.imgur.com/DPzmyiD.png" width="40" height="40"></span> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center bg-white border-0 mt-0 pt-0">
                                            <div class="row">
                                                <div class="col"> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-google-plus" aria-hidden="true"></i></span> </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card">
                                        <div class="card-header bg-white text-center border-0 ">
                                            <div class="row justify-content-center ">
                                                <div class="col"> <img class="align-self-center text-center rounded-circle outside img-fluid" src="imgs/11.jpg" width="110" height="110"> </div>
                                            </div>
                                            <div class="row text-center name">
                                                <div class="col">
                                                    <h5 class="mb-0 profile-pic">Naman Bhat</h5> <small class="mt-0">MANIPAL UNIVERSITY</small>
                                                   <p><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star mr-1"></span><span class="fa fa-star-o mr-1"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 text-center pb-3 ">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 col">
                                                    <p class="bold"> <span><img class="img-fluid quotes" src="https://i.imgur.com/U20aFIt.png" width="40" height="40"></span> I used patch your device and was impressed by their rate, service and on time delivery. I highly recommend it to people that need help with electronic devices  <span><img class="img-fluid quotes-down" src="https://i.imgur.com/DPzmyiD.png" width="40" height="40"> </span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center bg-white border-0 mt-0 pt-0">
                                            <div class="row">
                                                <div class="col"> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span><span class="mx-2"><i class="fa fa-google-plus" aria-hidden="true"></i></span> </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev pt-5" href="#carouselIndicators" role="button" data-slide="prev" style="width: 2%;">
                                
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next pt-5" href="#carouselIndicators" role="button" data-slide="next" style="width: 2%;">
                                
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="footerh text-white" style="background-image: url('imgs/blackb.jpeg') !important;">
                <ul class="nav  justify-content-center " >
                    <li class="nav-item">
                        <a class="nav-link fontrubik " href="Coming Soon.html"> Smartphone Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontrubik" href="Coming Soon.html"> Iphone REPAIR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontrubik" href="Coming Soon.html"> Ipad Repair</a>
                    </li>	
                    <li class="nav-item">
                        <a class="nav-link fontrubik" href="Coming Soon.html"> Laptop Repair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fontrubik" href="Coming Soon.html"> Computer Repair</a>
                    </li>
                </ul>

                <ul class="nav justify-content-center">
                    <li class="nav-item p-3">
                        <span class="fontlarger fontpt">
                            <i class="fas fa-phone-square-alt"></i> 
                            Any Help +918050491740
                        </span>
                    </li>
                    <li class="nav-item p-3 fontpt" >
                        <span class="fontlarger ">
                            <i class="fas fa-map-marker-alt"></i> 
                            1st Main road, RBI Layout, JP Nagar, 7th Phase, Bengaluru-560078
                        </span>
                    </li>
                    <li class="nav-item p-3 fontpt ">
                        <i class="far fa-envelope fontlarger"></i> 
                        <a href="#">care@patchyourdevice.com</a> 
                    </li>
                </ul>
            </div>
            <a id="back-to-top" href="" class="back-to-top">
                <img src="imgs/scroll.png" alt="Scroll To Top">
            </a>
        </footer>

        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('#back-to-top').tooltip('hide');
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });

                $('#back-to-top').tooltip('show');
            });
        </script>


        <script src="https://kit.fontawesome.com/571f8581ec.js"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>