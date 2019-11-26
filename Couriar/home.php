<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Couriar - Welcome</title>
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/newRequest.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/account.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/home.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 

</head>
<?php include_once "header.php"; ?>
    <body>
        <div class="img-slider">
            <div class="tag-div">
                <div class="serviceTitle">
                    <h1>Send your parcel online in three easy steps.</h1>
                    <label class="servicetitledetails">We Deliver with Speed!, Collection from your door or drop off</label>
                    <button class="letsStartbtn"><a class="letsstarta" href="reuest.php">Let's Start</a> </button>    
                </div> 
            </div>
            <div class="slidercontainer">
             <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">Step 1</div>
                    <img src="src/step1.png" style="max-width:100%; max-height:90%; object-fit: contain;">
                    <div class="text">Fill pickup address and delivery Address</div>    
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">Step 2</div>
                    <img src="src/step2.png" style="max-width:100%; max-height:90%; object-fit: contain;">
                    <div class="text">Fill parcel information like size and weight</div>
                </div>

                <div class="mySlides fade">
                    <div class="text">Tack parcel to our couriar Boy and pay bill</div>    
                    <div class="numbertext">Step 3</div>
                        <img src="src/step3.png" style="max-width:100%; max-height:90%; object-fit: contain;">
                    </div>
                <br>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>
                </div>
            </div>
        </div>
        <div class="featuresdiv">
            <div class="featurestitle">
                <label class="lblfeturetitle">Parcel Delivery Made Easy</label>
            </div>
            <div class="featuredetailcontainer">
                <div class="featuredetail">
                    <div class="featureicon">
                        <img class="featureimg" src="http://localhost/Project/src/devices.svg">
                    </div>
                    <div class="why">
                        <div class="que">
                            <label class="quelbl">Why should I choose Couriar?</label>
                        </div>
                        <div class="answer">
                            <p>Select Courier is on a mission to make your working life easier, simpler and more pleasant. In order to do just that, we have developed the most comprehensive, friendly, fast and transparent logistical environment (colleague) ever., all parcel prices and postal rates from the most reliable parcel delivery companies for you – saving you time, effort and money!</p>
                        </div>
                    </div>
                </div>
                <div class="featuredetail">
                        <div class="featureicon">
                          <img class="featureimg" src="http://localhost/Project/src/best-price.svg">
                        </div>
                        <div class="why">
                        <div class="que">
                            <label class="quelbl">How do I get the best price online when sending a parcel?</label>
                        </div>
                        <div class="answer">
                            <p>At Courair, we guarantee to have the cheapest parcel delivery quotes in the India.  we can provide the widest range of top-quality service options to our customers… at the lowest prices online. </p>
                        </div>
                    </div>
                </div>  
                <div class="featuredetail">
                        <div class="featureicon">
                          <img class="featureimg" src="http://localhost/Project/src/arrival.svg">
                        </div>
                        <div class="why">
                        <div class="que">
                            <label class="quelbl">How do I get the best price online when sending a parcel?</label>
                        </div>
                        <div class="answer">
                            <p>At Courair, we guarantee to have the cheapest parcel delivery quotes in the India.  we can provide the widest range of top-quality service options to our customers… at the lowest prices online. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="servicesContainer">
            <div class="servicediv">
                <div class="service">
                    <div class="serviceBox">
                        <div class="serviceTitlediv">
                            <div class="serviceIcon"><img class="servicelogo" src="http://localhost/Project/src/truck.svg"> </div>
                            <div class="serviceTitlecontainer"><h3 class="stitle">Collection Services</h3></div>
                        </div>
                        <div class="serviceinfo">
                            <p>Collection services work best for those who’ll be in one location for most of the day; maybe you work from home, or have consignments that need to be collected from the office. Either way, there are a number of benefits to using a collection service:</p>
                            <ul><li>Service from your doorstep</li>
                                <li>Beat the queues</li>
                                <li>Timed deliveries</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="service">
                    <div class="serviceBox">
                        <div class="serviceTitlediv">
                            <div class="serviceIcon"><img class="servicelogo" src="http://localhost/Project/src/parcel.svg"> </div>
                            <div class="serviceTitlecontainer"><h3 class="stitle">Drop-off Services</h3></div>
                        </div>
                        <div class="serviceinfo">
                            <p>Drop-off services work best for people with a small number of parcels that have a busy day schedule:</p>
                            <ul><li>No need to wait in</li>
                                <li>Cheaper than collection</li>
                                <li>Evening and weekend sending</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include_once "footer.php"; ?>
</html>
<script>
    var slideIndex = 0;
    showSlides();
    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>
