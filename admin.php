<?php require "header.php"; ?>
<script src='./public/js/admin.js' ></script>
<link href='./public/css/admin.css' rel="stylesheet" />
<section class="container">
    <div class="standard-wrapper standard-border">
        <div id="adminMenu" class="justify-centre-flex">
            <div class="admin-nav-item" title="Upload rates">
                <i class="fa fa-upload" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" title="User controls">
                <i class="fa fa-users" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" title="Transaction rates">
                <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" title="Reports">
                <i class="fa fa-flag" aria-hidden="true"></i>
            </div>
            <div class="admin-nav-item" title="Feedback">
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
            </div>
        </div>
        <div id="adminPanel" class="justify-space-between-flex">
            <div class="admin-panel">
                <h3>Banned Users</h3>
                <div class="form-group">
                    <form method="post">
                        <input type="text" class="form-control" />
                    </form>
                </div>
                <div id="bannedUsersResults" class="form-group">
                    <div>
                        <div class="form-group">
                            <h4>Username</h4>
                        </div>
                        <div class="form-group">
                            <h4>Reason</h4>
                            <p>
                                Aenean metus risus, hendrerit gravida cursus vel, vulputate ut nibh.
                                Vestibulum sit amet porttitor nisl. Maecenas faucibus dolor ac odio
                                euismod, non commodo eros pharetra.
                            </p>
                        </div>
                        <div class="form-group">
                            <h4>Banned</h4>
                            <p>24th Jun, 2016 (280 days)</p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default">Unban</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="admin-panel">
                <h3>Banned Channels</h3>
                <div class="form-group">
                    <form method="post">
                        <input type="text" class="form-control" />
                    </form>
                </div>
                <div id="bannedChannelResults" class="form-group">
                    <div>
                        <div class="form-group">
                            <h4>Channel Name</h4>
                        </div>
                        <div class="form-group">
                            <h4>Reason</h4>
                            <p>
                                Aenean metus risus, hendrerit gravida cursus vel, vulputate ut nibh.
                                Vestibulum sit amet porttitor nisl. Maecenas faucibus dolor ac odio
                                euismod, non commodo eros pharetra.
                            </p>
                        </div>
                        <div class="form-group">
                            <h4>Banned</h4>
                            <p>24th Jun, 2016 (280 days)</p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default">Unban</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="admin-panel">
                <h3>Add an Admin</h3>
                <div class="form-group">
                    <form method="post">
                        <input type="text" class="form-control" />
                    </form>
                </div>
                <div id="adminAddResults" class="form-group">
                    <div>
                        <div class="form-group">
                            <h4>Username</h4>
                        </div>
                        <div class="form-group">
                            <h4>Description</h4>
                            <p>
                                Phasellus ipsum quam, rutrum non condimentum non,
                                iaculis nec elit. Curabitur in pellentesque magna.
                                Nulla porttitor tincidunt ornare.
                            </p>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-blue">Add as Admin</button>
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="admin-panel">
                <h3>Admins</h3>
                <div id="adminResults" class="form-group">
                    <div class="admin-row">
                        <div class="row-data">
                            <h4>Admin Name</h4>
                        </div>
                        <div class="row-data">
                            <p>Admin for <psan>20 days</span></p>
                        </div>
                        <div class="row-data">
                            <a href="#">Remove</a>
                        </div>
                    </div>
                    <div class="admin-row">
                        <div class="row-data">
                            <h4>Admin Name</h4>
                        </div>
                        <div class="row-data">
                            <p>Admin for <psan>20 days</span></p>
                        </div>
                        <div class="row-data">
                            <a href="#">Remove</a>
                        </div>
                    </div>
                    <div class="admin-row">
                        <div class="row-data">
                            <h4>Admin Name</h4>
                        </div>
                        <div class="row-data">
                            <p>Admin for <psan>20 days</span></p>
                        </div>
                        <div class="row-data">
                            <a href="#">Remove</a>
                        </div>
                    </div>
                    <div class="admin-row">
                        <div class="row-data">
                            <h4>Admin Name</h4>
                        </div>
                        <div class="row-data">
                            <p>Admin for <psan>20 days</span></p>
                        </div>
                        <div class="row-data">
                            <a href="#">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require "footer.php"; ?>
