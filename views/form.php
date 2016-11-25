



<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">
            <?php

            //        include_once "functions/init.php";

            ?>

        </h1>
        <div class="row center">
            <div class="card col s4 offset-s4 grey lighten-4">
                <!-- <h5 class="header col s12 light">Please enter Login Status</h5>	 -->
                <br>
                <sapn class="card-title center">Please Login Here</sapn>
                <form action="../functions/handler.php" method="post" enctype="multipart/form-data">
                <div class="card-content center">
                    <!--        	<input type="text" name="name" placeholder="Username">-->
                    <!--        	<input type="password" name="password" placeholder="password">-->


                        <label for=""></label>
                    <?php
                    foreach ($form1 as $label => $placeholder){
                        echo "<label for=\"$label\">$label</label>";
                        echo "<input type=\"text\" name=\"$label\" placeholder=\"$placeholder\">";
                    }
                    ?>
                    <input type="file" name="myFile">
                </div>
                <div class="card-action center">
                    <input class="btn waves-effect waves-light" value="Click Me!" type="submit" name="action">
                </div>
                </form>
            </div>
        </div>


    </div>
</div>