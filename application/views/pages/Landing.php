<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>Dokumen Bayaran Sebut Harga</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper" style="height:900px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top:60px;">
            <br>
              <br>

                <br>
          <h1>JPSKMSB</h1>
          <h2 class="subtitle">Dokumen Bayaran Sebut Harga</h2>
          <br>
            <br>
              <br>
                <br>
          <a href="<?php echo site_url('login')?>" class="btn btn-success" role="button">Masuk</a>


        </div>
      </div>


    </div>
  </div>
  <!--
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
-->
  <script src="<?php echo base_url();?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2019/01/01', function(event) {
      $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
    });
  </script>

  <script src="contactform/contactform.js"></script>

</body>

</html>
