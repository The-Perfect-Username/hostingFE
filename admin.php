<?php require "header.php"; ?>
<script src='./public/js/admin.js' ></script>
<link href='./public/css/admin.css' rel="stylesheet" />
<section class="container">
    <div class="standard-wrapper standard-border">
        <div id="adminMenu" class="justify-centre-flex">
            <div class="admin-nav-item" title="Upload rates">
                <i class="fa fa-upload" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" rel="_adminUsers" title="User controls">
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" title="Transaction rates">
                <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" rel="_adminReports" title="Reports">
                <i class="fa fa-flag" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" rel="_adminFeedback" title="Feedback">
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
            </div>
        </div>
        <div id="adminPanel" class="justify-space-between-flex">
            <?php require "_adminReports.php"; ?>
        </div>
    </div>
</section>
<?php require "footer.php"; ?>
