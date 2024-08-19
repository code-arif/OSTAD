<div class="navbar">
    <div class="navbar-links">
        <ul>
            <li><a href="">All Students</a></li>
            <li><a href="">Add New Student</a></li>
            <li><a href="">Seed</a></li>
        </ul>
    </div>
    <div class="navbar-auth">
        <?php
        if (!$_SESSION['loggedin']):
        ?>
        <a href="auth.php">Log in</a>

        <?php 
        else:
        ?>

        <a href="auth.php?logout=true">Log out</a>
        <?php 
        endif;
        ?>
    </div>
</div>