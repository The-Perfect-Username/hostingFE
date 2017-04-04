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
                    <a href="#">Profile</a>
                    <a href="#">Channels</a>
                    <a href="#">Emails</a>
                    <a href="#">Billing</a>
                    <a href="#">Payment</a>
                </nav>
            </div>
            <div class="settings-body">
                <h2 class="heading">Profile</h2>
                <form method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea class="form-control" rows='5' ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Privacy</label>
                        <select class="form-control">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-blue" />
                        <input type="reset" class="btn btn-default" value="Cancel" />
                    </div>
                </form>
                <h2 class="heading">Change Password</h2>
                <form id="updatePassword" method="post">
                    <div class="form-group">
                        <label>Old password</label>
                        <input id="oldPassword" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input id="newPassword" type="password" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-blue" />
                        <input type="reset" class="btn btn-default" value="Cancel" />
                    </div>
                </form>
                <h2 class="heading">Emails</h2>
                <form method="post">
                    <div class="form-group">
                        <label>Primary Email</label>
                        <input id="primaryEmail" type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Secondary Email</label>
                        <input id="secondaryEmail"  type="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-blue" />
                        <input type="reset" class="btn btn-default" value="Cancel" />
                        <button id="swapEmails" class="btn btn-default">Swap</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require "footer.php"; ?>
