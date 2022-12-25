<?php
include "header.php";
?>
<title>Contact</title>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(images/Contact.png);">
        <div class="container">
          <h2 class="breadcrumbs-custom__title">Contacts</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>
      <!-- Get in Touch-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered__main text-center">
              <div class="layout-bordered__main-inner">
                <h3>Get in Touch</h3>
                <b><p style="color:black">We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.</p></b>
                <!-- RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="row align-items-md-end row-20">
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                        <label class="form-label" for="contact-first-name">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                        <label class="form-label" for="contact-phone">Phone</label>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message">Your Message</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email">E-mail</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <button class="button button-block button-primary" type="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="layout-bordered__aside">
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Get social</p>
                <ul class="list-inline-xs">
                  <li><a class="icon icon-sm icon-default fa fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-google" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-youtube" href="#"></a></li>
                </ul>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Phone</p>
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit__body"><a href="tel:#">+91 9409447069</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">E-mail</p>
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                  <div class="unit__body"><a href="mailto:#">dairyfarmmgtsys@gmail.com</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Address</p>
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                  <div class="unit__body"><a href="#">Om Engineering College <br> Junagadh, Gujarat</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- RD Google Map-->
   
     
  <?php
  include "footer.php";
  ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>