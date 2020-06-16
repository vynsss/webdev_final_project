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



                    <form action="#" class="contact-form">

                        <p style="color: #fff">h</p>

                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="productname">Product Name</label>
                                <input type="text" id="productname" class="form-control" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="price">Price</label>
                                <input type="text" id="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="Quantity">Quantity</label>
                                <input type="text" id="Quantity" class="form-control" placeholder="First Name">
                                <p style="color: red">Invalid Quantity</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Add" class="btn btn-primary py-3 px-4">
                            </div>
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>
    <p style="color: white">.</p>

</div>

<?php
    include 'include/footer.php';
?>