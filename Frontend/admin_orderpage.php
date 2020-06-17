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

                        <?php 
                            if(isset($_COOKIE["user_id"])){
                                $user_id = $_COOKIE["user_id"];
                                $url = fopen("https://order-service-fp.herokuapp.com/api/admin/orders/all", "r");
                                $json = stream_get_contents($url);
                                fclose($url);
                
                
                                $data = json_decode($json);
                                // print $data_europeana->product[0]->name;
                                print '<form></form>';
                
                                foreach($data->order as $item) {
                                    print '<h2>Order : #<span style="color: #e3c4a8"><a href="php/order.php?id='.$item->id.'">' .$item->id. '</a></span> </h2>';
                                    print '<p>' .$item->date. '</p>';
                                    print '<form action="php/update_status.php" method="PUT" name="add_cart">';
                                        print '<label for="status">Status :</label>';
                                        print '<select name="status_id" id="status" required>';
                                            if($item->status_id == 2){
                                                print '<option value=""></option>';
                                                print '<option value="3">pending</option>';
                                                print '<option value="4">delivered</option>';
                                            } elseif($item->status_id == 3){
                                                print '<option value=""></option>';
                                                print '<option value="4">delivered</option>';
                                            }
                                            print '<input type="hidden" name="id" value="'.$item->id.'">';
                                            
                                        print '</select>';
                                        print '<br><br>';
                                        // print '<input type="submit" value="Update">';
                                        print '<input type="submit" id="update" value="Update" class="btn btn-primary py-3 px-4">';
                                    print '</form>';
                                    print '<hr>';
                                }
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