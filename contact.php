<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dr Mayank Vats | Interventional Pulmonologist, Intensivist and Sleep Physician, Rashid hospital, Dubai.
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Interventional Pulmonologist, Intensivist and Sleep Physician, Rashid hospital, Dubai,Dr Mayank Vats, Mayank Vats"
        name="keywords">
    <meta
        content="Dr Mayank Vats is a renowned Indian Interventional Pulmonologist, Adult Pulmonologist, Intensivist and Sleep Physician.He is currently appointed at Rashid Hospital, UAE as Senior Specialist, Pulmonologist, Interventional Pulmonologist, Intensivist & Sleep Physician.Dr Vats has worked at some of the most prestigious Fortis, Escorts Hospitals in India & Zulekha & Rashid Hospital UAE.He is a Fellow at the prestigious American College of Chest Physician & Royal College of Physicians & Surgeons Glasgow,UK, American college of Physicians & the reciepient of the Saroj Jyoti Award for his work done in Scientific Research in Indian Chest Society."
        name="description">

    <?php include 'styles.php'; ?>

    <!-- =======================================================
    Theme Name: Dr Mayank Vats
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
============================-->

    <?php include 'header-static.php'; ?>

    <!-- #header -->

    <main id="main">

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="top-header section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Get in Touch</h3>
                    <p>Please fill the form to get in touch</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>Rashid Hospital, Dubai</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <!-- <p><a href="tel:+971562247007">+971 56 224 7007</a></p> -->
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">drmayankvats@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <?php include 'footer.php'; ?>

</body>

</html>