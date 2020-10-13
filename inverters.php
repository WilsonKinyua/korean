<?php


include "includes/header.php"; 

include "solars/tcpdf/fpdf.php";

?>

<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw==" crossorigin="anonymous" />

<!--===============================================================================================-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!--===============================================================================================-->
    <!-- inner banner -->
    <div class="inner-banner-w3lso d-flex flex-column justify-content-center align-items-center" 
    style="background: url('https://images.squarespace-cdn.com/content/v1/5354537ce4b0e65f5c20d562/1584447807368-46Y7VPM9PCSEED94X3RL/ke17ZwdGBToddI8pDm48kMgCVLvWDI3aGgT04kBoNCsUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKcrrwnsOV4zr6-8lZKcBIFHJWRwa4V8o1STv-L88G1VKz8YYXE-NG5RYi3rpeDuXmw/Solar+charge+controller+basic+configuration.png') no-repeat center;
    background-size: cover;
    min-height: 300px;
    position: relative;
    z-index: 0;">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Inverters & Electrical </li>
        </ol>
    </nav>

<div class="table-body mt-5">
    <div class="m-3">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <select name="search_filter" id="search_filter" class="form-control selectpicker">
                    <option value=''>Select Inverters & Electrical </option>
                    <?php
                    $query = "SELECT * FROM products WHERE category = 'Inverters & Electrical'";
                    $data = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
<!-- ===============================================To generate the pdf =========================================== -->
                <a href="solars/generate_pdf.php" class="btn btn-primary btn-sm" >Download Our Off Solar Panel Guide</a>
            </div>
            <div>
            </div>
        </div>
    </div>
    <input type="hidden" name="store_owner" id="store_owner" />
    <div style="clear:both"></div>
    <?php
    if (isset($_SESSION['danger'])) {
        echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['danger']  . "</div>";
        unset($_SESSION['danger']);
    }
    ?>
    <?php
    if (isset($_SESSION['success'])) {
        echo "<div class='alert alert-success' role='alert'>" . $_SESSION['success']  . "</div>";
        unset($_SESSION['success']);
    }
    ?>
    <div class="table100 ver1 m-b-110 table-responsive">
        <div class="table100-head mb-4">
            <table >
                <thead>
                    <tr class="row100 head">
                        <th class="cell100 column1">Item Name</th>
                        <th class="cell100 column2">Manufacturer</th>
                        <th class="cell100 column3">Price</th>
                        <th class="cell100 column4">Serial Number</th>
                        <th class="cell100 column5">Capacity</th>
                        <th class="cell100 column6">Quantity Available</th>
                        <th class="cell100 column7">Description</th>
                    </tr>
                </thead>
            </table>
        </div>

        <div class="table100-body js-pscroll mt-3">
            <table class="table table-bordered">
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <!-- <script src="solars/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->
     <!--===============================================================================================-->
    <script>
        $('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function() {
                ps.update();
            })
        });
        
    </script>
    <!--===============================================================================================-->
    <script src="solars/js/main.js"></script>
     <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
     <!--===============================================================================================-->
    <script>
        flatpickr('#timePicker', {
        enableTime: true,
        enableSeconds: true
        });
    </script>
     <!--===============================================================================================-->
    <script>
           $(document).ready(function() {

                    load_data();
                    function load_data(query = '') {
                            $.ajax({
                                url: "solars/inverters_pull.php",
                                method: "POST",
                                data: { query: query },
                                success: function(data) {
                                    $('tbody').html(data);
                                }
                            })
                    }

                    $('#search_filter').change(function() {
                            $('#store_owner').val($('#search_filter').val());
                            var query = $('#store_owner').val();
                            load_data(query);
                    });

        });
    </script>


<?php include "includes/footer.php"; ?>