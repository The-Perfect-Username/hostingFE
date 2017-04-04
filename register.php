<?php require "header.php"; ?>
<link href='./public/css/login.css' rel="stylesheet" />
<section class="container">
    <form id="loginForm">
        <div class="form-group form-header centre-text">
            <div class="logo-background">
                <h1 class="initial">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </h1>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="firstName" class="form-control" placeholder="First name" autocomplete="off" />
        </div>
        <div class="form-group">
            <input type="text" name="lastName" class="form-control" placeholder="Last Name" autocomplete="off" />
        </div>
        <div class="form-group">
            <input type="text" name="channelName" class="form-control" placeholder="Channel Name" autocomplete="off" />
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" />
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" />
        </div>
        <div class="form-group">
            <button class="btn btn-blue">Register</button>
        </div>
        <div class="form-group centre-text">
            <a  href="/hostingFE/login.php">Already have an account?</a>
        </div>
    </form>
</section>

<?php require "footer.php"; ?>
