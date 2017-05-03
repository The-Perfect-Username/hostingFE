<?php require "header.php"; ?>
<script src='./public/js/account.js' ></script>
<link href='./public/css/account.css' rel="stylesheet" />
<section class="container no-top">
    <section id="accountContainer">
        <section id="accountHeader" class="standard-border">
            <div id="accountPhotoContainer">
                <div id="coverPhoto"></div>
                <div id="coverInfo">
                    <h3>Lachlan Enderlin</h3>
                    <p>Brisbane, AU</p>
                </div>
            </div>
            <div id="channelInfoContainer">
                <div id="profilePicture"></div>
                <div id="channelInformation">
                    <div class="info-section">
                        <h4 class="basic-title">ABOUT</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sem elit,
                            luctus ac eros vel, cursus porttitor lorem. Aenean interdum congue leo, ut
                            scelerisque lacus pharetra vitae. Sed sed tempor mauris. Fusce a aliquam diam.
                        </p>
                    </div>
                    <hr />
                    <div class="info-section">
                        <div class="info-item">
                            <h4 class="basic-title">FOLLOWERS</h4>
                            <p class="info-item-number">279</p>
                        </div>
                        <div class="info-item">
                            <h4 class="basic-title">CHANNELS</h4>
                            <p class="info-item-number">279</p>
                        </div>
                        <div class="info-item">
                            <h4 class="basic-title">VIDEOS</h4>
                            <p class="info-item-number">279</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="accountBody">
            <?php for($i = 0; $i < 20; $i++) { ?>
            <div class="video-item list-style">
                <div class="video-thumbnail"></div>
                <div class="video-info">
                    <h3 class="video-title">How to become yilmaz and new t-shirts</h3>
                    <p class="time-ago small">20 October 2017</p>
                    <p class="video-desctiption">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consequat auctor eros in pulvinar. Praesent nec ornare sapien, et luctus nisl.</p>
                </div>
            </div>
            <?php }; ?>
        </section>
    </section>
</section>
<?php require "footer.php"; ?>
