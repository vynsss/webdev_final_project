<?php
    include 'include/login_signup.php';
?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balivilla.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Sign Up</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >

                <div class="col-md-13 col-lg-9 mb-5">


                    <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
                    <form action="http://localhost:8000/api/register" method="POST" name="register" target="hiddenFrame" class="contact-form">

                        <p style="color: #fff">h</p>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="firstname">First Name</label>
                                <input type="text" name="f_name" id="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="lastname">Last Name</label>
                                <input type="text" name="l_name"id="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="User name" required>
                                <!-- <p style="color: red">Invalid Username</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                <!-- <p style="color: red">Invalid Email</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" onkeyup='check();' required>
                                <!-- <p style="color: red">Invalid Password</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" onkeyup='check();' required>
                                <span id="message"></span>
                                <!-- <p style="color: red">Password Doesn't Match</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="address">Address</label>
                                <textarea name="address" id="address" cols="30" rows="5" class="form-control"
                                          placeholder="Say hello to us" required></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" id="register_button" value="Sign Up" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>
    <p style="color: white">.</p>

    </div>

    <script>
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
            }
        }

        document.getElementById("register_button").onclick = function () {
            location.href = "https://frontend-fp.herokuapp.com/index.php";
        };
    </script>

<?php
    include 'include/footer.php';
?>