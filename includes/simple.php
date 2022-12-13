<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<section id="contact" class="get-started" style="padding-top:10rem;">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Get Started</h1>
      <div class="heading-line"></div>
      <p class="lh-lg">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis recusandae tempore in.
      </p>
    </div>
    <!--START CTA CONTENT-->
    <div class="row text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <div class="cta-info w-100">
         <h4 class="display-4">Contact Us</h4>
         <p class="lh-lg mt-5 text-white">206-849-2789
          <span>
            <i class="fas fa-phone-alt p-3"></i>
        </span>
         </p>
         <p class="lh-lg">bensmolen@gmail.com
          <span>
            <i class="fa-solid fa-envelope white p-3"></i>
          </span>
         </p>
         <p class="lh-lg">Mon-Fri 9:00am - 5:00pm
          <span>
            <i class="fa-solid fa-clock white p-3"></i>
          </span>
         </p>
         <hr class="white">
         <p class="lh-lg">Everett, WA 98201
          <span>
            <i class="fa-sharp fa-solid fa-location-dot white p-3"></i>
          </span>
         </p>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
      <div class="form w-100 pb-2">
        <h4 class="display-3--title mb-5">Start your project today!</h4>
        <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
          <div class="col-lg-6 col-md-6 mb-3"><input type="text" required="required" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg"></div>
          <div class="col-lg-6 col-md-6 mb-3"><input type="text" required="required" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg"></div>
          <div class="col-lg-12 mb-3"><input type="email" required="required" placeholder="email Address" id="inputEmail" class="shadow form-control form-control-lg"></div>
          <div class="col-lg-12 mb-3"><textarea placeholder="Message" required="required" name="message" id="message" rows="8" class="shadow form-control form-control-lg"></textarea>
          </div>
          <div class="col-lg-6 col-md-6 mb-3 g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
          <!--div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div-->
          <div class="text-center d-grid mt-1">
            <button type="submit" value="submit" class="btn btn-primary rounded-pill pt-3 pb-3">
              Submit
              <i class="fas fa-paper-plane"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>