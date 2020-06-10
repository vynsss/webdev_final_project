<?php
    include 'include/navbar.php';
?>
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balivilla.jpg');"
    data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white">Contact Us</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </div>

  
    
    <div class="site-section border-bottom">
    <div class="container">
      <div class="row">
  
        <div class="col-md-13 col-lg-7 mb-5">
  
  
  
          <form action="#" class="contact-form">
  
            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Full Name</label>
                <input type="text" id="fullname" class="form-control" placeholder="Full Name">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email Address">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="email">Subject</label>
                <select class="col-md-12" class="selectpicker" multiple>
                  <option>General Service</option>
                  <option>Private label</option>
                  <option>Bali Style Interior Solutions</option>
                  <option>Corporate Meetings & Events</option>
                  <option>Custom Made Design</option>
                  <option>Export & Quality Control</option>
                  <option>Wholesale & Quality Control</option>
                  <option>Retail Shopping Trip</option>
                </select>

                <!--                <input type="text" id="subject" class="form-control" placeholder="Enter Subject">-->

              </div>
            </div>
  
  
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                  placeholder="Say hello to us"></textarea>
              </div>
              <div class="col-md-12">
                <p>You can attach picture if any (max 3mb, only file gif/png/jpg/pdf accepted)<br>
                  <span>
                  <input type="file" name="file-359" size="40" accept=".gif,.png,.jpg,.jpeg,.pdf" aria-invalid="false">
                  </span>
                </p>
              </div>
            </div>
  
            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
              </div>
            </div>
  
  
          </form>
        </div>
  
        <div class="col-lg-4 ml-auto">
          <div class="p-1 mb-3 bg-white">
            <h3 class="h5 text-black mb-3">Contact Info</h3>
            <p class="mb-0 font-weight-bold text-black">Address</p>
            <p class="mb-4 text-black">BALI PRODUCTS <br> Head Office
              Jl. Raya Pantai Berawa Gg Bisma No. 1
              Canggu, Bali, Indonesia</p>

            <!--Google map-->
            <div id="map-container-google-2" class="z-depth-1-half map-container" style="height:350px">
              <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.
              424575753161!2d115.14714851433061!3d-8.651107293783554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
              .1!3m3!1m2!1s0x2dd24747e07f16c3%3A0xcbd84735736fe52!2sBali+Products!5e0!3m2!1sen!2sid!4v1531900134314"
              width="100%" height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>

            <p class="mb-0 font-weight-bold text-black">Phone</p>
            <p class="mb-4"><a href="#">+62 813 3905 0050</a></p>
  
            <p class="mb-0 font-weight-bold text-black">Email Address</p>
            <p class="mb-0"><a href="#">bali_prodcts@gmail.com</a></p>
  
          </div>
  
<!--          <div class="p-4 mb-3 bg-white">-->
<!--            <h3 class="h5 text-black mb-3 text-black">More Info</h3>-->
<!--            <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic-->
<!--              consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>-->
<!--            <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>-->
<!--          </div>-->
        </div>
      </div>
    </div>
  </div>

<?php
    include 'include/footer.php';
?>