<!-- HTML header, title, body tags, etc -->
<?php require("includes/header.php"); ?>

<!-- Main menu bar for all pages -->
<?php require("includes/main_menu_bar_https.php"); ?>

<div id="content-container">
    <div class="container">
        <h1 class="center-text">Sign up</h1>
        <!-- sign up prompt -->
        Sign up as a 
        <div>
            <a class="button" href="sign_up_member.php">
                Member
            </a>

            <!-- log in / sign out button -->
            <a class="button" href="sign_up_visitor.php">
                Visitor
            </a>
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</div>

<!-- Main menu bar for all pages -->
<?php require("includes/footer.php"); ?>