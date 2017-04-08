<?php require "header.php"; ?>
<link href='./public/css/watch.css' rel="stylesheet" />
<script src='./public/js/watch.js' ></script>
<section class="container wide no-top">
    <section id="videoPlayerContainer">
        <div id="videoPlayer"></div>
    </section>
    <section id="videoBottom">
        <section id="leftSection">
            <section id="videoInformation">
                <div class="video-info">
                    <h3 class="main-video-title">
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </h3>
                    <div>
                        <a href="#">username</a>
                        <span class="time-ago">3 days ago</span>
                    </div>
                </div>
                <div class="video-stats">
                    <h3 class="views">129,472,038 views</h3>
                    <div id="videoVotes">
                        <div id="videoVoteControl">
                            <div class="vote-control">
                                <span class="vote-btn like-btn">
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                </span>
                                <span class="n-of-votes">0</span>
                            </div>
                            <div class="vote-control selected">
                                <span class="vote-btn dislike-btn">
                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                </span>
                                <span class="n-of-votes">1</span>
                            </div>
                        </div>
                        <div id="voteBar">
                            <span id="likePercentage"></span>
                        </div>
                    </div>
                </div>
            </section>
            <section id="descriptionSection">
                <p>No description provided</p>
            </section>
            <section id="commentsSection">
                <section>
                    <form id="mainCommentForm" method="post">
                        <div class="form-group">
                            <textarea id="mainCommentTextArea" rows="4" class="form-control"></textarea>
                        </div>
                        <div id="commentButtons" class="form-group align-right">
                            <button class="btn btn-blue m-left submit">Save</button>
                            <button class="btn btn-default m-left cancel">Cancel</button>
                        </div>
                    </form>
                </section>
                <section id="comments"></section>
            </section>
        </section>
        <section id="relatedVideos">
            <div class="rel-video">
                <div class="rel-video-thmb"></div>
                <div class="rel-video-info">
                    <h4 class="rel-video-title">This is a test title</h4>
                    <p class="rel-video-user">username</p>
                    <span class="rel-video-time-ago time-ago">18 days ago</span>
                </div>
            </div>
            <div class="rel-video">
                <div class="rel-video-thmb"></div>
                <div class="rel-video-info">
                    <h4 class="rel-video-title">This is a test title</h4>
                    <p class="rel-video-user">username</p>
                    <span class="rel-video-time-ago time-ago">18 days ago</span>
                </div>
            </div>
            <div class="rel-video">
                <div class="rel-video-thmb"></div>
                <div class="rel-video-info">
                    <h4 class="rel-video-title">This is a test title</h4>
                    <p class="rel-video-user">username</p>
                    <span class="rel-video-time-ago time-ago">18 days ago</span>
                </div>
            </div>
            <div class="rel-video">
                <div class="rel-video-thmb"></div>
                <div class="rel-video-info">
                    <h4 class="rel-video-title">This is a test title</h4>
                    <p class="rel-video-user">username</p>
                    <span class="rel-video-time-ago time-ago">18 days ago</span>
                </div>
            </div>
            <div class="rel-video">
                <div class="rel-video-thmb"></div>
                <div class="rel-video-info">
                    <h4 class="rel-video-title">This is a test title</h4>
                    <p class="rel-video-user">username</p>
                    <span class="rel-video-time-ago time-ago">18 days ago</span>
                </div>
            </div>
            <div class="rel-video">
                <div class="rel-video-thmb"></div>
                <div class="rel-video-info">
                    <h4 class="rel-video-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                    <p class="rel-video-user">username</p>
                    <span class="rel-video-time-ago time-ago">18 days ago</span>
                </div>
            </div>
        </section>
    </section>
</section>
<?php require "footer.php"; ?>
