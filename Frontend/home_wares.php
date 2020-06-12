<?php
        include 'include/navbar.php';
?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balifurniture.jpeg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Home Wares</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php
                    $products = fopen("https://product-service-fp.herokuapp.com/api/products", "r");
                    $product = stream_get_contents($products);
                    fclose($products);

                    $data = json_decode($product);

                    foreach($data->product as $item) {
                        print '<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">';
                        print '<a href="about_us.php"><img src="images/'.$item->image.'" alt="Image" class="img-fluid"></a>';
                        print '<div class="p-4 bg-white">';
                        print '<span class="d-block text-secondary small text-uppercase">Rp'. $item->price .'</span>';
                        print '<h2 class="h5 text-black mb-3"><a href="about_us.php">'. $item->name .'</a></h2>';
                        print '</div>';
                        print '</div>';
                    }
                ?>	
            </div>
        </div>

        <div class="container mt-5" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="site-block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
        include 'include/footer.php';
?>