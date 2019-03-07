
<div class=row>
    <div class="col text-right">
        <small><?php echo $data['message']->dateadded; ?></small>
    </div>
</div>
<div class="row">
    <div class="col">
        <p>
            <pre><?php echo $data['message']->content; ?></pre>
        </p>
    </div>
</div>
<br>
<div class="row">
    <div class="col">
        <div class="btn-group">
            <a href="#" class="btn btn-success">Reply</a>
            <a href="#" class="btn btn-primary">Forward</a>
        </div>
    </div>
</div>
<br>
