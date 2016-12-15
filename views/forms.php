<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Login

            <?php
            $form1=array('UserName'=>"enter your username",'Password'=>"enter your password");
            ?>



        </h1>

        <div class="row center">

            <form action="./check.php" method="post" enctype="multipart/form-data">
            <div class="card col s4 offset-s4 red lighten-4">

                <br>
                <sapn class="card-title center">Please Login Here</sapn>
                <br>
                <br>
                <?php

                foreach($form1 as $label => $placeholder){
                    echo '<label style="color=black;font-size: large;" >'.$label.'</label>
                  <input type="text" name="'.$label.'" placeholder="'.$placeholder.'" required>';
                }

                ?>

                <button STYLE="background-color: #c51162;padding:10px" type="submit" name="action">Submit</button>
                <br>
                <br>
                <input type="file" name="myfile" STYLE="background-color: #c51162;">
            </div>

</form>
        </div>
    </div>

</div>
</div>
