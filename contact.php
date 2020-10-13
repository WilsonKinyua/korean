<?php include "includes/header.php";


$errors = [];
$errorMessage = '';

if (!empty($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    if (empty($errors)) {
        $toEmail = 'info@koreankenyasolarltd.co.ke';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: contadct.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}



?>



<!-- inner banner -->
<div class="inner-banner-w3lso d-flex flex-column justify-content-center align-items-center" style="background: url('https://cdn.pixabay.com/photo/2017/12/02/14/38/contact-us-2993000_960_720.jpg') no-repeat center;
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
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
    </ol>
</nav>
<!-- //breadcrumbs -->
<!-- contact -->
<section class="contact-wthree align-w3" id="contact">
    <div class="container">
        <div class="wthree_pvt_title text-center">
            <h4 class="w3pvt-title text-muted">Contact us
            </h4>
            <!-- <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand out and make it more readable.</p> -->
        </div>
        <div class="mx-auto text-center">

            <iframe class="mt-lg-4 contact-form-wthreelayouts" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1185.8817549940222!2d36.82282269696362!3d-1.2850464241821178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d64bca5635%3A0x4a5558169e36796b!2sQueensway%20House%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1601974543350!5m2!1sen!2ske" allowfullscreen></iframe>
            <!-- //footer right -->
        </div>
        <div class="row mt-4 ">
            <div class="col-lg-7 ">
                <h5 class="cont-form ">send us a message</h5>
                <h5 class="text-center text-success"><?php $result; ?></h5>
                <div class="contact-form-wthreelayouts ">
                    <form action="contact.php" method="post" class="register-wthree" id="contact-form">
                        <div class="form-group ">
                            <label>
                                Your Name
                            </label>
                            <input class="form-control" type="text" placeholder="Johnson" name="name" >
                        </div>
                        <!-- <div class="form-group ">
                                <label>
                                    Mobile
                                </label>
                                <input class="form-control " type="number " placeholder="xxxx xxxxx " name="mobile " required=" ">
                            </div> -->
                        <div class="form-group ">
                            <label>
                                Email
                            </label>
                            <input class="form-control" type="email" placeholder="example@email.com " name="email" required>
                        </div>
                        <div class="form-group ">
                            <label>
                                Your message
                            </label>
                            <textarea placeholder="Type your message here" name="message" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0 ">
                            <button type="submit" name="submit" id="submit" class="btn btn-w3layouts btn-block bg-theme text-wh w-100 font-weight-bold text-uppercase ">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 text-center ">
                <h5 class="cont-form ">get in touch</h5>
                <div class="row flex-column ">
                    <div class="contact-w3 ">
                        <span class="fa fa-envelope-open mb-3 "></span>
                        <div class="d-flex flex-column ">
                            <a href="mailto:inf@koreankenyasolarltd.co.ke " class="d-block ">inf@koreankenyasolarltd.co.ke</a>
                        </div>
                    </div>
                    <div class="contact-w3 my-4 ">
                        <span class="fa fa-phone mb-3 "></span>
                        <div class="d-flex flex-column ">
                            <p>+254-740-42-41-06</p>
                            <!-- <p class="my-1 ">+254 123 7890</p>
                                <p>+254 123 7890</p> -->
                        </div>
                    </div>
                    <div class="contact-w3 ">
                        <span class="fa fa-home mb-3 "></span>
                        <address>
                            P.O Box 70392 -00400, NAIROBI – KENYA,<br>5th Floor, Queensway House, suite 7 <br> Kaunda Street.</address>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //contact -->
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
      const constraints = {
          name: {
              presence: { allowEmpty: false }
          },
          email: {
              presence: { allowEmpty: false },
              email: true
          },
          message: {
              presence: { allowEmpty: false }
          }
      };

      const form = document.getElementById('contact-form');

      form.addEventListener('submit', function (event) {
          const formValues = {
              name: form.elements.name.value,
              email: form.elements.email.value,
              message: form.elements.message.value
          };

          const errors = validate(formValues, constraints);

          if (errors) {
              event.preventDefault();
              const errorMessage = Object
                  .values(errors)
                  .map(function (fieldValues) {
                      return fieldValues.join(', ')
                  })
                  .join("\n");

              alert(errorMessage);
          }
      }, false);
  </script>
<?php include "includes/footer.php"; ?>