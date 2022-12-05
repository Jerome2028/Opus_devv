<?php
require_once "controller/controller.db.php";
require_once "admin/model/model.footer_links.php";
require_once "admin/model/model.contact_info.php";

$footerLinks = new FooterLinks();
$contactInfo = new ContactInfo();

$footerLinks = $footerLinks->getLinks();
$contactInfo = $contactInfo->getInformation();
?>
	
<footer id="footer">

	<div class="footer-top">
		<div class="container">
			<div class="row">

			<div class="col-lg-4 col-md-6 footer-contact">
				<h3>OPUS Academy</h3>
				<p>
					<?php 

						foreach($contactInfo as $v) {
							$title = $v["title"];
							$description = $v["description"];
							$status = $v["contact_info_status"];
							?>

							<?= ($status == 0 ? '<strong>'.$title.':</strong><br>'.$description.'<br>' : '') ?>

							<?php
						}
					
					?>
				</p>

				<img src="assets/img/wechat_id/qr_scan.png" alt="wechat_qr_code" width="110%">
			</div>

			<div class="col-lg-4 col-md-6 footer-links">
				<h4>Useful Links</h4>

				<ul>
					<?php

						foreach($footerLinks as $v) {
							$title = $v["title"];
							$url = $v["url"];
							$label = $v["label"];
							?>

							<?= ($label == "Useful Links" ? '<li><i class="bx bx-chevron-right"></i><a href="'.$url.'">'.$title.'</a></li>' : '') ?>

							<?php
						}

					?>
				</ul>
			</div>

			<div class="col-lg-4 col-md-6 footer-links">
				<h4>Our Services</h4>
				<ul>
					<?php

						foreach($footerLinks as $v) {
							$title = $v["title"];
							$url = $v["url"];
							$label = $v["label"];
							?>

							<?= ($label == "Our Services" ? '<li><i class="bx bx-chevron-right"></i><a href="'.$url.'">'.$title.'</a></li>' : '') ?>

							<?php
						}

					?>
				</ul>
			</div>

			</div>
		</div>
	</div>

	<div class="container d-lg-flex py-4">

		<div class="me-lg-auto text-center text-lg-center">
			<div class="copyright">
				&copy; Copyright <strong><span>OPUS Academy</span></strong>. All Rights Reserved
				</div>
			</div>
		</div>
		
	</div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>