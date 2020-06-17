<?php
    include 'include/navbar.php';
?>  

<style>
    .dropdown{
        margin: 0 auto;
        width:250px;
    }
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

<?php
    include 'include/admin.php';
?>  

    <!--<div class="row">-->
        <!--<a href="#">Product Page</a>-->
        <!--<a href="#">Order Page</a>-->
        <!--<a href="#">Add Products</a>-->
    <!--</div>-->


    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >

                <div class="col-md-13 col-lg-9 mb-5">



                    <form action="#" class="contact-form">

                        <p style="color: #fff">h</p>

                        <h1 style="text-align: center">Products</h1>
                        <!-- <p style="text-align: right">Total Items: <span>1234</span></p> -->
                        <hr>

                        <?php
                            $products = fopen("http://localhost:8000/api/admin/products", "r");
                            $product = stream_get_contents($products);
                            fclose($products);

                            $data = json_decode($product);
                            print '<form></form>';

                            foreach($data->product as $item) {
                                // print '<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">';
                                // print '<a href="php/product.php?id='.$item->id.'"><img src="images/'.$item->image.'" alt="Image" class="img-fluid"></a>';
                                // print '<div class="p-4 bg-white">';
                                // print '<span class="d-block text-secondary small text-uppercase">Rp'. $item->price .'</span>';
                                // print '<h2 class="h5 text-black mb-3"><a href="about_us.php">'. $item->name .'</a></h2>';
                                // print '</div>';
                                // print '</div>';

                                print '<h2 class="mb-3">'. $item->name .'</h2>';
                                print '<form action="php/update_product.php">';
                                    print '<p style="text-align: left">Price: <span style="text-indent: 20px"><input type="number" name="price" min="1" value="'. $item->price .'" step="any" /></span></p>';
                                    print '<label for="status">Status : </label>';
                                    print '<select name="status_id" id="status">';    
                                    if($item->status_id == 1){
                                            print '<option value="1">Available</option>';
                                            print '<option value="2">Out Of Stock</option>';
                                        print '</select>';
                                    } else{
                                            print '<option value="2">Out Of Stock</option>';
                                            print '<option value="1">Available</option>';
                                        print '</select>';
                                    }
                                    print '</select>';
                                    print '<br><br>';
                                    // print '<input type="submit" value="Update">';
                                    print '<input type="hidden" name="id" value="'.$item->id.'">';
                                    print '<input type="submit" id="update" value="Update" class="btn btn-primary py-3 px-4">';
                                print '</form>';
                                print '<hr>';
                            }
                        ?>	

                        <!--ini klo u mau dia bisa ke page items nya-->
                        <h2 class="mb-3"><span><a href="#">Fried Chicken</a></span></h2>
                        <!--<h2 class="mb-3">Fried Chicken</h2>-->
                        <p style="text-align: left">Items Left: <span style="text-indent: 20px">43</span></p>
                        <p style="text-align: left">Price: <span style="text-indent: 20px"><input type="number" min="1" step="any" /></span></p>
                        <!--<p style="text-align: right">Status :<span style="text-indent: 20px">3</span></p>-->
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="available">Available</option>
                                <option value="outofstock">Out Of Stock</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        ​
                        <hr>

                        <h2 class="mb-3">Fried Chicken</h2>
                        <p style="text-align: left">Items Left: <span style="text-indent: 20px">43</span></p>
                        <p style="text-align: left">Price: <span style="text-indent: 20px"><input type="number" min="1" step="any" /></span></p>
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="available">Available</option>
                                <option value="outofstock">Out Of Stock</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>

                        <h2 class="mb-3">Fried Chicken</h2>
                        <p style="text-align: left">Items Left: <span style="text-indent: 20px">43</span></p>
                        <p style="text-align: left">Price: <span style="text-indent: 20px"><input type="number" min="1" step="any" /></span></p>
                        <!--<p style="text-align: right">Status :<span style="text-indent: 20px">3</span></p>-->
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="available">Available</option>
                                <option value="outofstock">Out Of Stock</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>

                        <h2 class="mb-3">Fried Chicken</h2>
                        <p style="text-align: left">Items Left: <span style="text-indent: 20px">43</span></p>
                        <p style="text-align: left">Price: <span style="text-indent: 20px"><input type="number" min="1" step="any" /></span></p>
                        <!--<p style="text-align: right">Status :<span style="text-indent: 20px">3</span></p>-->
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="available">Available</option>
                                <option value="outofstock">Out Of Stock</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>



                    </form>
                </div>

            </div>

        </div>
    </div>



<?php
    include 'include/footer.php';
?>