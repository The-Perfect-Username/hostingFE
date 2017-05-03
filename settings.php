<?php require "header.php"; ?>
<script src='./public/js/settings.js' ></script>
<link href='./public/css/settings.css' rel="stylesheet" />
<section class="container">
    <div class="canvas standard-border">
        <div class="canvas-header">
            <h3>Settings</h3>
        </div>
        <div class="canvas-body">
            <div class="settings-menu">
                <nav class="list-nav">
                    <a href="./settings/_profile.php">Profile</a>
                    <a href="./settings/_password.php">Change Password</a>
                    <a href="./settings/_channels.php">Channels</a>
                    <a href="./settings/_emails.php">Emails</a>
                    <a href="./settings/_billing.php">Billing</a>
                    <a href="./settings/_payment.php">Payment</a>
                </nav>
            </div>
            <div class="settings-body">
                <?php require "./settings/_billing.php"; ?>
            </div>
        </div>
    </div>
</section>
<?php require "footer.php"; ?>
