<!doctype html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title><?php
if ($title == 'Welcome') {
	echo "Australian Music Therapy Association's 2021 National Conference";
} else {
	echo $title . ' | AMTA 2021';
}
?></title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128963342-24"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128963342-24');
</script>

</head>

<body>
  <div class="header" id="header">
    <div class="container">
      <div class="row pt-4 pb-5">
        <div class="col-12 col-md-7">
          <a href="./"><img src="img/AMTA2021-logo.png" alt="AMTA Logo" class="img-fluid" width="600"></a>
        </div>
        <div class="col d-flex flex-md-column text-center text-md-right mt-5 mt-md-0">
          <div class="social mt-4">
            <a href="https://www.facebook.com/amtassociation" target="_blank">
              <i class="fab fa-facebook-square facebook"></i>
            </a>
            <a href="https://twitter.com/AustMTA" target="_blank">
              <i class="fab fa-twitter-square twitter"></i>
            </a>
            <strong style="font-weight: 800">#AUSTMTA<span>2021</span></strong>
          </div>
          <div class="mt-4 mb-auto px-4 pr-md-0 pl-md-5">
            <a href="https://www.austmta.org.au/" target="_blank"><img src="img/logo-amta.png" alt="Australian Music Therapy Association" class="pl-md-5 img-fluid" width="250"></a>
          </div>
          <div class="mt-auto mb-0 px-4 pr-md-0 pl-md-5 text-right">
            <h1 class="mb-4">PDS <br> <span>Saturday 9 October 2021</span></h1>
            <h1>CONFERENCE <br> <span>16 - 17 October 2021</span></h1>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item <?php if( in_array($title, array("Welcome")) ) { echo "active"; }?>">
                  <a class="nav-link" href="./">Welcome</a>
                </li>
                <li class="nav-item <?php if( in_array($title, array("Committee")) ) { echo "active"; }?>">
                  <a class="nav-link" href="committee">Committee</a>
                </li>
                <!-- <li class="nav-item dropdown <?php if( in_array($title, array("Keynote Speakers", "Leaders in Conversation", "PDS Speakers")) ) { echo "active"; }?>"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Speakers<i class="fas fa-angle-down"></i></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="keynote-speakers">Keynote Speakers</a>
                    <a class="dropdown-item" href="pds-speakers">PDS Speakers</a>
                  </div>
                </li> -->
                <!-- <li class="nav-item <?php if( in_array($title, array("Virtual Conference Portal")) ) { echo "active"; }?>">
                  <a class="nav-link" href="virtual-conference-portal">Virtual Conference Portal</a>
                </li> -->
                <!-- <li class="nav-item dropdown <?php if( in_array($title, array("Conference Program", "PDS Program", "AMTA 2020 Abstract Book")) ) { echo "active"; }?>"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program<i class="fas fa-angle-down"></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="full-program">Conference Program</a>
                    <a class="dropdown-item" href="pds-program">PDS Program</a>
                    <a class="dropdown-item" href="abstract-book">AMTA 2020 Abstract Book</a>
                  </div>
                </li> -->
                <li class="nav-item dropdown <?php if( in_array($title, array("Event Registration", "Privacy Policy")) ) { echo "active"; }?>"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration<i class="fas fa-angle-down"></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="event-registration">Event Registration</a>
                    <a class="dropdown-item" href="privacy-policy">Privacy Policy</a>
                  </div>
                </li>
                <!-- <li class="nav-item <?php if( in_array($title, array("Conference Sponsorship Opportunities")) ) { echo "active"; }?>">
                  <a class="nav-link" href="sponsorship-and-exhibition-opportunities">Sponsorship</a>
                </li> -->
                <!--li class="nav-item dropdown <?php if( in_array($title, array("Event Registration", "Accommodation", "Privacy Policy")) ) { echo "active"; }?>"> <a class="nav-link dropdown-toggle" href="#" id="Participations" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration<i class="fas fa-angle-down"></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="event-registration">Event Registration</a>
                    <a class="dropdown-item" href="accommodation">Accommodation</a>
                    <a class="dropdown-item" href="privacy-policy">Privacy Policy</a>
                  </div>
                </li-->
                <!--li class="nav-item dropdown <?php if( in_array($title, array("Sponsorship & Exhibition Opportunities", "Confirmed Sponsors")) ) { echo "active"; }?>"> <a class="nav-link dropdown-toggle" href="#" id="Participations" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sponsorship & Exhibition<i class="fas fa-angle-down"></i></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="sponsorship-and-exhibition-opportunities">Sponsorship & Exhibition Opportunities</a>
                    <a class="dropdown-item" href="confirmed-sponsors">Confirmed Sponsors</a>
                  </div>
                </li-->
                <li class="nav-item <?php if( in_array($title, array("Contact Us")) ) { echo "active"; }?>">
                  <a class="nav-link" href="contact-us">Contact Us</a>
                </li>


              </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container">
      <div class="row pb-2">
        <div class="col-md pr-md-4 py-5">
          <?php if ($title == "Welcome") ?>
            <div class="alert alert-primary">
              <h2 class="mt-4">Acknowledgement of Country</h2>
              <div class="float-md-right">
                <img src="https://waimh2021.org/img/flag-aboriginal.png" class="mb-4 mb-md-0 ml-md-3" height="70">
                <img src="https://waimh2021.org/img/flag-torres.png" class="mb-4 mb-md-0 ml-md-3" height="70">
              </div>
              <p>We acknowledge the Traditional Owners of the lands and waters throughout Australia, and pay respect to the Elders past, present and emerging. We recognise the importance of connection to culture, land, kinship and community to the health and wellbeing of Aboriginal & Torres Strait Islander families. We acknowledge the cultural practices and traditions still carried out today and being passed down to future generations.</p>
            </div>
          <h1>
            <?php	echo $title; ?>
          </h1>
