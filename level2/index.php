<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TP SERE - Website Hacking</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

  <?php

      $html = '';
      if( isset( $_POST[ 'Upload' ] ) ) {
        // Where are we going to be writing to?
        $target_path  = "/opt/bitnami/apache2/htdocs/tp_sere/uploads/";
        $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

        // File information
        $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
        $uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
        $uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];

        // Can we move the file to the upload folder?
        if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) &&
          ( $uploaded_size < 100000 ) ) {

          // Can we move the file to the upload folder?
          if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
            // No
            $html .= '<pre>Your image was not uploaded.</pre>';
          }
          else {
            // Yes!
            $html .= "<pre>" . $target_path . " succesfully uploaded!</pre>";
          }
        }
        else {
          // Invalid file
          $html .= '<pre>Your image was not uploaded. We can only accept JPEG or PNG images.</pre>';
        }
      }

    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="../index.php">TP SERE</a>
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
              <a class="nav-link" href="../level1/">Level 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Level 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../level3/">Level 3</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1 style="font-size: 50px;">Level 2 : Medium</h1>
              <span class="subheading">When using this level, it will check the reported file type from the client when its being uploaded.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

         <?php 
                $WarningHtml = '';
                $PHPUploadPath = "/var/www/local.test/tp_sere/uploaded_files";
                if( !is_writable( $PHPUploadPath ) ) {
                  $WarningHtml .= "<p class='alert alert-warning'>Incorrect folder permissions: " . $PHPUploadPath ."<br/><em>Folder is not writable.</em></p>";
                }
                if( ( !extension_loaded( 'gd' ) || !function_exists( 'gd_info' ) ) ) {
                  $WarningHtml .= "<p class='alert alert-warning'>The PHP module <em>GD is not installed</em>.</p>";
                }
                echo $WarningHtml;
          ?> 

          <form enctype="multipart/form-data" action="#" method="POST">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="100000">
                <p>Choose an image to upload:<br/><br/></p>
                <input name="uploaded" type="file" /><br/>
                <br/>
                <?php echo $html; ?>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="Upload">UPLOAD</button>
            </div>
          </form>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/clean-blog.min.js"></script>

  </body>

</html>
