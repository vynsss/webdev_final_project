<?php
    // if(!$_REQUEST["username"] && !$_REQUEST["password"]){
// <script></script>
        // var url = new URL('https://sl.se')

        // var params = {lat:35.696233, long:139.570431} // or:
        // var params = [['lat', '35.696233'], ['long', '139.570431']]

        // url.search = new URLSearchParams(params).toString();

        // fetch(url)

        $users = fopen("http://localhost/web_tutorial/fp/backend/user/api/login.php?username=vynsss&password=123456", "r");
        $user = stream_get_contents($users);
        // fclose($contents_europeana);


        $data = json_decode($user);
        print $data->session->id;

        // foreach($data_europeana->product as $item) {
        //     print '<tr>';
        //     print '<td>'.$item->id.'</td>';
        //     print '<td>'.$item->name.'</td>';
        //     print '<td>'.$item->price.'</td>';
        //     print '<td>'.$item->description.'</td>';
        //     print '</tr>>';
        // }

        // header('Location: ../home.php');
    // }
?>