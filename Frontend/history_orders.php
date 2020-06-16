<?php
    include 'include/navbar.php';
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
                    <h1 class="text-white">Orders</h1>
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

                        <?php
                            if(isset($_COOKIE["user_id"])){
                                //for order
                                $id = $_SESSION["order"];
                                $user_id = $_COOKIE["user_id"];
                                $url = fopen("https://order-service-fp.herokuapp.com/api/order/id?id={$id}&user_id={$user_id}", "r");
                                $json = stream_get_contents($url);
                                fclose($url);
                
                                $data = json_decode($json);
                                // print $data_europeana->product[0]->name;

                                print '<h1 style="text-align: center">Order : #<span style="color: #e3c4a8">' .$_SESSION["order"]. '</span> </h1>';
                                print '<h3 style="text-align: right">' .$data->status. '</h3>';
                                print '<p style="text-align: right">' .$data->date. '</p>';
                                print '<hr>';
                                
                                foreach($data->order as $item) {
                                    $product_id = $item->product_id;
                                    $url2 = "https://product-service-fp.herokuapp.com/api/product?id={$product_id}";
                                    $test_datas2 = fopen($url2, "r");
                                    $json_test2 = stream_get_contents($test_datas2);
                                    fclose($test_datas2);

                                    $data_test = json_decode($json_test2);

                                    print '<h2 class="mb-3">' .$data_test->result[0]->name. '</h2>';
                                    print '<p style="text-align: right">Quantity :<span style="text-indent: 20px">' .$item->quantity. '</span></p>';
                                    print '<p style="text-align: right">Total Price :<span style="text-indent: 20px">Rp. ' .$data_test->result[0]->price*$item->quantity. '</span></p>';
                                    print '<hr>';
                                }
                            } else{
                                print'<h2 class="mb-3">It seems you were away for too long! Please login again.</h2>';
                            }
                        ?>

                    </form>
                </div>

            </div>

        </div>
    </div>

<?php
    include 'include/footer.php';
?>