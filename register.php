<?php include "includes/header.php"; ?>


    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.html" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <!-- register  -->
    <div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Username</label>
                <input type="text" class="form-control" placeholder="your name" name="Name" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="recipient-email" class="col-form-label">Email</label>
                <input type="email" class="form-control" placeholder="loremipsum@email.com" name="Email" id="recipient-email"
                    required="">
            </div>
            <div class="form-group">
                <label for="password1" class="col-form-label">Password</label>
                <input type="password" class="form-control" placeholder="******" name="Password" id="password1"
                    required="">
            </div>
            <div class="form-group">
                <label for="password2" class="col-form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="******" name="Confirm Password" id="password2"
                    required="">
            </div>
            <div class="sub-w3l">
                <div class="sub-w3layouts_hub">
                    <input type="checkbox" id="brand2" value="">
                    <label for="brand2" class="mb-3 text-secondary">
                        <span></span>I Accept to the Terms & Conditions</label>
                </div>
            </div>
            <div class="right-w3l">
                <input type="submit" class="form-control bg-theme" value="Register">
            </div>
        </form>
    </div>
    <!-- //register -->

    <?php include "includes/footer.php"; ?>