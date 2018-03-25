<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TP SERE - Website Hacking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">TP SERE</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload/level_1.php">Level 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload/level_2.php">Level 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload/level_3.php">Level 3</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1 style="font-size: 50px;">WEBSITE HACKING : FILE UPLOADING VULNERABILITY </h1>
              <span class="subheading">Hexanôme 4214 - INSA LYON</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="upload/level_1.php">
              <h2 class="post-title">
                Level 1 : Low
              </h2>
              <h3 class="post-subtitle">
                This level will not check the contents of the file being uploaded in any way. It relies only on trust.
              </h3>
            </a>
            <p class="post-meta"></p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="upload/level_2.php">
              <h2 class="post-title">
                Level 2 : Medium
              </h2>
              <h3 class="post-subtitle">
                When using this level, it will check the reported file type from the client when its being uploaded.
              </h3>
            </a>
            <p class="post-meta"></p>
          </div>
          <hr>
          <div class="post-preview">
            <a href="upload/level_3.php">
              <h2 class="post-title">
                Level 3 : High
              </h2>
              <h3 class="post-subtitle">
                Once the file has been received from the client, the server will try to resize any image that was included in the request.
              </h3>
            </a>
            <p class="post-meta"></p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://github.com/szerhoudi/tp_sere">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
