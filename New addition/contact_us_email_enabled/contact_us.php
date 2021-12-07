<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>

        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="contact_us.css" rel="stylesheet">

    </head>

    <body>
 
            <div class="space">
                <h1>Contact us</h1>

            </div>
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12 mx-auto"></div>
                        <h2 class="mb-4 text-center">Dont' be shy, write to us</h2>

                            <form action="send_email.php" method="post" class="contact-form" role="form">

                                <div class="row">
                                    
                                    <div class="col-lg-6 col-6">
                                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                    </div>

                                    <div class="col-12 my-4">
                                        <label for="message" class="form-label">How can we help?</label>

                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us about the project" required></textarea>
                                        
                                    </div>

                                    <div class="col-12">
                                        <label for="services" class="form-label">How was the Service<sup class="text-danger">*</sup></label>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-check">
                                            <input type="radio" id="checkbox1" name="checkbox" class="form-check-input" value="Bad">

                                            <label class="form-check-label" for="checkbox1">Bad</label>
                                            </div>
                                    </div>

                                    <div class="col-lg-4 col-12 my-2 my-lg-0">
                                        <div class="form-check">
                                            <input type="radio" id="checkbox2" name="checkbox" class="form-check-input" value="Average">

                                            <label class="form-check-label" for="checkbox2">Average</label>
                                            </div>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-check">
                                            <input type="radio" id="checkbox3" name="checkbox" class="form-check-input" value="best" >

                                            <label class="form-check-label" for="checkbox3">Best</label>
                                            </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-12 mx-auto mt-5">
                                    <button type="submit" name="submit" class="form-control">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </body>
