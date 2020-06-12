<?php

use Dotenv\Result\Success;

include 'include/login_signup.php';
?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balivilla.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Login</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >

                <div class="col-md-13 col-lg-9 mb-5">

<!-- http://localhost/web_tutorial/fp/backend/user/api/login.php -->
                    <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
                    <form action="http://localhost:8000/api/login" method="GET" name="login" target="hiddenFrame" class="contact-form">

                        <p style="color: #fff">h</p>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="First Name" required>
                                <!-- <p style="color: red">Username Not Found</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                <!-- <p style="color: red">Invalid Password</p> -->
                         
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" id="login_button" value="Login" class="btn btn-primary py-3 px-4" onclick="getInputValue()">
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

    function getInputValue(){
        // Selecting the input element and get its value 
        var user = document.getElementById("username").value;
        var pwd = document.getElementById("password").value;
        
        // Displaying the value
        // alert(username, password);

        var url = new URL('http://localhost:8000/api/login')

        var params = {username: user, password: pwd} // or:

        url.search = new URLSearchParams(params).toString();
            fetch(url)
            .then(data => data.text())
            .then((text) => {
                console.log('request succeeded with JSON response', text)
                var data = JSON.parse(text)
                var success = data.success;
                var id = data.id;
                // console.log(id)
                if (success == true){
                    var d = new Date();
                    d.setTime(d.getTime() + (24*3600));
                    var expires = "expires="+ d.toUTCString();
                    document.cookie = "user_id" + "=" + id + ";" + expires + ";path=/";
                    console.log("successful?")
                }
            }).catch(function (error) {
                console.log('request failed', error)
            });
    }

</script>

<?php
    include 'include/footer.php';
?>