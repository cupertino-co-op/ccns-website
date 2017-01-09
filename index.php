<!DOCTYPE html>
<html>
<head>
  <title>Cupertino Coop Nursery School</title>
  <link rel="stylesheet" href="/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="apple-mobile-web-app-title" content="Cupertino Co-op Nursery School">
  <meta name="application-name" content="Cupertino Co-op Nursery School">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
  <? include 'global-vars.php' ?>

  <div class="page-wrapper">

    <? include '_page-header.php' ?>

    <div class="page-hero">
      <img class="hero-image" src="/images/homepage-hero/CCNS_webpg_heroimages_village_1200x550.jpg" alt="It takes a village to raise a child, let us be your village!">
    </div>

    <div class="promo-banner">
      <div class="promo-content">
        <p class="promo-text">Join us for an open house on January 28th</p>
        <a class="promo-cta" href="#">Register</a>
      </div>
    </div>

    <h1>Welcome to <? echo $schoolName; ?></h1>

    <div class="about-section">
      <p class="overview">Parents work in partnership with the teachers to support their child’s experiences, discover new approaches to child rearing and re-examine their established parenting patterns. Adults deserve the same respect, guidance and caring from each other and from the teacher as the children receive. At <? echo $schoolName; ?>, children as well as adults learn and grow together in an atmosphere of appreciation and acceptance.</p>
      <div class="video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/h3RrjXMWMwI" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>

    <div class="accreditations-section">
      <div class="accreditations-container">
        <a class="accreditation" target="_blank" href="http://www.naeyc.org/"><img src="/images/accreditation/naeyclogo.gif" alt="NAEYC Accredited"></a>
        <a class="accreditation" target="_blank" href="http://cooppreschools.com/"><img src="/images/accreditation/scvc_logo.jpg" alt="Santa Clara Valley Council Member"></a>
        <a class="accreditation" target="_blank" href="http://www.ccppns.org/"><img src="/images/accreditation/ccppns_logo.gif" alt="California Council of Parent Participation Nursery Schools Member"></a>
        <a class="accreditation" target="_blank" href="http://ace.fuhsd.org/"><img src="/images/accreditation/acelogonolifewhite.gif" alt="Sunnyvale - Cupertino Adult and Community Education"></a>
      </div>
    </div>

    <div class="exploration-section">
      <a class="program" href="/3yr.htm">
        <img src="/images/station_ccns_550x450.jpg" alt="Station CCNS playhouse">
        <h2>Our Program</h2>
        <p>A day in the life at CCNS</p>
      </a>
      <a class="about">
        <img src="/images/bunnies.jpg" alt="Bunnies">
        <h2>About Us</h2>
        <p>Why CCNS is the place for you and your child</p>
      </a>
      <a class="enrollment">
        <img src="/images/carrotchair_550x450.jpg" alt="Carrot Chair">
        <h2>Enrollment</h2>
        <p>Registration for the 2016-17 school year is now open</p>
      </a>
    </div>

    <? include '_page-footer.php' ?>

  </div>

</body>
</html>
