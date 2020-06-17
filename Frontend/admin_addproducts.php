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
                    
                    <iframe name="hiddenFrame" width="0" height="0" border="0" style="display: none;"></iframe>
                    <form action="http://product-service-fp.herokuapp.com/api/admin/products/create" method="POST" name="add_product" target="hiddenFrame" class="contact-form">

                        <p style="color: #fff">h</p>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="productname">Product Name</label>
                                <input type="text" name="name" id="productname" class="form-control" placeholder="Product Name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" placeholder="Price" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="Quantity">Description</label>
                                <input type="text" name="description" id="Quantity" class="form-control" placeholder="First Name" required>
                                <!-- <p style="color: red">Invalid Quantity</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="Quantity">Image</label>
                                <!-- <input type="text" id="Quantity" class="form-control" placeholder="First Name" required> -->
                                <select id="image" name="image" class="form-control" required>
                                    <option value=""></option>
                                    <option value="img_1.jpg">1</option>
                                    <option value="img_2.jpg">2</option>
                                    <option value="img_3.jpg">3</option>
                                    <option value="img_4.jpg">4</option>
                                </select required>
                                <!-- <p style="color: red">Invalid Quantity</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="Quantity">Category</label>
                                <!-- <input type="text" id="Quantity" class="form-control" placeholder="First Name"> -->
                                <select id="categories" name="category_id" class="form-control" required>
                                    <option value=""></option>
                                    <option value="1">Home wares</option>
                                    <option value="2">Soft Furnitures</option>
                                    <option value="3">Tableware</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Home Furnitures</option>
                                    <option value="6">Clothing</option>
                                </select>
                                <!-- <p style="color: red">Invalid Quantity</p> -->
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" id="add" value="Add" class="btn btn-primary py-3 px-4">
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
    document.getElementById("add").onclick = function () {
        location.href = "admin_addproducts.php";
    };
</script>

<?php
    include 'include/footer.php';
?>