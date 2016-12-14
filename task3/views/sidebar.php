<sidebar id="sidebar">
    <div class="title"><h2>Posts</h2></div>
    <div class="posts">
        <?php
        $subject_posts = get_all_posts();
        ?>
        <ul>
            <?php
            while ($subject= mysqli_fetch_assoc($subject_posts)) {
                ?>
                <li><a href="blog.php?id=<?php echo $subject['id']; ?>"><?php echo $subject['title'];?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
</sidebar>