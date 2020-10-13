<?php

    include "../config/config.php";

    if($_POST["query"] != '') {

        $search_array       = explode(",", $_POST["query"]);
        $store_owner        = "'" . implode("', '", $search_array) . "'";
        $query              = "SELECT * FROM products WHERE item_name = " . $store_owner;

        } else {

                $query   = "SELECT * FROM products WHERE category = 'Inverters & Electrical'";
        }

        $data       = mysqli_query($connection, $query);

     while($row = mysqli_fetch_assoc($data)) {

            echo '<tr class="row100 body">';
            echo "<td class='column1'>"                             . $row['item_name']           . "</td>";
            echo "<td class='column2'>"                             . $row['manufacturer']           . "</td>";
            echo "<td class='column3'>"                             . $row['price']               . "</td>";
            echo "<td class='column4'>"                             . $row['serial_number']    . "</td>";
            echo "<td class='column5'>"                             . $row['capacity']  . "</td>";
            echo "<td class='column6'>000</td>";
            echo "<td class='column7'>"                             . $row['description']          . "</td>";
            echo "</tr>";

         }
