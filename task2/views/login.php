<section id="form" class="animated fadeInDown">
    <div class="container">
        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel white-alpha-90" >
                <div class="panel-heading">
                    <div class="panel-title text-center"><h2>Sign In to <span class="text-primary">Alpha</span></h2></div>
                </div>
                <div class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form" method="post" action="./auth.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                        </div>
                        <div class="input-group col-xs-12 text-center login-action">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1" style="margin-top: 10px;" required> Remember me &nbsp;
<!--                                    <span id="btn-login"><a href="#" class="btn btn-success">Login  </a></span>-->
                                    <input type="submit" class="btn btn-success" value="Login" name="submit">
                                </label>
                            </div>
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>