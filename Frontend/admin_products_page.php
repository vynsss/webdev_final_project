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

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center">
                <div class="col-md-13 col-lg-9 mb-5">
                    <form action="#" class="contact-form">
                        <p style="color: #fff">h</p>
                        <h1 style="text-align: center">Products</h1>
                        <hr>

                        <?php
                            if(isset($_COOKIE["user_id"])){
                                if($_COOKIE["user_id"]==1){
                                    $products = fopen("https://product-service-fp.herokuapp.com/api/admin/products", "r");
                                    $product = stream_get_contents($products);
                                    fclose($products);

                                    $data = json_decode($product);
                                    print '<form></form>';

                                    foreach($data->product as $item) {
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
                                            print '<br>';
                                            if($item->category_id == 1){
                                                print '<label for="category">Category : Home Wares</label>';
                                            } elseif($item->category_id == 2){
                                                print '<label for="category">Category : Soft Furnitures</label>';
                                            } elseif($item->category_id == 3){
                                                print '<label for="category">Category : Tableware</label>';
                                            } elseif($item->category_id == 4){
                                                print '<label for="category">Category : Fashion</label>';
                                            } elseif($item->category_id == 5){
                                                print '<label for="category">Category : Home Furniture</label>';
                                            } else{
                                                print '<label for="category">Category : Clothings</label>';
                                            }
                                            print '<br><br>';
                                            // print '<input type="submit" value="Update">';
                                            print '<input type="hidden" name="id" value="'.$item->id.'">';
                                            print '<input type="submit" id="update" value="Update" class="btn btn-primary py-3 px-4">';
                                        print '</form>';
                                        print '<hr>';
                                    }
                                } else{
                                print '<h2>Sorry, you are not allowed here.</h2>';
                                }
                            } else{
                                print '<h2>You are not logged in.</h2>';
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