<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $this->title; ?></title>
  <meta name="description" content="<?php echo $this->metadescription; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/modernizr.js"></script>
</head>
<body>

  <!-- Navigation -->
  <div class="contain-to-grid fixed">
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name"><h1><a href="index.html">Cheap Deals for Students</a></h1></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="index.php?=home">Home</a></li>
          <li><a href="about.php?=about">About Us</a></li>
          <li><a href="contact.php?=contact">Contact Us</a></li>
          <li class="show-for-large-up">
            <form action="search.html" method="get">
              <div class="row collapse">
                <div class="medium-8 columns">
                  <input type="search" name="query">
                </div>
                <div class="medium-4 columns">
                  <button class="tiny">Search</button>
                </div>
              </div>
            </form>
          </li>
          <li class="has-dropdown"><a href="account.html">Account</a>
            <ul class="dropdown">
              <li><a href="register.html">Register</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </nav>
  </div>