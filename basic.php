<?php require "header.php"; ?>
<link href='./public/css/upload.css' rel="stylesheet" />
<script src='./public/js/upload.js' ></script>
<section class="container">
    <div id="uploadBasicContainer" class="standard-border">
        <h2 class="standard-header">Fill out your basic info</h2>
        <div id="uploadInfoFormWrapper">
            <form>
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" maxlength="100" />
                </div>
                <div class="form-group">
                    <label>Add a description</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Minimum of 5 tags</label>
                    <input class="form-control" type="text" maxlength="20" />
                </div>
                <div class="form-group">
                    <div class="inline-block">
                        <label>Privacy</label>
                        <select class="form-control">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                            <option value="unlisted">Unlisted</option>
                        </select>
                    </div>
                    &nbsp;
                    &nbsp;
                    <div class="inline-block">
                        <label>Enable Comments</label>
                        <select class="form-control">
                            <option value="enabled">Enable</option>
                            <option value="disabled">Disable</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div id="uploadThumbnailWrapper">
            <h4>Choose a thumbnail</h4>
            <div id="previewImage"></div>
            <div id="previewImageTable">
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
                <div class="small-thumbnails"></div>
            </div>
        </div>
        <div id="uploadBasicFooter">
            <button class="btn btn-blue">Submit</button>
            <button class="btn btn-default">Cancel</button>
        </div>
    </div>
</section>

<?php require "footer.php"; ?>
