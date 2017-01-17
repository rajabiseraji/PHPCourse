<?php include_once('templates/base_top.php') ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="post" action="function/handler.php">
                <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <input type="text" name="full_name" id="display_name" class="form-control input-lg" placeholder="Full Name" tabindex="3">
                </div>
                <div class="form-group">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="4">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                        </div>
                    </div>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><button class="btn btn-primary btn-block btn-lg" tabindex="7">Register</button></div>
                    <div class="col-xs-12 col-md-6"><a href='<?php echo "${base_url}login.php" ?>' class="btn btn-success btn-block btn-lg">Sign In</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once('templates/base_bottom.php') ?>