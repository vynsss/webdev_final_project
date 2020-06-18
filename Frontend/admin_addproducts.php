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

<?php
    include 'include/admin.php';
?>  
    </div>

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >
                <div class="col-md-13 col-lg-9 mb-5">
                    <?php
                        if(isset($_COOKIE["user_id"])){
                            if($_COOKIE["user_id"] == 1){
                                print '<iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>';
                                print '<form action="http://product-service-fp.herokuapp.com/api/admin/products/create" method="POST" name="add_product" target="hiddenFrame" class="contact-form">';

                                    print '<p style="color: #fff">h</p>';

                                    print '<div class="row form-group">';
                                        print '<div class="col-md-12 mb-3 mb-md-0">';
                                            print '<label class="font-weight-bold" for="productname">Product Name</label>';
                                        print ' <input type="text" name="name" id="productname" class="form-control" placeholder="Product Name" required>';
                                        print '</div>';
                                    print '</div>';
                                    print '<div class="row form-group">';
                                        print '<div class="col-md-12 mb-3 mb-md-0">';
                                            print '<label class="font-weight-bold" for="price">Price</label>';
                                            print '<input type="number" name="price" id="price" class="form-control" placeholder="Price" required>';
                                    print ' </div>';
                                    print '</div>';
                                    print '<div class="row form-group">';
                                        print '<div class="col-md-12 mb-3 mb-md-0">';
                                            print '<label class="font-weight-bold" for="Quantity">Description</label>';
                                            print '<input type="text" name="description" id="Quantity" class="form-control" placeholder="First Name" required>';
                                    print ' </div>';
                                    print '</div>';
                                    print '<div class="row form-group">';
                                        print '<div class="col-md-12 mb-3 mb-md-0">';
                                        print ' <label class="font-weight-bold" for="Quantity">Image</label>';
                                            print '<select id="image" name="image" class="form-control" required>';
                                                print '<option value=""></option>';
                                                print '<option value="img_1.jpg">1</option>';
                                                print '<option value="img_2.jpg">2</option>';
                                                print '<option value="img_3.jpg">3</option>';
                                                print '<option value="img_4.jpg">4</option>';
                                            print '</select required>';
                                        print '</div>';
                                    print '</div>';
                                    print '<div class="row form-group">';
                                        print '<div class="col-md-12 mb-3 mb-md-0">';
                                        print ' <label class="font-weight-bold" for="Quantity">Category</label>';
                                        print ' <select id="categories" name="category_id" class="form-control" required>';
                                                print '<option value=""></option>';
                                                print '<option value="1">Home wares</option>';
                                                print '<option value="2">Soft Furnitures</option>';
                                                print '<option value="3">Tableware</option>';
                                                print '<option value="4">Fashion</option>';
                                                print '<option value="5">Home Furnitures</option>';
                                                print '<option value="6">Clothing</option>';
                                            print '</select>';
                                        print '</div>';
                                    print '</div>';
                                    print '<div class="row form-group">';
                                        print '<div class="col-md-12">';
                                            print '<input type="submit" id="add" value="Add" class="btn btn-primary py-3 px-4">';
                                        print '</div>';
                                    print '</div>';
                                print '</form>';
                            } else{
                                print '<h2>Sorry, you are not allowed here.</h2>';
                                }
                        } else{
                            print '<h2>You are not logged in.</h2>';
                        }
                    ?>
                </div>

            </div>

        </div>
    </div>
    <p style="color: white">.</p>

</div>

<script>
    document.getElementById("add").onclick = function () {
        // location.href = "https://balibebek.live/admin_addproducts.php";
    };
</script>

<?php
    include 'include/footer.php';
?>