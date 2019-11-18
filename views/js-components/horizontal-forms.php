<div class="container">
    <?php _t('Horizontal Forms'); ?>
    <form action="">
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="pass" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass">
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radio" id="radio1" value="radio1" checked>
                        <label for="radio1">Radio 1</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="radio" id="radio2" value="radio2">
                        <label for="radio2">Radio 2</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">CheckBox</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="checkbox" id="checkbox" value="checkbox">
                        <label for="checkbox">Checkbox</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
