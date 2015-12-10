<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css"  media="screen,projection"/>
    <title>Curiculum Vitae</title>
  </head>
  <body class="green lighten-3">
    <header>
      <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper green darken-2">
                  <a href="#" data-activates="sideMenu" class="button-collapse"><i class="material-icons">menu</i></a>
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
                                    <?php echo $this->session->userdata('logged_in')['username'] ?>
                                </a>
                            </li>
                            <li>
                                <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout" href="<?php echo site_url('Login/doLogout'); ?>"style="color: white">
                                    <i class="large material-icons">power_settings_new</i>
                                </a>
                            </li>
                      </ul>
                      <ul class="side-nav" id="sideMenu">
                        <li><a class="waves-effect waves-light btn green white-text" style="width:100%;margin-top:3%"><i class="material-icons right">add</i>New Content</a></li>
                      </ul>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <main>
      <div class="row"  style="margin-top:1%">
        <div class="col l3 hide-on-med-and-down">
          <div class="card-panel green darken-2">
            <div class="row">
              <a class="waves-effect waves-light btn red " href="<?php echo site_url('CuriculumVitae/newContent'); ?>" style="width:100%"><i class="material-icons right">add</i>New Content</a>
            </div>
          </div>
        </div>
        <div class="col l9 s12">
          <div class="card green darken-2">
            <div class="card-content">
              <table class="bordered">
                <thead class="white-text">
                  <th>ID</th>
                  <th>Date Created</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Status</th>
                  <th>Action</th>

                </thead>
                <tbody class="white-text">
                  <?php foreach($dataCV as $row): ?>
                    <tr>
                      <td><?php echo $row->ID ?></td>
                      <td><?php echo $row->tanggalDibikin ?></td>
                      <td><?php echo $row->judulKonten ?></td>
                      <td><?php echo $row->Konten ?></td>
                      <td><?php echo $row->published ?></td>
                      <td>
                        <div class="row">
                          <div class="col l4 s6">
                            <a title = "Hapus Content" onclick="confirmDelete()" href="<?php echo site_url('CuriculumVitae/deleteContent')."/".$row->ID; ?>" class="material-icons white-text">delete</a>
                          </div>
                          <div class="col l4 s6">
                            <a title = "Update Content" href="<?php echo site_url('CuriculumVitae/updateContent')."/".$row->ID; ?>" class="material-icons white-text">description</a>
                          </div>
                          <div class="col l4 s6">
                            <?php if($row->published==FALSE) { ?>
                            <a title = "Publish Content" href="<?php echo site_url('CuriculumVitae/publishContent')."/".$row->ID; ?>" class="material-icons white-text">cloud</a>
                            <?php } else { ?>
                            <a title = "Unblish Content" href="<?php echo site_url('CuriculumVitae/unpulishContent')."/".$row->ID; ?>" class="material-icons white-text">clear</a>
                            <?php } ?>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
            <div class="card-action green lighten-2"></div>
          </div>
        </div>
      </div>
    </main>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    <script>
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      })

      function confirmDelete(){
        window.confirm("Konfirmasi Penghapusan Data");
      }

    </script>
  </body>
</html>
