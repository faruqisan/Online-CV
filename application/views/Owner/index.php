<html>
  <head>
    <title>Owner Menu</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
  </head>
  <body class="green lighten-3">

    <header>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper green">
            <div style="margin-left: 20px;margin-right: 20px ">
              <ul class="left ">
                <li>
                  <a class=" white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Main" href="<?php echo site_url('Owner'); ?>" >
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

      <div class="row" style="margin-top:2%">
        <div class="col l12 s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Bio</span>
              <table>
                <thead>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Phone</th>
                  <th>Tagline</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php foreach($bio as $row){ ?>

                    <tr>
                      <td><?php echo $row->id ?></td>
                      <td><?php echo $row->owner_name ?></td>
                      <td><?php echo $row->Alamat ?></td>
                      <td><?php echo $row->Phone ?></td>
                      <td><?php echo $row->tagline ?></td>
                      <td><a title = "Update Content" href="<?php echo site_url('Owner/update')."/".$row->id; ?>" class="material-icons">description</a></td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>

    </main>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
  </body>
</html>
