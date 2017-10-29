<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Neu Cleans</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/" media="all" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all" />
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css'>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])){
        require 'PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'altar34.supremepanel34.com';
 
        $mail->SMTPAuth = true;
        $mail->Username = 'admin@neucleans.com';
        $mail->Password = 'securepassword912';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('admin@neucleans.com', 'Neu mail form neucleans.com');
        $mail->addReplyTo('admin@neucleans.com', 'Neu Website');
        // Add a recipient
        $mail->addAddress('sales@neucleans.com');
        // Email subject
        $mail->Subject = 'New Mail from neucleans.com ';
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mailContent = "<br> Name: " . $_POST['uname']. "<br><br> Email: " . $_POST['umail']. "<br><br> Phone: " . $_POST['uphone'] . "<br><br> Message: ". $_POST['umessage'];
        $mail->Body = $mailContent;
        // Send email
        if(!$mail->send()) {
        echo '<div class="alert  alert-danger alert-dismissable text-center" style="background:indianred !important; color:#fff !important; border-radius:0px !important"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Danger!</strong> Message could not be sent. </div>';
        } else {
        
        echo '<div class="alert  alert-success alert-dismissable text-center" style="background:green !important; color:#fff !important; border-radius:0px !important"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Your Message has been send. </div>';
        }
        }
        ?>
        <!-- navbar start -->
        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a data-scroll href="#home">home</a></li>
                        <li><a data-scroll href="#services">services</a></li>
                        <li><a data-scroll href="#features">features</a></li>
                        <li><a data-scroll href="#reviews">reviews</a></li>
                        <li><a data-scroll href="#pricing">pricing</a></li>
                        <li ><a href="https://docs.google.com/forms/d/e/1FAIpQLSe2IU71HZwQqZcvORefy7iJB6yJz9HPndKZCwbPp2JFYL6_3A/viewform" class="signup">sign up</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <!-- end start -->
                <!-- Start slider -->
                <div class="slider-wrapper" id="home">
                    <div class="container">
                        <div class="row">
                            <div class="slider-content">
                                <h1>Airbnb. Homeaway. VRBO. FlipKey.</h1>
                                <h2>Sign up  for Hotel-grade turnovers!</h2>
                                <div class="quote">
                                   <p>
                                        <a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote </a>
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End slider -->
                <!-- Start service -->
                <div class="service-wrapper" id="services">
                    <div class="container ">
                        <div class="service-content">
                            <div class="row">
                                <div class="section-title text-center">
                                    <h1>Our Services </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="single-service">
                                    <div class="col-md-4">
                                        <p class="text-center"><img src="img/simple.png" class=""></p>
                                        <h3 class="text-center" >simple</h3>
                                        <p class="text-justify">
                                            This clean is perfectly suited for high turnover vacation rentals. Our cleaners will clean your home after your guests checkout. Cleaners only use green cleaning supplies so no need to worry about toxins or overexposure.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-service">
                                    <div class="col-md-4">
                                        <p class="text-center"><img src="img/simple-plus.png"></p>
                                        <h3 class="text-center" >simple plus</h3>
                                        <p class="text-justify">
                                            This clean includes everything from the Simple clean, PLUS linens and toiletries. Stop those last minute runs to wholesale markets and confidently know that we’ve got you covered.
                                        </p>
                                    </div>
                                </div>
                                <div class="single-service">
                                    <div class="col-md-4">
                                        <p class="text-center"><img src="img/deep-clean.png"></p>
                                        <h3 class="text-center" >deep clean</h3>
                                        <p class="text-justify">
                                            This clean is our deepest clean and is handled exclusively by our most trusted professional partners. Done once every 5 weeks, we’ll clean your listing from top to bottom, provide you with a detailed report, and ensure that it’s picture perfect, every time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="service-quote text-center">
                                <p class="">
                                    <a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Service -->
                <!-- Start slider -->
                <!-- Start features -->
                <div class="feature-wrapper" id="features">
                    <div class="container">
                        <div class="feature-content">
                            <div class="section-title text-center">
                                <h1>Neu features</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 sborder-rt sborder-btm feature1 ">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-1.png">
                                        </p>
                                        <h3 class="text-center">Cross Platform</h3>
                                        <p>
                                            Airbnb, VRBO, Homeaway, Flipkey; you name it, we cover it!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-sm-6 feature2">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-2.png">
                                        </p>
                                        <h3 class="text-center">Automated Billing</h3>
                                        <p>
                                            Never worry about leaving cash under the mat for cleaners again! We safely process your CC after each turnover.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6   feature3">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-3.png">
                                        </p>
                                        <h3 class="text-center">Automated Scheduling</h3>
                                        <p>
                                            Once you sign up, all check-ins and checkouts are automatically synced into our system. We’ll know when we’ll have to clean your home as soon as you’re booked.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature4">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-4.png">
                                        </p>
                                        <h3 class="text-center">Late Checkout Request</h3>
                                        <p>
                                            Have a late checkout? Give us a heads up and our cleaners will do their best to accommodate you.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature5">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-5.png">
                                        </p>
                                        <h3 class="text-center">Clean Status</h3>
                                        <p>
                                            Receive SMS notifications as soon as your home is cleaned; never allow your guest to check-in to a dirty listing!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature6">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-6.png">
                                        </p>
                                        <h3 class="text-center">Toiletries</h3>
                                        <p>
                                            Paper towels, facial tissues, toilet tissue, and more to come. Upgrade to PLUS, to have toiletries provided with every clean.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature7">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-7.png">
                                        </p>
                                        <h3 class="text-center">7/365</h3>
                                        <p>
                                            You can count on us! We operate everyday of the year, including holidays.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 feature8">
                                    <div class="single-feature">
                                        <p class="text-center" >
                                            <img src="img/feature-8.png">
                                        </p>
                                        <h3 class="text-center">Linens</h3>
                                        <p>
                                            Stop those frequent trips to the local laundromat. Upgrade to PLUS and you’ll never have to worry about doing laundry ever again!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12  feature9">
                                    <div class="row">
                                        <div class="single-feature fqoute" >
                                        <div class="feature-quote text-center">
                                            <a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features -->
                <!-- Start Testimonial -->
                <div class="testimonial-wrapper" id="reviews">
                    <div class="section-title text-center">
                        <h1> WHAT GUESTS SAY ABOUT OUR SERVICE</h1>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <article>
                                    <div id="owl">
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client.png">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great spot, small but perfect for one person. I stayed here for work and it was perfect. Much better than a hotel (which is where i usually stay), and cheaper! The bathroom was large and clean.
                                                        </p>
                                                    </div>
                                                    <p class="name">Lara</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client2.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>This listing was the perfect place for our visit to Seattle. A quick walk to the light rail station and the Convention Center. The apartment was clean and inviting and check-in was easy and any questions/concerns were immediately answered. The fact that parking was included in our stay meant that the overall value of this listing was better than any other place on airbnb! We had a great trip
                                                        </p>
                                                    </div>
                                                    <p class="name">Rachel</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client3.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Jk was a great host, and accommodating to our request to check-in a little early. The studio is in a great location and makes exploring the sites of Seattle very easy! The studio is very spacious, clean, and welcoming. Would highly recommend
                                                        </p>
                                                    </div>
                                                    <p class="name">Lisa</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client4.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great place to stay in Seattle! Just a short walk to Pike Place Market. Transportation is accessible. Very clean and comfortable. The building is private, quiet and a great place to relax after a long day of exploring. Jk was promptly responsive and courteous. Lots of information available in the space about Seattle, which was nice to have. Starbucks is literally right out the front door, Top Pot is just down the street, so if you need a morning coffee you don't have to go far.
                                                        </p>
                                                    </div>
                                                    <p class="name">Bradley</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client5.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>The studio was clean, comfortable and quiet. It's also walking distance from several great
                                                            restaurants, so I was able to explore the neighborhood on foot - always a plus. JK was a
                                                            responsive host. I would definitely stay here again.
                                                        </p>
                                                    </div>
                                                    <p class="name">Laura</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client6.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>PERFECT location! Walking distance to everything. Very clean and more spacious then it may appear. Make sure you check out the roof top! Great instructions and communication with JK. Overall a good experience
                                                        </p>
                                                    </div>
                                                    <p class="name">Tyler</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client7.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great location! A few blocks away from Pikes Place and in a neighborhood full of restaurants and bars! The studio was perfect. Extremely comfortable bed. Clean and tidy, and JK responded quickly to any needs that we had. Would def stay there again!
                                                        </p>
                                                    </div>
                                                    <p class="name">Tamar</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client8.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>We loved the fact that Jk's place was in walking distance to so many things. It was easy to check-in and great to have a parking place. The unit was clean and the bed was comfortable.
                                                        </p>
                                                    </div>
                                                    <p class="name">Joanna</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client9.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>The studio apartment was in a perfect spot, eateries, bakeries, coffee shops, and shopping within steps of your door. The studio was clean, nicely furnished, with a very comfortable bed. Parking in the apartment basement was a big plus! We parked our car for the entire visit and walked everywhere. One night we sat on the roof top and drank wine and ate cheese while enjoying a view of the space needle. We would strongly recommended this studio apartment for your stay in Seattle.
                                                        </p>
                                                    </div>
                                                    <p class="name">JoAnn</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client10.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>This location was perfect walking distance to Space Needle and Pike Place Market. We ended up walking much more than planned and really enjoyed it. Since we are from Los Angeles, this was a novelty. :) Room was very clean and had plenty of room. Building is going through renovation (we had no issues at all but impressed with look at decor) and is a secure building. Don't leave keycard behind.
                                                        </p>
                                                    </div>
                                                    <p class="name">Alvaro</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client12.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great place! Clean, nice, comfy bed! The building has a great patio too!
                                                        </p>
                                                    </div>
                                                    <p class="name">Katie</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client0.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>This apartment is very nice and clean. It on the 19th floor. It is very quiet and i can view the city building. Siegen provide a free parking. It is expensive to park in seattle you know, especially in the downtown. Very nice apartment and nice location. Thank you Siegen!
                                                        </p>
                                                    </div>
                                                    <p class="name">Zheng</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client13.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>We stayed here with my brother and his girlfriend along with our 1 year old and it was really great! The apartment is clean and there was plenty of room for all of us. Wonderful that there are 2 bathrooms! We loved the location and being able to walk everywhere. Highly recommend!
                                                        </p>
                                                    </div>
                                                    <p class="name">Amy</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client14.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great location for conference center events, short walk, plenty of conveniences nearby. Clean, comfortable accommodations, would stay again.
                                                        </p>
                                                    </div>
                                                    <p class="name">Jack</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client15.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great location - walked to everything (or jumped on the bus). Apartment was clean and quiet and 24/7 security was nice. Small living area but we were not there to sit around! There is a keurig so purchase your own pods for coffee (there were only a few mild blend in the unit)!
                                                        </p>
                                                    </div>
                                                    <p class="name">Jill</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client16.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>We had a nice stay here. The apartment location is perfect. The apartment is as it appears in the photos and was clean and the beds are comfortable. We were able to enjoy some time together outside on the lovely community roof deck/patio space.
                                                        </p>
                                                    </div>
                                                    <p class="name">Sara</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client17.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>The location is awesome! We walked Everywhere. Parking was cheap and easy, right in the building. The place is clean and organized with comfortable furniture and good quality linens. We would definitely stay here again when in Seattle.
                                                        </p>
                                                    </div>
                                                    <p class="name">Joe</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client18.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Very convenient location within walking distance to Pike's Place, Lola's, Top Pot donuts, and more.
                                                            It's also a short Uber ride from Kerry Park and the different museums around the Space Needle. The
                                                            place is also clean and spacious - it was perfect for our weekend trip to Seattle!
                                                        </p>
                                                    </div>
                                                    <p class="name">Crystal</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client19.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Clean, priced better than other area hotels, great communication, wonderful location! Lots of space; perfect for our family of 4.
                                                        </p>
                                                    </div>
                                                    <p class="name">Deidre</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client20.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Location was great for shopping and access to Pikes Market. There was lobby construction going on so it was slightly underwhelming when we arrived. The unit was clean and comfortable and well maintained.
                                                        </p>
                                                    </div>
                                                    <p class="name">Dan</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client21.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great location, the room is pretty cleaned. Siegen replied my questions pretty fast! At first, we had problems with the lock and how to get in, but after we figured those things out, our stay is pretty satisfied. Thank you Siegen.
                                                        </p>
                                                    </div>
                                                    <p class="name">Binqi</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client22.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>The PERFECT location! The apartment is close to the conference center and Pike Place Market.
                                                            There are tons of great restaurants close by. The building (and apartment) were clean and quite. The
                                                            host was incredibly responsive when a small issue with the keyless entry came up. I would highly
                                                            recommend this spot over a hotel. Thanks for sharing you place Siegen. It's a great spot!
                                                        </p>
                                                    </div>
                                                    <p class="name">Wendy</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client23.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Really great place in a nice location and nice building. Nice gym in the building with a pool. Clean bedrooms, nice beds. Great communication from Siegen!
                                                        </p>
                                                    </div>
                                                    <p class="name">Sam</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client24.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great place. Very central, everything you need is right there. The space is beautiful, spacious and
                                                            clean. It is equipped with basics. Siegen was communicative and I didn't have any problems. The
                                                            smart lock system is super easy and convenient.
                                                        </p>
                                                    </div>
                                                    <p class="name">Kiran</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client25.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Good clean place
                                                        </p>
                                                    </div>
                                                    <p class="name">Mohammed</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client26.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>The room is very clean and location is perfect! , only ten minutes drive from Pike place market. There are Whole Foods. Safeway, and Trader Joe's around here. We really enjoyed staying in Seattle. Definitely I recommend this house, thank you!!!
                                                        </p>
                                                    </div>
                                                    <p class="name">Chieko</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client27.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Clean, spacious, and renovated interior. Pretty unassuming from the outside! Close to restaurants
                                                            and shops. Host is very communicative. Would stay here again if I'm in Seattle in the future.
                                                        </p>
                                                    </div>
                                                    <p class="name">Karen</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client28.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Wonderful spot. Well priced, clean, minimalist but had everything we needed. Able to walk to meetings. The beds and bedding were amazing. Great night's sleep.
                                                        </p>
                                                    </div>
                                                    <p class="name">Tammi Taylor</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client29.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Great place in downtown Seattle. Clean, spacious, Within walking distance to lots of shops,
                                                            restaurants and pike place market. Host was easy to reach and very helpful. Loved the heated pool
                                                            and the terrace.
                                                        </p>
                                                    </div>
                                                    <p class="name">Cynthia</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="column row">
                                            <div class=" columns testimonial">
                                                <div class="col-md-2">
                                                    <div class="student">
                                                        <div class=" round-image">
                                                            <img src="img/client30.jpg">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="quote">
                                                        <p>Comfortable, centrally located. Clean and enjoyable space. Nice stay.
                                                        </p>
                                                    </div>
                                                    <p class="name">Ed</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <!-- Start pricing -->
                <div class="pricing-wrapper" id="pricing">
                    <div class="container ">
                        <div class="row">
                            <div class="section-title text-center">
                                <h1>Our Pricing </h1>
                            </div>
                        </div>
                        <div class="pricing-content">
                            <div class="row">
                                <ul  class="nav nav-pills">
                                    
                                    <li class="active">
                                        <a  href="#1a" data-toggle="tab">
                                        <h2>SIMPLE</h2>
                                        <div class="single-price">
                                            <h4>PRICING STARTS </h4>
                                            <h1>$39</h1>
                                            <h4>400 SQ FT 0BD/1BR </h4>
                                        </div>
                                        </a>
                                        
                                        <div id="p1" class="hidden-lg hidden-md hidden-sm">
                                            <div class="row service_lists">
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>bedroom</h2>
                                                        <ul>
                                                            <li>Strip sheets.</li>
                                                            <li>Make beds.</li>
                                                            <li>Wipe down all surfaces.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>Common areas</h2>
                                                        <ul>
                                                            <li>Fold blankets & arrange pillows on couch.</li>
                                                            <li>Wipe down & dust all hard surfaces.</li>
                                                            <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>Bathroom</h2>
                                                            <ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Wipe Top to Bottom</li>
                                                                <ul>
                                                                    <li>Mirrors</li>
                                                                    <li>Counters</li>
                                                                    <li>Sinks</li>
                                                                    <li>Shower/Walls</li>
                                                                    <li>Bathtub</li>
                                                                    <li>Toilet </li>
                                                                </ul>
                                                              
                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>kitchen</h2>
                                                            <ul>
                                                                <li>Wash/Dry/Put away dishes in sink.</li>
                                                                <li>Dishwasher clean </li>
                                                                <ul>
                                                                    <li>Microwave cleaned (inside/outside)</li>
                                                                    <li>Refrigerator (inside)</li>
                                                                    <li>Counters and Stovetop</li>
                                                                    <li>Sink </li>
                                                                </ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="service-quote text-center">
                                                    <p><a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#2a" class="" data-toggle="tab">
                                        <h2>SIMPLE PLUS</h2>

                                        <div class="simple-plus">
                                            <h4>PRICING STARTS </h4>
                                            <h1>$59</h1>
                                            <h4>400 SQ FT 0BD/1BR </h4>
                                        </div>

                                        </a>
                                        
                                        <div id="p2" class="hidden-lg hidden-md hidden-sm">
                                        <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>
                                                        
                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li class="item-clr1">Provide fresh bed linens.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>Common areas</h2>
                                                    <ul>
                                                        <li>Fold blankets & arrange pillows on couch.</li>
                                                        <li>Wipe down & dust all hard surfaces.</li>
                                                        <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>Bathroom</h2>
                                                        <ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Mirrors</li>
                                                                <li>Counters</li>
                                                                <li>Sinks</li>
                                                                <li>Shower/Walls</li>
                                                                <li>Bathtub</li>
                                                                <li>Toilet </li>
                                                            </ul>
                                                            <li  class="item-clr1">Replace toilet paper.</li>
                                                            <li  class="item-clr1">Replace facial Tissue.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li>Wash/Dry/Put away dishes in sink.</li>
                                                            <li>Dishwasher clean</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/outside)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li  class="item-clr1">Replace paper towels.</li>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="service-quote text-center">
                                                <p><a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>
                                            
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#3a"  class="" data-toggle="tab">
                                        <h2>DEEP CLEAN</h2>

                                        <div class=" deep-clean">
                                            <h4>PRICING STARTS </h4>
                                            <h1>$99</h1>
                                            <h4>400 SQ FT 0BD/1BR </h4>
                                        </div>

                                        </a>
                                        
                                        <div id="p3" class="hidden-lg hidden-md hidden-sm">

                                            <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>
                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li class="item-clr2">Strip and replace comforter.</li>
                                                        <li class="item-clr2">Wipe inside all cabinets/drawers.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li class="item-clr2">Vacuum/Mop (under bed).</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>All rooms</h2>
                                                    <ul>
                                                        <li class="item-clr2">Take pictures. Document status. </li>
                                                        <li class="item-clr2">Cobweb removal.</li>
                                                        <li class="item-clr2">Dust ceiling fans.</li>
                                                        <li class="">Wipe Top to Bottom</li>
                                                        <ul>
                                                            <li class="item-clr2">Ceiling fan</li>
                                                            <li class="item-clr2">Light fixtures</li>
                                                            <li class="item-clr2">Windows (interior)</li>
                                                            <li class="item-clr2">Stair railings</li>
                                                            <li class="item-clr2">Walls (spot clean)</li>
                                                            <li>Hard surfaces</li>
                                                            <li>Cloth surfaces & upholstery</li>
                                                            <li class="item-clr2">Doorknobs</li>
                                                            <li class="item-clr2">Light switches & thermostats</li>
                                                            <li class="item-clr2">Baseboards</li>
                                                        </ul>
                                                        <li class="item-clr2">Move furniture (whenever possible). </li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li class="item-clr2">Wipe cupboards (inside/outside).</li>
                                                            <li>Wash/Dry/Put away dishes in sink</li>
                                                            <li class="item-clr2">Deep scrub of stove burners and oven.</li>
                                                            <li>Wipe Top to Bottom </li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/<span  class="item-clr2">outside/top</span>)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                
                                                <div class="service-list">
                                                    <h2>Bathroom</h2>
                                                    <ul>
                                                        <li>Collect trash & replace garbage bags.</li>
                                                        <li>Spot clean mold mildew on wall and ceilings.</li>
                                                        <li>Deep scrub shower walls, tubs and curtains.</li>
                                                        <li>Wipe Top to Bottom</li>
                                                        <ul>
                                                            <li>Mirrors</li>
                                                            <li>Counters</li>
                                                            <li>Sinks</li>
                                                            <li>Shower/Walls</li>
                                                            <li>Bathtub</li>
                                                            <li>Toilet </li>
                                                        </ul>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-xs-12 col-md-12 col-sm-6">
                                            <div class="service-quote text-center">
                                                <p><a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>
                                            
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>

                            
                            
                            
                            
                            
                            <div class="tab-content clearfix hidden-xs">
                                <div class="tab-pane active" id="1a">
                                    <div class="">
                                        <div class="row service_lists">
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>bedroom</h2>
                                                        <ul>
                                                            <li>Strip sheets.</li>
                                                            <li>Make beds.</li>
                                                            <li>Wipe down all surfaces.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="service-list">
                                                        <h2>Common areas</h2>
                                                        <ul>
                                                            <li>Fold blankets & arrange pillows on couch.</li>
                                                            <li>Wipe down & dust all hard surfaces.</li>
                                                            <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>Bathroom</h2>
                                                            <ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Wipe Top to Bottom</li>
                                                                <ul>
                                                                    <li>Mirrors</li>
                                                                    <li>Counters</li>
                                                                    <li>Sinks</li>
                                                                    <li>Shower/Walls</li>
                                                                    <li>Bathtub</li>
                                                                    <li>Toilet </li>
                                                                </ul>
                                                              
                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6  col-sm-6">
                                                    <div class="">
                                                        <div class="service-list">
                                                            <h2>kitchen</h2>
                                                            <ul>
                                                                <li>Wash/Dry/Put away dishes in sink.</li>
                                                                <li>Dishwasher clean </li>
                                                                <ul>
                                                                    <li>Microwave cleaned (inside/outside)</li>
                                                                    <li>Refrigerator (inside)</li>
                                                                    <li>Counters and Stovetop</li>
                                                                    <li>Sink </li>
                                                                </ul>
                                                                <li>Collect trash & replace garbage bags.</li>
                                                                <li>Vacuum/Mop floor.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="service-quote text-center">
                                                    <p><a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>
                                                        
                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li  class="item-clr1">Provide fresh bed linens.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>Common areas</h2>
                                                    <ul>
                                                        <li>Fold blankets & arrange pillows on couch.</li>
                                                        <li>Wipe down & dust all hard surfaces.</li>
                                                        <li>Wipe down all cloth surfaces &  upholstery.</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>Bathroom</h2>
                                                        <ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Mirrors</li>
                                                                <li>Counters</li>
                                                                <li>Sinks</li>
                                                                <li>Shower/Walls</li>
                                                                <li>Bathtub</li>
                                                                <li>Toilet </li>
                                                            </ul>
                                                            <li  class="item-clr1 item-style-1">Replace toilet paper.</li>
                                                            <li  class="item-clr1">Replace facial Tissue.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li>Wash/Dry/Put away dishes in sink.</li>
                                                            <li>Dishwasher clean</li>
                                                            <li>Wipe Top to Bottom</li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/outside)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li  class="item-clr1">Replace paper towels.</li>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="service-quote text-center">
                                                <p><a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane" id="3a">
                                    <div class="row service_lists">
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>bedroom</h2>
                                                    <ul>
                                                        <li>Strip sheets.</li>
                                                        <li>Make beds.</li>
                                                        <li class="item-clr2">Strip and replace comforter.</li>
                                                        <li class="item-clr2">Wipe inside all cabinets/drawers.</li>
                                                        <li>Wipe down all surfaces.</li>
                                                        <li class="item-clr2">Vacuum/Mop (under bed).</li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                <div class="service-list">
                                                    <h2>All rooms</h2>
                                                    <ul>
                                                        <li class="item-clr2">Take pictures. Document status. </li>
                                                        <li class="item-clr2">Cobweb removal.</li>
                                                        <li class="item-clr2">Dust ceiling fans.</li>
                                                        <li class="">Wipe Top to Bottom</li>
                                                        <div class="row">
                                                            <ul>
                                                            <div class="col-md-5 col-sm-5">
                                                                  <li class="item-clr2">Ceiling fan</li>
                                                                <li class="item-clr2">Light fixtures</li>
                                                                <li class="item-clr2">Windows (interior)</li>
                                                                <li class="item-clr2">Stair railings</li>
                                                                <li class="item-clr2">Walls (spot clean)</li>
                                                            </div>
                                                            <div class="col-md-7 col-sm-7">
                                                                <li>Hard surfaces</li>
                                                                <li>Cloth surfaces & upholstery</li>
                                                                <li class="item-clr2">Doorknobs</li>
                                                                <li class="item-clr2">Light switches & thermostats</li>
                                                                <li class="item-clr2">Baseboards</li>
                                                            </div>
                                              
                                                        </ul>
                                                        </div>

                                                        <li class="item-clr2">Move furniture (whenever possible). </li>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6  col-sm-6">
                                                <div class="">
                                                    <div class="service-list">
                                                        <h2>kitchen</h2>
                                                        <ul>
                                                            <li class="item-clr2">Wipe cupboards (inside/outside).</li>
                                                            <li>Wash/Dry/Put away dishes in sink</li>
                                                            <li class="item-clr2">Deep scrub of stove burners and oven.</li>
                                                            <li>Wipe Top to Bottom </li>
                                                            <ul>
                                                                <li>Microwave cleaned (inside/<span class="item-clr2">outside/top</span>)</li>
                                                                <li>Refrigerator (inside)</li>
                                                                <li>Counters and Stovetop</li>
                                                                <li>Sink </li>
                                                            </ul>
                                                            <li>Collect trash & replace garbage bags.</li>
                                                            <li>Vacuum/Mop floor.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6  col-sm-6">
                                                
                                                <div class="service-list">
                                                    <h2>Bathroom</h2>
                                                    <ul>
                                                        <li>Collect trash & replace garbage bags.</li>
                                                        <li class="item-clr2">Spot clean mold mildew on wall and ceilings.</li>
                                                        <li class="item-clr2">Deep scrub shower walls, tubs and curtains.</li>
                                                        <li>Wipe Top to Bottom</li>
                                                        <ul>
                                                            <li>Mirrors</li>
                                                            <li>Counters</li>
                                                            <li>Sinks</li>
                                                            <li>Shower/Walls</li>
                                                            <li>Bathtub</li>
                                                            <li>Toilet </li>
                                                        </ul>
                                                        <li>Vacuum/Mop floor.</li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="col-xs-12 col-md-12 col-sm-6">
                                            <div class="service-quote text-center">
                                                <p><a href="https://goo.gl/forms/ThPrAZhY5pmBnWzs1">Get a free quote</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                            
                            <!-- tab content start -->
                            
                            <!-- endt tab content  -->
                            
                        </div>
                    </div>
                    
                </div>
                <!-- End Pricing -->
                <!-- Start contact -->
                <div class="contact-wrapper">
                    <div class="container ">
                        <div class="service-content">
                            <div class="row">
                                <div class="section-title text-center">
                                    <h1>Contact Neu </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        
                                        <form class="form-horizontal" action="#" method="post">
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" name="uname"  placeholder="Name" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                                <input type="text" name="uphone" class="form-control" placeholder="Phone" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="fa fa fa-envelope" aria-hidden="true"></i></span>
                                                                <input type="text" name="umail" class="form-control" placeholder="Email" id="inputGroupSuccess2" aria-describedby="inputGroupSuccess2Status">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group ">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <textarea name="umessage" placeholder="Type your message here" class="form-control" cols="100" rows="8"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10 col-md-offset-1">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <input name="submit" type="submit" class="form-control" value="SUBMIT">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6  hidden-sm hidden-xs">
                                    <div class="contact-thumb">
                                        <img src="img/contack-sidebar.png" class="img-responsive" style="max-height: 450px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact -->
                
                <footer class=" text-center">
                    <!-- <p class="text-center">Copyright &copy | <a href="#">Privacy</a> | <a href="#">Term</a> | <a href="#">Cookies</a></p> -->
                    <ul class="list-inline">
                        <li><a href="#">Copyright &copy</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Term</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </footer>
                
                
                <!-- Start main-wrapper -->
                <!-- end main-wrapper -->
                
                <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js" type="text/javascript"></script>
                <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
                <script src="js/smoot-scroll.js"></script>
                <script src="js/custom-script.js"></script>
                <script>
                
                $(document).ready(function () {
                $("#owl").owlCarousel({
                navigation: false,
                slideSpeed: 100,
                paginationSpeed: 800,
                singleItem: true,
                autoPlay: true
                });
                });
                </script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            </body>
        </html>