<!--Page Title!-->
<?php $title = 'Contact | transactionalSMS' ?>
<!--Page Description!-->
<?php $description = 'Send Transactional SMS alerts, notifications, reminders with best-in-class delivery. Access easy interface, powerful APIs and award-winning features.' ?>

<?php include 'include/header.php';?>




<!--Header design starts here!-->
      <header>
        <!--background video design starts here!-->
      <div class="inner-page-header-container inner-page-resources-header container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center hero-content">
                <h1 class="hero-head-text">Contact Us</h1>
                  <p class="text-center ">
                      Have any queries? We’re always here to help!
                  </p>
            </div>
      </div>
    </div>
  </header>


  <!--contact elements!-->
  <div class="container contact-label-container">
    <div class="row contact-cover-row">
      <div class="col-md-12">

        <div class="col-md-8">
          <img class="img-responsive" src="asset/images/contact-page-team-photo-1.jpg" alt="team photo">
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12  contact-element-column">
              <div class="contact-label">
                <h1 class="contact-label">SALES</h1>
              </div>
              <div class="contact-content">
                <h3>Email</h3>
                <a href="mailto:sales@textlocal.in"><h4>sales@textlocal.in</h4></a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12  contact-element-column">
              <div class="contact-label">
                <h1 class="contact-label">SALES</h1>
              </div>
              <div class="contact-content">
                <h3>Phone</h3>
                <a href="tel:+91-40-30858603"><h4>+91 40 30858603</h4></a>
              </div>
            </div>
          </div>
          </div>



      </div>
    </div>

    <div class="row contact-cover-row">
      <div class="col-md-12">
        <div class="col-md-8 hidden-md hidden-lg">
          <img class="img-responsive" src="asset/images/contact-page-team-photo-2.jpg" alt="team photo">
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12  contact-element-column">
              <div class="contact-label">
                <h1 class="contact-label">SUPPORT</h1>
              </div>
              <div class="contact-content">
                <h3>Email</h3>
                <a href="mailto:support@textlocal.in"><h4>support@textlocal.in</h4></a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12  contact-element-column">
              <div class="contact-label">
                <h1 class="contact-label">SUPPORT</h1>
              </div>
              <div class="contact-content">
                <h3>Phone</h3>
                <a href="tel:+91-40-30858602"><h4>+91 40 30858602</h4></a>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-8 hidden-xs hidden-sm">
            <img class="img-responsive" src="asset/images/contact-page-team-photo-2.jpg" alt="team photo">
          </div>
      </div>
    </div>

  </div>

  <!---
  Image slider
  !-->
  <div class="image-slides container-fluid">
  <div><img class="img-responsive" src="asset/images/contact-page-team-photo-1.jpg" alt="team photo"></div>
  <div><img class="img-responsive" src="asset/images/contact-page-team-photo-5.jpg" alt="team photo"></div>
  <div><img class="img-responsive" src="asset/images/contact-page-team-photo-4.jpg" alt="team photo"></div>
  <div><img class="img-responsive" src="asset/images/contact-page-team-photo-3.jpg" alt="team photo"></div>
  <div><img class="img-responsive" src="asset/images/contact-page-team-photo-6.jpg" alt="team photo"></div>
</div>

  <div class="container visit-our-container">

      <div class="col-md-12">
        <div class="col-md-8 text-center col-md-offset-2">
          <h2 class="text-center cute-section-header-text">Visit Our Headquarters</h3>
          <p>Let's discuss mobile marketing and customer engagement over a cup of coffee!</p>
        </div>
      </div>

  </div>

<!--location map!-->
  <div class="container-fluid">
    <div class="row">
        <div id="map"></div>
        <script>

          function initMap() {
            var uluru = {lat: 17.434521, lng: 78.39853};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 17,
              scrollwheel: false,
              center: uluru
            });
            var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });

            //hide nearby points
            var styles = [
              {
                featureType: "poi",
                elementType: "business",
                stylers: [
                  { visibility: "off" }
                ]
              }
            ];

            map.setOptions({styles: styles});
          }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGqmnmBQO_x3CyyeDvlLXg6CdPNOGJS2g&callback=initMap">
        </script>

    </div>
  </div>


<!--final call to action section include !-->
<?php include 'include/final-call-to-action.php';?>



<?php include 'include/footer.php';?>
