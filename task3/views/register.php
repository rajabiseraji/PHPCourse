<?php



?>
<section id="form">
    <div class="container">
        <div id="registertext" class="mainbox col-xs-12 col-sm-6">
            <div class="jumbotron black-alpha-90 animated fadeInLeft">
                <h2>Be a member of <img src="images/alpha-logo.png"/></h2>
                <p>You are just one step away from entering an awesome world.</p>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                    <li>Lorem Ipsum</li>
                </ul>
            </div>
        </div>
        <div id="loginbox" class="mainbox col-xs-12 col-sm-6 animated zoomInDown">
            <div class="panel white-alpha-90" >
                <div class="panel-heading">
                    <div class="panel-title text-center"><h2>Sign up to <span class="text-primary">Alpha</span></h2></div>
                </div>
                <div class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form" method="post" action="index.php">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="name" value="" placeholder="name" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required>
                        </div>
                        <div class="input-group col-xs-6">
                            <span class="input-group-addon">@</span>
                            <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" required>
                        </div>
                        <div class="input-group col-xs-6">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                        </div>
                        <div class="input-group col-xs-12 text-center login-action">
                            <div class="checkbox">
                                <label>
                                    <input id="login-remember" type="checkbox" name="remember" value="1" style="margin-top: 10px;" required> I agree to terms and conditions &nbsp;
<!--                                    <span id="btn-login"><a href="#" class="btn btn-success">Register  </a></span>-->
                                    <input id="btn-login" class="btn btn-success" type="submit" name="register" value="Register"> </input>
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