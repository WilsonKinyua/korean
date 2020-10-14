<?php include "includes/header.php"; ?>

<div class="inner-banner-w3lso d-flex flex-column justify-content-center align-items-center" style="background: url('https://cdn.pixabay.com/photo/2015/05/15/14/22/conference-room-768441_960_720.jpg') no-repeat center;
    background-size: cover;
    min-height: 300px;
    position: relative;
    z-index: 0;">
</div>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb d-flex justify-content-center">
        <li class="breadcrumb-item">
            <a href="index.php" class="m-0">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Jobs Available</li>
        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
    </ol>
</nav>


  <div class="site-wrap">
    <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
          </div>
        </div>
        <div class="mb-5">
          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-1.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-primary px-2 py-1 mb-3">Full Time</span>
              <h2><a href="job-single.php">ICT intern</a> </h2>
              <p class="meta">Publisher: <strong>Korean</strong> Kenya <strong>Solar</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Nairobi</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-2.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-warning px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">Office Assistant</a> </h2>
              <p class="meta">Publisher: <strong>Korean</strong> Kenya <strong>Solar</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Nairobi</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

          <div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">
            <div class="col-md-2">
              <a href="job-single.php"><img src="images/featured-listing-3.jpg" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-md-4">
              <span class="badge badge-success px-2 py-1 mb-3">Full-time</span>
              <h2><a href="job-single.php">Procurment Officer</a> </h2>
              <p class="meta">Publisher: <strong>Korean</strong> Kenya <strong>Solar</strong></p>
            </div>
            <div class="col-md-3 text-left">
              <h3>Nairobi</h3>
              <span class="meta">Kenya</span>
            </div>
            <div class="col-md-3 text-md-right">
              <strong class="text-black">$60k &mdash; $100k</strong>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div>


<?php include "includes/footer.php"; ?>