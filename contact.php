<?php
$title = "Contact Us - Opus Academy";
require_once "assets/common/header.php";
require_once "admin/model/model.contact_info.php";

$contactInfo = new ContactInfo();
$contactInfo = $contactInfo->getInformation();
?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs py-3 px-5 mt-1">
      <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Contact Us</li>
            </ol>
            <h2>Contact Us</h2>
      </div>
    </section>

    <section class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column justify-content-center px-lg-5 info-box">
                    <?php 
                        foreach($contactInfo as $v) {
                            $title = $v["title"];
                            $description = $v["description"];
                            $status = $v["contact_info_status"];
                            ?>

                            <?= ($status == 0 ? ($title == "Vancouver Location" ? '<h4><i class="bx bx-map"></i> '.$title.' </h4><p>'.$description.'</p> <br>' : '') : '') ?>

                            <?= ($status == 0 ? ($title == "Telephone & Fax" ? '<h5><i class="bx bx-phone-call"></i> '.$title.'</h5> <p>'.$description.'</p>' : '') : '') ?>

                            <?= ($status == 0 ? ($title == "Email" ? '<h5><i class="bx bx-envelope"></i> '.$title.'</h5> <p>'.$description.'</p>' : '') : '') ?>

                            <?= ($status == 0 ? ($title == "Wechat ID" ? '<h5><i class="bx bx-message"></i> '.$title.'</h5> <p>'.$description.'</p>' : '') : '') ?>

                            <?php
                        }
                    ?>

                </div>

                <div class="col-xl-7 col-lg-6 d-flex justify-content-center email-form">
                    <div class="container">
                        <div class="form-floating mt-3">
                            <input type="text" name="name" id="name" class="form-control"  aria-label="Floating label select example" autocomplete="off" required focus>
                            <label for="floatingSelect">Complete Name: <span class="required">*</span></label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="text" name="email_address" id="email_address" class="form-control"  aria-label="Floating label select example" autocomplete="off" required focus>
                            <label for="floatingSelect">Email Address: <span class="required">*</span></label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="text" name="subject" id="subject" class="form-control"  aria-label="Floating label select example" autocomplete="off" required focus>
                            <label for="floatingSelect">Subject: <span class="required">*</span></label>
                        </div>

                        <div class="form-floating mt-3">
                            <textarea name="message" id="message" class="form-control" style="height: 150px;"></textarea>
                            <label for="floatingSelect">Message: <span class="required">*</span></label>
                        </div>

                        <div class="mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-md btn-primary btn-submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10420.637812566945!2d-123.18566899999999!3d49.235466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x743b14f85e85be0!2sOpus%20Academy!5e0!3m2!1sen!2sus!4v1649052776923!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="true" loading="fast" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

</main>

<?php require_once "assets/common/footer.php"; ?>

<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script src="assets/js/main.js"></script>
<script src="assets/js/alert.js"></script>

<script>
    $(function(){
        $('.btn-submit').on('click', function(){
            var name = $('#name').val();
            var email_address = $('#email_address').val();
            var subject = $('#subject').val();
            var message = $('#message').val();

            if (name == "" || email_address == "" || subject == "" || message == "") {
                errorAlert();
            } else {
                submit(name, email_address, subject, message);
            }
        });

        var status_module = window.localStorage.getItem("stat");
        if(status_module == "success"){
            sucessAlert();
            localStorage.clear();
        }
       
    });

    function submit(name, email_address, subject, message) {
        $.ajax({
            url: 'controller/controller.contact.php',
            method: 'POST',
            data: {
                name:name,
                email_address:email_address,
                subject:subject,
                message:message
            },
            success:function() {
                window.localStorage.setItem("stat", "success");
                window.location.href="contact.php";
            }
        });
    }

</script>

</html>