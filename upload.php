<?php require "header.php"; ?>
<link href='./public/css/upload.css' rel="stylesheet" />
<script src='./public/js/upload.js' ></script>
<section class="container">
    <form id="uploadForm" class="standard-border">
        <div class="form-group form-header centre-text">
            <div class="logo-background">
                <h1 class="initial">U<h1>
            </div>
        </div>
        <div class="form-group">
            <input type="file" id="videoFileUpload" />
            <label for="videoFileUpload"><span>Upload a file</span></label>
        </div>
        <div id="uploadBtnContainer" class="form-group">
            <input class='btn btn-blue' type="submit" />
            <input class='btn btn-default' type="reset" value="Cancel" />
        </div>
    </form>
</section>

<?php require "footer.php"; ?>
