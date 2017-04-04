<?php require "header.php"; ?>
<link href='./public/css/upload.css' rel="stylesheet" />
<script src='./public/js/upload.js' ></script>
<section class="container">
    <form id="schedulePublishForm" class="standard-border">
        <div class="form-group form-header">
            <h3>Schedule a time for your video to be published</h3>
        </div>
        <div class="form-group inline-block">
            <label>Date</label>
            <input class="form-control" type="date" min="2017-01-01">
        </div>
        &nbsp;
        &nbsp;
        <div class="form-group inline-block">
            <label>Hour</label>
            &nbsp;&nbsp;
            <select class="form-control">
                <?php for ($i = 0; $i < 24; $i++) { ?>
                <option value="<?= $i < 10 ? "0$i" : $i; ?>"><?= $i < 10 ? "0$i" : $i; ?></option>
                <?php }; ?>
            </select>
            &nbsp;&nbsp;
            <label>Minutes</label>
            &nbsp;&nbsp;
            <select class="form-control">
                <?php for ($i = 0; $i < 60; $i += 5) { ?>
                <option value="<?= $i < 10 ? "0$i" : $i; ?>"><?= $i < 10 ? "0$i" : $i; ?></option>
                <?php }; ?>
            </select>
        </div>
        <div class="form-group">
            <p>Your publication time will be recored as the UTC standard.</p>
            <p>Your video will be published at: <span></span></p>
        </div>
        <div id='uploadScheduleFooter' class="form-group">
            <input class="btn btn-blue" type="submit" />
            <input class="btn btn-default" type="reset" value="Cancel" />
        </div>
    </form>
</section>
<?php require "footer.php"; ?>
