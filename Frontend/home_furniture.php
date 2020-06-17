<?php
    include 'include/navbar.php';
?>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('images/balifurniture.jpeg');"
         data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white">Home Furnitures</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php
                    $products = fopen("https://product-service-fp.herokuapp.com/api/products/category?category_id=5", "r");
                    $product = stream_get_contents($products);
                    fclose($products);

                    $data = json_decode($product);

                    foreach($data->result as $item) {
                        print '<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">';
                        print '<a href="php/product.php?id='.$item->id.'"><img src="images/'.$item->image.'" alt="Image" class="img-fluid"></a>';
                        print '<div class="p-4 bg-white">';
                        print '<span class="d-block text-secondary small text-uppercase">Rp'. $item->price .'</span>';
                        print '<h2 class="h5 text-black mb-3"><a href="php/product.php?id='.$item->id.'">'. $item->name .'</a></h2>';
                        print '</div>';
                        print '</div>';
                    }
                ?>	
            </div>
        </div>
    </div>
</div>

<?php
    include 'include/footer.php';
?>