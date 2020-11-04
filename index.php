<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Coding Buddy</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <!-- Bootstrap sheet -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- My Stylesheet -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- Bootstrap JavaScript  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/1cc89e1440.js" crossorigin="anonymous"></script>
</head>

<body>


  <section id="title">
    <div class="Intro homepage">

      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="">Coding-Buddy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="fullstack.php" target="_blank">Full-Stack</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="frontend.php" target="_blank">Front-End</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="backend.php" target="_blank">Back-End</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Intro -->

      <div class="row">
        <div class="col-lg-6">
          <h1>Coding Buddy is here to guide you through the Web Development Program. With web development, you can explore fields
            such as Full-Stack development or work either as a Front-End or a Back-End Developer. Web Development is highly
            in demand, and companies worldwide are always looking to hire knowledgeable web developers. A person with any
            background can easily switch their career. Within starting the course, a person can start applying for junior
            level positions and gain the necessary working experience. Click on each link to know more about different fields of web development.</h1>
          <button id="iphone-btn" type="button" class="btn btn-dark btn-lg"><i class="fab fa-apple"></i> Download</button>
          <button id="google-btn" type="button" class="btn btn-outline-light btn-lg"><i class="fab fa-google-play"></i> Download</button>
        </div>
        <div class="col-lg-6">
          <img id="codingbuddy" src="images/CodingBuddy.png" alt="Coding Guy Image">
          <div class="sources frontpage_source">
            <p><sup>***</sup>Images are downloaded from Google.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <footer id="footer">

    <i class="footer-icon fab fa-twitter"></i>
    <i class="footer-icon fab fa-facebook-f"></i>
    <i class="footer-icon fab fa-instagram"></i>
    <i class="footer-icon far fa-envelope"></i>
    <p> Coding-Buddy&copy; Copyright 2020</p>

  </footer>

</body>

</html>
