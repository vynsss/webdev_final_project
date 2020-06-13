<?php
    include 'include/navbar.php';
    include 'php/user.php';
?>

<style>
    .center{
        width: 150px;
        margin: 40px auto;

    }
    .featured-property {
        position: relative;
        background: #fff;
        margin-top: -100px;
        -webkit-box-shadow: 0 0 20px -5px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 20px -5px rgba(0, 0, 0, 0.1); }
    .featured-property div {
        width: 100%; }
</style>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balipantai.jpg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Profile</h1>
                    <p>Welcome Back!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container" data-aos="fade-up">
            <!--<div class="row">-->
                <!--<div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">-->
                    <!--<h2 class="mb-5">All Categories</h2>-->
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, fugit nam obcaecati fuga itaque deserunt-->
                        <!--officia, error reiciendis ab quod?</p>-->
                <!--</div>-->
            <!--</div>-->
            <div class="row" >
                <!-- <a href="home_wares.html"><div class="col-md-6 col-lg-12 mb-5 mb-lg-5" > -->
                    <div class="team-member" style="width:250px;height:250px;">

                        <img src="images/person_1.jpg" alt="Image" class="img-fluid" >

                        <!-- <div class="text" style="text-align: center"> -->

                            <!--this <p></p> itu biar edit picture nya di middle cos gbisa idk why-->
                            <!-- <p class="mb-4" style="color: rgba(51, 51, 51,0.1)">Lorem ipsum dolor sit amet consectetur adipisicing</p>
                            <h2 class="mb-2 font-weight-light h2" style="text-align: center">Edit Picture</h2> -->
                            <!--<span class="d-block mb-2 text-white">Decor Items, Decor Materials, Sculptures, Ethnic & Tribal</span>-->
                            <!--<p class="mb-4" style="color: rgba(51, 51, 51,0.1)">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam reprehenderit nemo.</p>-->
                            <!-- <p>
                                <a class="text-white p-2"></a>
                                <a class="text-white p-2"></a>
                                <a class="text-white p-2"></a>
                            </p>
                        </div> -->

                    </div>
                    <?php
                        $id = $_COOKIE["user_id"];
                        $url = "http://user-service-fp.herokuapp.com/api/data?id={$id}&check=abc123";
                        $test_datas = fopen($url, "r");
                        $json_test = stream_get_contents($test_datas);
                        fclose($test_datas);


                        $data_test = json_decode($json_test);
                        // print $data_test->first_name;
                        // print '<hr>';

                        print '<p style="color: white;text-indent: 500px">lorem</p>';
                        print '<h1 class="mb-3" style="text-indent: 50px">' .$data_test->first_name. ' ' .$data_test->last_name. '</h1>';
                        print '<h4 style="text-indent: 70px">Username: <span style="text-indent: 20px;color: #e3c4a8">@' .$data_test->username. '</span></h4>';
                        print '<h4 style="text-indent: 70px">Email: <span style="text-indent: 20px;color: #e3c4a8">' .$data_test->email. '</span></h4>';
                        print '<h4 style="text-indent: 70px">Address: <span style="text-indent: 20px;color: #e3c4a8">' .$data_test->address. '</span></h4>';
                    ?>

                    
                </div>
                <!-- </a> -->

              
            </div>
        </div>
    </div>

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >

                <div class="col-md-13 col-lg-9 mb-5">



                    <form action="#" class="contact-form">

                        <p style="color: #fff">h</p>

                        <h1 style="text-align: center">History</h1>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">323</a></span> </h2>
                        <p>23/05/2018</p>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">369</a></span> </h2>
                        <p>23/05/2018</p>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">398</a></span> </h2>
                        <p>23/05/2018</p>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">401</a></span> </h2>
                        <p>23/05/2018</p>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">422</a></span> </h2>
                        <p>23/05/2018</p>
                        <hr>

                    </form>
                </div>

            </div>

        </div>
    </div>

<?php
    include 'include/footer.php';
?>