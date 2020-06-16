<?php
    include 'include/navbar.php';
?>  

<style>
    .featured-property {
        position: relative;
        background: #fff;
        margin-top: -100px;
        -webkit-box-shadow: 0 0 20px -5px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 20px -5px rgba(0, 0, 0, 0.1); }
    .featured-property div {
        width: 100%; }
</style>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balivilla.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Admin - Login</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >

                <div class="col-md-13 col-lg-9 mb-5">



                    <form action="#" class="contact-form">

                        <p style="color: #fff">h</p>

                        <!--<div class="row form-group">-->
                        <!--<div class="col-md-12 mb-3 mb-md-0">-->
                        <!--<label class="font-weight-bold" for="firstname">First Name</label>-->
                        <!--<input type="text" id="firstname" class="form-control" placeholder="First Name">-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="row form-group">-->
                        <!--<div class="col-md-12 mb-3 mb-md-0">-->
                        <!--<label class="font-weight-bold" for="lastname">Last Name</label>-->
                        <!--<input type="text" id="lastname" class="form-control" placeholder="Last Name">-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="username">Username / Email</label>
                                <input type="text" id="username" class="form-control" placeholder="First Name">
                                <p style="color: red">Username Not Found</p>
                            </div>
                        </div>
                        <!--<div class="row form-group">-->
                        <!--<div class="col-md-12">-->
                        <!--<label class="font-weight-bold" for="email">Email</label>-->
                        <!--<input type="email" id="email" class="form-control" placeholder="Email Address">-->
                        <!--<p style="color: red">Invalid Email</p>-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="password">Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Password">
                                <p style="color: red">Invalid Password</p>
                            </div>
                        </div>
                        <!--<div class="row form-group">-->
                        <!--<div class="col-md-12">-->
                        <!--<label class="font-weight-bold" for="confirm_password">Password</label>-->
                        <!--<input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password">-->
                        <!--<p style="color: red">Password Doesn't Match</p>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="row form-group">-->
                        <!--<div class="col-md-12">-->
                        <!--<label class="font-weight-bold" for="address">Address</label>-->
                        <!--<textarea name="message" id="address" cols="30" rows="5" class="form-control"-->
                        <!--placeholder="Say hello to us"></textarea>-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Login" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>
    <p style="color: white">.</p>

</div>

<?php
    include 'include/footer.php';
?>