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
                        <p style="text-align: right">Total Items: <span>1234</span></p>
                        <hr>

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