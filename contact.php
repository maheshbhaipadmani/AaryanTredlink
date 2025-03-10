<?php
$Title = "Contact Aaryan Tradelink | Get in Touch with Us Today";
$MetaDescription = "Need help? Contact Aaryan Tradelink for IT products, office automation, air conditioning, and refrigeration solutions. Call us or visit our office for assistance.";
$MetaKeywords = "contact Aaryan Tradelink, customer support, IT product inquiries, office automation help, AC installation inquiry, refrigeration services, business contact, electronics supplier contact, technical support";
?>

<?php
include __DIR__ . '/A_Layout/Header/header.php';
?>
            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/8.webp" class="jarallax-img" alt="contact bg">
                <div class="container relative z-index-1000">
                    <div class="container relative z-index-1000">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="subtitle s2 bg-color text-light wow fadeInUp mb-2">Contact Us</div>
                                <h1>Get In Touch</h1>
                                <ul class="crumb">
                                    <li><a href="Home">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 text-lg-end">
                                <div class="fs-20 fw-600 no-bottom sm-hide">Connect with Us for Seamless Support </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="de-overlay"></div>
            </section>
            <!-- section close -->

            <div class="bg-color relative z-index-1000 mt-40 mb40">
                <div class="border-white-6 text-center bg-color text-white w-84px h-80px p-3 circle absolute abs-center sm-hide">
                    <i class="icofont-envelope fs-36"></i>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class="row g-4 gx-5">
                        <div class="col-lg-8">
                            <p>Whether you have a question, a suggestion, or just want to say hello, this is the place
                                to do it. Please fill out the form below with your details and message, and we'll get
                                back to you as soon as possible.</p>


                            <form name="contactForm" id="contact_form"
                                class="position-relative z1000 bg-light p-5 rounded" method="post" action="contact.php">
                                <div class="row gx-4">
                                    <div class="col-lg-12 col-md-12 mb10">
                                        <div class="field-set">
                                            <span class="d-label">Name</span>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Your Name" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Email</span>
                                            <input type="text" name="email" id="email" class="form-control"
                                                placeholder="Your Email" required>
                                        </div>

                                        <div class="field-set">
                                            <span class="d-label">Phone</span>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                placeholder="Your Phone" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="field-set mb20">
                                            <span class="d-label">Message</span>
                                            <textarea name="message" id="message" class="form-control"
                                                placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                <div id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Message' class="btn-main">
                                </div>

                                <div id="success_message" class='success'>
                                    Your message has been sent successfully. Refresh this page if you want to send more
                                    messages.
                                </div>
                                <div id="error_message" class='error'>
                                    Sorry there was an error sending your form.
                                </div>
                            </form>

                        </div>

                        <div class="col-lg-4">
                            <h4>Our Office</h4>
                            <div class="img-with-cap mb20">
                                <div class="d-title">Mon - Fri 08.00 AM - 18.00 PM</div>
                                <div class="d-overlay"></div>
                                <img src="images/misc/5.webp" class="img-fullwidth rounded-1" alt="misc 5">
                            </div>

                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark">
                                <i class="icofont-location-pin me-2 id-color-2"></i>
                                <a href="https://maps.google.com/?q=Spectrum+Complex,Swami+Vivekanand+Chowk,Near+Yash+Arian,Memnagar,Ahmedabad,Gujarat-380052"
                                    target="_blank" style="text-decoration: none; color: inherit;">
                                    Office Location
                                </a>
                            </div>
                            GF-2, Spectrum Complex, Swami Vivekanand Chowk, Near Yash Arian, Memnagar, Ahmedabad,
                            Gujarat – 380052.

                            <div class="fw-bold text-dark">
                                <i class="icofont-location-pin me-2 id-color-2"></i>
                                <a href="https://maps.google.com/?q=DEEP,Amarnath+Plot,Opp+Amarnath+Mahadev+Mandir,Kalawad+Road,Rajkot,Gujarat-360001"
                                    target="_blank" style="text-decoration: none; color: inherit;">
                                    Rajkot Office
                                </a>
                            </div>
                            1/4, “DEEP”, Amarnath Plot, Opp Amarnath Mahadev Mandir, B/h Swaminarayn Temple, Kalawad
                            Road, Rajkot, Gujarat – 360001.


                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark">
                                <i class="icofont-envelope me-2 id-color-2"></i>Send a Message
                            </div>
                            <a href="mailto:info@aaryantradelink.com" style="text-decoration: none; color: inherit;">
                                info@aaryantradelink.com
                            </a>,
                            <a href="mailto:ashish@aaryantradelink.com" style="text-decoration: none; color: inherit;">
                                ashish@aaryantradelink.com
                            </a>


                            <div class="spacer-single"></div>

                            <div class="fw-bold text-dark">
                                <i class="icofont-phone me-2 id-color-2"></i>Call Us Directly
                            </div>
                            <a href="tel:+919099903098" style="text-decoration: none; color: inherit;">
                                +91-9099903098
                            </a>,
                            <a href="tel:+919824000266" style="text-decoration: none; color: inherit;">
                                +91-9824000266
                            </a>
                            <br>
                            <a href="tel:+917940398160" style="text-decoration: none; color: inherit;">
                                079-40398160
                            </a>


                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.2476251594057!2d72.53459382477105!3d23.05138151525356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84a3ee2a134d%3A0x213e43f546da06e8!2sSigma%20Spectrum!5e0!3m2!1sen!2sin!4v1741088348167!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>


        </div>
        <!-- content close -->
        <?php
include __DIR__ . '/A_Layout/Footer/footer.php';
?>