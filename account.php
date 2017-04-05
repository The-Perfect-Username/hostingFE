<?php require "header.php"; ?>
<script src='./public/js/account.js' ></script>
<link href='./public/css/account.css' rel="stylesheet" />
<section class="container no-top">
    <section id="accountContainer">
        <section id="accountheader" class="standard-border">
            <div id="coverPhoto"></div>
            <div id="profilePicture"></div>
            <div id="accountHeaderFooter">
                <div class="to-bottom centre-text box-sizing">
                    <h4>Username</h4>
                    <nav>
                        <a href="#">Videos</a>
                        <a href="#">Albums</a>
                        <a href="#">About</a>
                    </nav>
                </div>
            </div>
        </section>
        <section id="accountBody" class="standard-border">
            <div id="aboutSection">
                <div class="left-section">
                    <h4>Description</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius ex et nisl condimentum, nec vulputate metus fermentum. Mauris nec mauris nisl. Fusce diam ipsum, viverra ut enim ut, lobortis scelerisque ligula. Aliquam cursus, lectus id vestibulum vestibulum, risus lectus fringilla neque, ut fermentum purus lectus sit amet ante. Curabitur hendrerit diam in dui posuere, imperdiet elementum diam facilisis. Suspendisse potenti. Nullam quis pulvinar ipsum. Duis tincidunt, lacus quis vehicula convallis, dui tortor efficitur orci, et luctus lorem lectus nec mi. Ut magna justo, luctus non dui vitae, varius efficitur tellus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec eleifend arcu lectus, eu eleifend risus dapibus eu. Vivamus tempor nisi vel nunc pellentesque, ac iaculis nisi tristique. Fusce dui lectus, laoreet id mattis vitae, consectetur in lectus. Nullam eu egestas magna. Quisque mattis lacus arcu.
                    </p>
                </div>
                <div class="right-section">
                    <div class="form-group">
                        <h4>Stats</h4>
                        <p>2,000,000 views | 187,000 likes | 120,000 subscribers | 30 videos</p>
                    </div>
                    <div class="form-group">
                        <h4>Channels</h4>
                        <div class="channel-panel">
                            <?php for ($i = 0; $i < 12; $i++) {?>
                            <div class="channel-icon" title="this is a title"></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<?php require "footer.php"; ?>
