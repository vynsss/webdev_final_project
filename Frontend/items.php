<?php
    include 'include/navbar.php';
?>

    <div class="site-blocks-cover overlay" style="background-image: url('images/balisunset.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1>Items</h1>
                    <!--<p>We are the No.1 Online Wholesale Store & Sourcing Agency in Bali & Indonesia.</p>-->
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <!-- <div class="featured-property-half d-flex">  -->
            <div class = "col-lg-12">
                <?php
                    if(isset($_SESSION["product"])){
                        //to populate product data
                        $id = $_SESSION["product"];
                        $url = "https://product-service-fp.herokuapp.com/api/product?id={$id}";
                        $test_datas = fopen($url, "r");
                        $json_test = stream_get_contents($test_datas);
                        fclose($test_datas);

                        $data_test = json_decode($json_test);
                        
                        $img = $data_test->result[0]->image;
                        // print "<div class='image' style='background-image: url('images/". $data_test->result[0]->image ."')'></div>";
                        print '<figure>';
                        print '<img src="images/'.$img.'" alt="Image" class="img-fluid" >';
                        print '</figure>';
                        // <div class="image" style="background-image: url('images/img_4.jpg')"></div>

                        print '<div class="text">';

                            print '<h2>' .$data_test->result[0]->name. '</h2>';
                            print '<p class="mb-5">' .$data_test->result[0]->description. '</p>';
                            print '<ul class="property-list-details mb-5">';
                                print '<li>Price: <strong class="text-black">Rp. ' .$data_test->result[0]->price. '</strong></li>';
                                print '<li><strong>' .$data_test->status. '</strong></li>';
                                // <!--<li>location: <strong>Jl. Raya Pantai Berawa Gg Bisma No. 1  Canggu, Bali, Indonesia</strong></li>-->
                            print '</ul>';

                            print '<iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>';
                            print '<form action="https://order-service-fp.herokuapp.com/api/carts/create" method="POST" name="add_cart" target="hiddenFrame">';
                                print '<label class="font-weight-bold" for="quantity">Quantity</label>';
                                print '<input name="quantity" id="quantity" class="input-number" type="number" value="1" min="1" max="1000">';
                                print '<input type="hidden" name="product_id" id="product_id" value="' .$id. '">';
                                print '<input type="hidden" name="user_id" id="user_id" value="' .$_COOKIE["user_id"]. '">';

                                // print '<p><a href="#" class="btn btn-primary px-4 py-3">Add to Cart</a></p>';
                                print '<p></p>';
                                print '<input type="submit" id="add_button" value="Add to Cart" class="btn btn-primary py-3 px-4">';
                            print '</form>';
                    } else {
                        print '<h2>Sorry, it seems you were away for too long. Please go back to home page!</h2>';
                    }
                    ?>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <p style="color: white">h</p>

    <script>
        document.getElementById("add_button").onclick = function () {
            location.href = "items.php";
        };
    </script>

<?php
    include 'include/footer.php';
?>