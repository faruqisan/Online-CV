<html>
  <head>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <title>Online CV Login</title>
  </head>
  <body class="green lighten-3">

    <div class="container" style="margin-top: 5%">
                <div class="row">
                    <div class="col l12 s12">
                        <div class="card green darken-2">
                            <?php echo form_open('Login/doLogin'); ?>
                            <div class="card-content">
                                <div class="card-title white-text" style="text-align: center">
                                    <b>LOGIN</b>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="input-field col l12 s12">
                                            <label class="white-text" for="username">Username</label>
                                            <input type="text" id="username" name="username" class="validate white-text" style="text-align: center" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l12 s12">
                                            <label class="white-text" for="password">Password</label>
                                            <input type="password" id="password" name="password" class="validate white-text" style="text-align: center" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action green lighten-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col l12 s12">
                                            <button type="submit" value="Login" class="btn waves-effect waves-light red lighten-1" style="width: 100%"><!--<i class="material-icons right">play_arrow</i>-->Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
  </body>
</html>
