<html>
  <head>
    <title>Admin Menu</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css"  media="screen,projection"/>
  </head>
  <!--<body class="green lighten-3" style="background-image : url('<?php echo base_url(); ?>assets/img/4.png')">-->
  <body class="green lighten-3">
    <header>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper green">
            <div style="margin-left: 20px;margin-right: 20px ">
              <ul class="left ">
                <li>
                  <a class=" white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Main" href="<?php echo site_url('Admin'); ?>" >
                    <i class="large material-icons">dashboard</i>
                  </a>
                </li>
              </ul>
              <ul class="right">
                <li>
                  <a href="#!" class="white-text">
                    <!-- ini untuk menampilkan username yang sedang login -->
                    <?php echo $this->session->userdata('logged_in')['username'] ?>
                  </a>
                </li>
                <li>
                  <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout" href="<?php echo site_url('Login/doLogout'); ?>"style="color: white">
                    <i class="large material-icons">power_settings_new</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row" style="margin-top : 1%">
          <div class="col l6 s12">
            <div class="card green hoverable">
              <div class="card-image">
                <img src="<?php echo base_url(); ?>assets/img/cv.png">
                <span class="card-title">Curiculum Vitae</span>
              </div>
              <div class="card-content">
                <p class="white-text">Tambah, Hapus, dan Update data Curiculum Vitae.</p>
              </div>
              <div class="card-action green lighten-2">
                <a class="white-text" href="<?php echo site_url('CuriculumVitae'); ?>">Curiculum Vitae</a>
              </div>
            </div>
          </div>
          <div class="col l6 s12">
            <div class="card green hoverable">
              <div class="card-image">
                <img src="<?php echo base_url(); ?>assets/img/portofolio.png">
                <span class="card-title">Portofolio</span>
              </div>
              <div class="card-content">
                <p class="white-text">Tambah, Hapus, dan Update data Portofolio.</p>
              </div>
              <div class="card-action green lighten-2">
                <a class="white-text" href="<?php echo site_url('Portofolio'); ?>">Portofolio</a>
              </div>
            </div>
          </div>
          <div class="col l9"></div>
        </div>
      </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
  </body>
</html>
