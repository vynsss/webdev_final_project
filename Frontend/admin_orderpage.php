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

<?php
    include 'include/admin.php';
?>  

    <div class="container">
        <div class="featured-property d-flex">
            <div class="row justify-content-center"  >

                <div class="col-md-13 col-lg-9 mb-5">



                    <form action="#" class="contact-form">

                        <p style="color: #fff">h</p>

                        <h1 style="text-align: center">History</h1>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">323</a></span> </h2>
                        <p>Customer Name: <span>Vicky</span></p>
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="outofstock">Unhandled</option>
                                <option value="available">Handled</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">369</a></span> </h2>
                        <p>Customer Name: <span>Vicky</span></p>
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="outofstock">Unhandled</option>
                                <option value="available">Handled</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">398</a></span> </h2>
                        <p>Customer Name: <span>Vicky</span></p>
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="outofstock">Unhandled</option>
                                <option value="available">Handled</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">401</a></span> </h2>
                        <p>Customer Name: <span>Vicky</span></p>
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="outofstock">Unhandled</option>
                                <option value="available">Handled</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Update">
                        </form>
                        <hr>

                        <h2>Order : #<span style="color: #e3c4a8"><a href="#">422</a></span> </h2>
                        <p>Customer Name: <span>Vicky</span></p>
                        <form action="/action_page.php">
                            <label for="status">Status :</label>
                            <select name="status" id="status">
                                <option value="outofstock">Unhandled</option>
                                <option value="available">Handled</option>
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