 <div class="section no-pad-bot" id="index-banner">
    <div class="container">
    
      <h1 class="header center orange-text">
      
      </h1>
      <div class="row center">
        <div class="card col s4 offset-s4 grey lighten-4">
     		<br>
        	<sapn class="card-title center">Login</sapn>

           <form action="./log.php" method="post">
<div class="card-content center">
 <?php 
                foreach ($form1 as $label => $placeholder) {
                  echo '<label>'.$label.'</label> 
                        <input type="text" name="'.$label.'" placeholder="'.$placeholder.'" required>';
                }
             ?>
        </div>
        <div class="card-action center">
        	<input class="btn waves-effect waves-light" type="submit" name="action" value="Sign in">
        </div>	
</form>
       	</div>
       	</div>

    </div>
  </div>



