<?php
// Include necessary files
include 'navbar.php';
?>

<body>
    <!-- <?php echo "Last URI segment: " . $lastSegment;
            echo "<pre> ";
            echo $Prod_category[$lastSegment]['category_name'];
            echo BASEURL . 'cone-crushers';
            ?> -->
    <!-- Banner -->

    <section class="contact-us-banner">
        <!-- <div class="container"> -->
            <div class="">
                <img class="desktop-banner" src="<?php echo BASEURL . '/images/contact-us/Contact-us-banner-desktop.webp'?>" alt="contac=-us">
                <img class="mobile-banner" src="<?php echo BASEURL . '/images/contact-us/contact-us-banner-moblie.webp'?>" alt="contact-us">
            </div>
        <!-- </div> -->
    </section>

    <!-- 1/3 -->
    <section>
        <div class="container we_would_love">
        <div class="row">
        <div class="col-md-1 ">
        </div>
            <div class="col-md-4 "> <div class=" card-title">
                    <h3 class="title">We'd love to hear from you!</h3>
                    <p>Get in touch with our team for inquiries, support, or collaboration opportunities.</p>
                </div></div>
            <div class="col-md-2 card-upper">
                <div class=" card">
                    <div class="ico">
                        <!-- <i class="fa fa-bullseye"></i> -->
                        <img class="icons-3" src="<?php echo BASEURL . '/images/contact-us/icon/location.png'?>" alt="">
                    </div>
                    <h6 class="title">Location</h6>
                    <p>104, Terminal 9, Vile Parle, Mumbai, Maharashtra</p>
                </div>
            </div>
            <div class="col-md-2 card-upper">
                <div class="card">
                    <div class="ico">
                    <img class="icons-3" src="<?php echo BASEURL . '/images/contact-us/icon/phone.png'?>" alt="">
                    </div>
                    <h6 class="title">Phone</h6>
                    <p>+91 9594940001>
                </div>
            </div>
            <div class="col-md-2 card-upper">
                <div class="card">
                    <div class="ico">
                    <img class="icons-3" src="<?php echo BASEURL . '/images/contact-us/icon/mail.png'?>" alt="">
                    </div>
                    <h6 class="title">Email</h6>
                    <p>info@corecrushing.in</p>
                </div>
                <div class="col-md-1 ">
                </div>
            </div>

            <!-- <div class="col-md-3 card">
            <div class="ico">
                <i class="fa fa-bullseye"></i>
            </div>
            <h3 class="title">Missão</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
        <div class="col-md-3 card">
            <div class="ico">
                <i class="fa fa-eye"></i>
            </div>
            <h3 class="title">Visão</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div>
        <div class="col-md-3 card">
            <div class="ico">
                <i class="fa fa-star"></i>
            </div>
            <h3 class="title">Valores</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
        </div> -->
        </div>
        </div>
    </section>

    <!-- Map Section -->
    <section>
        <div class="container">
        <img style="    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
" src="images/india-lcoation-banner.webp" alt=""></div>
    </section>

    <!-- google map and contact form -->
    <section>
        <div class="container map-form-section">
            <div class="row">
                <div class="col-md-7 contact-us-googal-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15226.012945521285!2d78.4332499859544!3d17.435611722789762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90c83adad4c1%3A0x80973c3a608361c1!2sCFP2%2B6MW%20Amrutha%20Business%20Complex%2C%20Ameerpet%20Rd%2C%20Divyashakti%20Appartments%2C%20Ameerpet%2C%20Hyderabad%2C%20Telangana%20500016!5e0!3m2!1sen!2sin!4v1715591642994!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-5">
                <div id="footerFormContainer" class="contact-us-form" >
                                <form action="sampple-mail.php" method="post" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name" placeholder="Enter your name" required pattern="[A-Za-z\s]+" title="Name should contain alphabets only">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email ID:</label>
                                            <input type="email" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="contact_no">Contact No:</label>
                                            <input type="tel" id="contact_no" name="contact_no" placeholder="Enter your phone number" required pattern="\d{10}" title="Phone number should be exactly 10 digits">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="company_name">Company Name:</label>
                                            <input type="text" id="company_name" name="company_name" required>
                                        </div>
                                    </div>
                                    <!-- <label for="requirement">Requirement:</label> -->
                                    <div class="row">
                                        <label for="capacity">Capacity:</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="capacity_from" placeholder="From" aria-describedby="btnGroupAddon" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                            <input type="number" class="form-control" name="capacity_to" placeholder="To" aria-describedby="btnGroupAddon" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">TPH</div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <label for="number_of_decks">Number of Decks:</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="number_of_decks_from" name="number_of_decks_from" placeholder="From" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                            <input type="number" class="form-control" id="number_of_decks_to" name="number_of_decks_to" placeholder="To" required>
                                            <div class="input-group-text input_group_style_custom" id="btnGroupAddon">Dec</div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="cut_point">Cut Point:</label>
                                        <input type="number" id="cut_point" name="cut_point" required>
                                    </div>

                                    <label for="remark">Remark:</label>
                                    <textarea id="remark" name="remark"></textarea>

                                    <input type="hidden" name="form_type" value="form2">
                                    <button type="submit" name="send">Submit</button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php include 'cta.php'; ?>

    <script src="js/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js" crossorigin="anonymous"></script>
    <!-- <script src="js/jquery.counterup.min.js" crossorigin="anonymous"></script> -->

    <!-- Footer-->
    <?php include 'footer2.php'; ?>