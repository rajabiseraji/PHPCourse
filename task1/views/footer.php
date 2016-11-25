<footer>
    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
        <div class="container text-center">
            <?php
                if (isset($_GET['page'])){
                    if ($_GET['page']=='signup'){
                        echo "<div class=\"footer-content\">
                Have you Account? <a href=\"index.php?page=signin\" class=\"btn btn-primary\"> Login Here </a>
            </div>";
                    }elseif ($_GET['page']=='signin'){
                        echo "<div class=\"footer-content\">
                        Haven't registered yet? <a href=\"?page=signup\" class=\"btn btn-primary\"> Register Here </a>
                    </div>";
                    }
                }else {
                    ?>
                    <div class="footer-content">
                        Haven't registered yet? <a href="?page=signup" class="btn btn-primary"> Register Here </a>
                    </div>
                    <?php
                }
            ?>
        </div><!-- /.container-fluid -->
    </nav>
</footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script>
    Pace.on('hide', function(){
        $("#container").fadeIn('1000');
        $.backstretch([
            "images/taxi-1.jpg",
            "images/taxi-2.jpg"
        ], {duration: 5000, fade: 1000});
    });

</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-53918379-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

<!-- Mirrored from mydesignsforweb.com/alpha/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2016 17:59:44 GMT -->
</html>