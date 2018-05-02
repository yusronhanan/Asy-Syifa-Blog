<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pesantren Asy-Syifa' - Home</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url() ?>assets/https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/clean-blog.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/sweetalert.css" rel="stylesheet">
    
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert-dev.js"></script>
  <script src="<?php echo base_url() ?>assets/js/sweetalert.min.js"></script>
      
 <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
      
  </head>

  <body>
<?php 
$type_notif = $this->session->flashdata('type_notif');
$notif = $this->session->flashdata('notif');
if (!empty($notif)) {
  if ($type_notif == 'success') {
    ?>
      <script type="text/javascript">
        swal(
  'Success!',
  '<?php echo $notif ?>',
  'success'
)
      </script>
  <?php
  }
  else if($type_notif == 'danger') {
  ?>
  <script type="text/javascript">
    swal({
  type: 'error',
  title: 'Oops...',
  text: '<?php echo $notif ?>',
  // footer: '<a href>Why do I have this issue?</a>',
})
  </script>
<?php
}
} 
 ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html"> <img src="<?php echo base_url() ?>assets/img/logoassovo.png" style="width: 40px"> Pesantren Asy-Syifa'</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>">Beranda <?php echo $this->session->userdata('role'); ?></a>
            </li>
            <?php  if ($this->session->userdata('role')=='user' || $this->session->userdata('role')=='admin') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>bertanya">Bertanya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>pertanyaanku">Pertanyaanku</a>
            </li>
            <?php  } ?>
            <?php  if ($this->session->userdata('role')=='ustad' || $this->session->userdata('role')=='admin') { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>pertanyaan">Kumpulan Pertanyaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>newpost">New Post</a>
            </li>
            <?php  } ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>pesantren">Tentang Pesantren</a>
            </li>
            <?php  if ($this->session->userdata('logged_in')!=true) { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>signup">Sign up</a>
            </li>
            <?php  }
            else { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>logout">Logout</a>
            </li>
            <?php  } ?>
            
            
            
          </ul>
        </div>
      </div>
    </nav>


   <?php $this->load->view($main); ?>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="col-md-12 row">
      <div class="col-md-6 " style="float: left !important">
        <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Tag</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Fiqh</a>
                    </li>
                    <li>
                      <a href="#">Aqidah</a>
                    </li>
                    <li>
                      <a href="#">Taat</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Kisah</a>
                    </li>
                    <li>
                      <a href="#">Nabi dan Rasul</a>
                    </li>
                    <li>
                      <a href="#">Suri Tauladan</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          
      </div>
      <div class="col-md-6 " style="float: right !important;">
        <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Pages</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Beranda</a>
                    </li>
                    <li>
                      <a href="#">Bertanya</a>
                    </li>
                    <li>
                      <a href="#">Pertanyaanku</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Kumpulan Pertanyaan</a>
                    </li>
                    <li>
                      <a href="#">Tentang Pesantren</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          
      </div>
    </div>

    

      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/assovo/" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://api.whatsapp.com/send?phone=6285100147183&text=Assalamualaikum%20Ustad%20Nasikin" target="_blank">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; <a href="">Pesantren Asy-Syifa'</a> 2018 | Created by : <a href="https://www.instagram.com/yusron_hzvi/" target="_blank">Yusron Hanan</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url() ?>assets/js/clean-blog.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-notify.min.js"></script>
    
    
  </body>

</html>
