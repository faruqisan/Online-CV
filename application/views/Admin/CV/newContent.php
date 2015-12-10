<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.css"  media="screen,projection"/>
    <title>New Content</title>
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
      <div class="container">
        <div class="row" style="margin-top:2%">
          <div class="col l12 s12">
            <div class="card green darken-2">
              <?php echo form_open('CuriculumVitae/saveContent'); ?>
                <div class="card-content">
                  <span class="card-title white-text">New CV Content</span>
                  <div class="row">
                    <div class="input-field col l6 s12 white-text">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" class="validate" name="title">
                      <label for="icon_prefix" class="white-text">Title</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col l12 s12 white-text">
                      <i class="material-icons prefix">create</i>
                      <textarea id="textarea1" class="materialize-textarea" length="50" name="content"></textarea>
                      <label for="textarea1" class="white-text">Content</label>
                    </div>
                  </div>
                </div>
                <div class="card-action green lighten-2">
                  <div class="row">
                    <div class="col l4 s12 right">
                      <button class="btn waves-effect waves-light blue lighten-1" type="submit" name="action" style="width:100%">Save
                        <i class="material-icons right">save</i>
                      </button>
                    </div>
                    <div class="col l4 s12 right">
                      <button class="btn waves-effect waves-light red lighten-1" type="reset" style="width:100%">Cancel
                        <i class="material-icons right">clear</i>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
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
    </script>
  </body>
</html>
