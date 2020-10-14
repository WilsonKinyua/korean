<?php include "includes/header.php"; ?>

<div class="inner-banner-w3lso d-flex flex-column justify-content-center align-items-center" style="background: url('https://cdn.pixabay.com/photo/2014/05/02/21/46/office-336368_960_720.jpg') no-repeat center;
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
        <?php echo ((!empty($errorMessage)) ? $errorMessage : '') ?>
    </ol>
</nav>

<section class="site-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                    <div class="border p-2 d-inline-block mr-3 rounded">
                        <img src="images/featured-listing-1.jpg" alt="Free Website Template By Free-Template.co">
                    </div>
                    <div>
                        <h2>Product Designer</h2>
                        <div>
                            <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span>Nairobi</span>
                            <span class="m-2"><span class="icon-room mr-2"></span>Kenya</span>
                            <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary">Full
                                    Time</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save
                            Job</a>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-block btn-primary btn-md" data-toggle="modal" data-target="#modalRegisterForm" data-whatever="@mdo">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <figure class="mb-5"><img src="images/sq_img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid rounded"></figure>
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job
                        Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores,
                        commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus.
                    </p>
                    <p>Velit unde aliquam et voluptas reiciendis non sapiente labore, deleniti asperiores blanditiis nihil quia
                        officiis dolor vero iste dolore vel molestiae saepe. Id nisi, consequuntur sunt impedit quidem, vitae
                        mollitia!</p>
                </div>
                <div class="mb-5">
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                                unde aliquam et voluptas reiciendis n Velit unde aliquam et voluptas reiciendis non sapiente
                                labore</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                                officiis dolor</span></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education +
                        Experience</h3>
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                                unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                                officiis dolor</span></li>
                    </ul>
                </div>

                <div class="mb-5">
                    <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other
                        Benifits</h3>
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Necessitatibus quibusdam facilis</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Velit
                                unde aliquam et voluptas reiciendis non sapiente labore</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Commodi quae ipsum quas est itaque</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit</span></li>
                        <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span>Deleniti asperiores blanditiis nihil quia
                                officiis dolor</span></li>
                    </ul>
                </div>


            </div>
            <div class="col-lg-4">
                <div class="bg-light p-3 border rounded mb-4">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                    <ul class="list-unstyled pl-3 mb-0">
                        <li class="mb-2"><strong class="text-black">Published on:</strong> April 14, 2019</li>
                        <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                        <li class="mb-2"><strong class="text-black">Employment Status:</strong> Full-time</li>
                        <li class="mb-2"><strong class="text-black">Experience:</strong> 2 to 3 year(s)</li>
                        <li class="mb-2"><strong class="text-black">Job Location:</strong> New ork City</li>
                        <li class="mb-2"><strong class="text-black">Salary:</strong> $60k - $100k</li>
                        <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                        <li class="mb-2"><strong class="text-black">Application Deadline:</strong> April 28, 2019</li>
                    </ul>
                </div>

                <div class="bg-light p-3 border rounded">
                    <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
                    <div class="px-3">
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Apply For Job Position</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="form-group md-form mb-4">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
          <input type="text" id="orangeForm-name" class="form-control validate">
        </div>
        <div class="form-group md-form mb-4">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
          <input type="email" id="orangeForm-email" class="form-control validate">
        </div>
        <div class="form-group md-form mb-4">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <label data-error="wrong" data-success="right" for="orangeForm-email">Your Phone</label>
          <input type="number" id="orangeForm-email" class="form-control validate">
        </div>
        <div class="form-group md-form mb-4">
        <i class="fa fa-money" aria-hidden="true"></i>
        <label data-error="wrong" data-success="right" for="orangeForm-email">Expected Salary</label>
          <input type="number" id="orangeForm-email" class="form-control validate" placeholder="Expected Salary in Ksh">
        </div>
        <div class="form-group md-form mb-4">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Job Position</label>
          <select name="job_type" id="" id="orangeForm-email" class="form-control validate">
              <option value="" selected>-----Select Job Position----</option>
              <option value="">ICT Intern</option>
              <option value="">Procurement Manager</option>
              <option value="">Accountant</option>
          </select>
        </div>
        <div class="form-group md-form mb-4">
        <label data-error="wrong" data-success="right" for="orangeForm-pass">Upload</label>
          <input type="file" id="orangeForm-pass" class="form-control validate">
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center form-group">
        <button class="btn btn-primary">Apply Job</button>
      </div>
    </div>
  </div>
</div>
<?php include "includes/footer.php"; ?>