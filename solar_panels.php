<?php


include "includes/header.php"; 

include "solars/tcpdf/fpdf.php";

?>

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="solar/vendor/perfect-scrollbar/perfect-scrollbar.css">

<!--===============================================================================================-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!--===============================================================================================-->
    <!-- inner banner -->
    <div class="inner-banner-w3lsp d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.php" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Solar Panels </li>
        </ol>
    </nav>

<div class="table-body mt-5">
    <div class="m-3">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <select name="search_filter" id="search_filter" class="form-control selectpicker">
                    <option value=''>Select Solar Panel </option>
                    <?php
                    $query = "SELECT * FROM products";
                    $data = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($data)) {
                        echo '<option value="' . $row["item_name"] . '">' . $row["item_name"] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
<!-- ===============================================To generate the pdf =========================================== -->
                <a href="solars/generate_pdf.php" class="btn btn-primary btn-sm" >Download Our Solar Panel Guide</a>
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
    <script src="solars/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="solars/vendor/bootstrap/js/bootstrap.min.js"></script>
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
                                url: "solars/store.php",
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