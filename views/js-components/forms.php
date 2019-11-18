<div class="container">
    <?php _t('Forms'); ?>
    <form action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Select file</label>
            <input type="file" id="email" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="countries">Countries</label>
            <select name="countries" id="countries" class="form-control">
                <option value="es">ES</option>
                <option value="md">MD</option>
            </select>
        </div>
        <div class="form-group">
            <label for="multiplecountries">Countries</label>
            <select multiple name="multiplecountries" id="multiplecountries" class="form-control">
                <option value="en">EN</option>
                <option value="es">ES</option>
                <option value="md">MD</option>
                <option value="ru">RU</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
            <small class="form-text text-muted">The password must have 8 at least characters</small>
        </div>
        <div class="form-group">
            <label for="readonly">Email</label>
            <input type="text" id="readonly" class="form-control" readonly value="romaqweqweqweqw">
        </div>
        <div class="form-group">
            <label for="disabled">Email</label>
            <input type="text" id="disabled" class="form-control" disabled value="romaqweqweqweqw2">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="formcheckobx">
            <label for="formcheckobx" class="form-check-label">Checkbox</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="radio" value="1" checked>
            <label for="radio1" class="form-check-label">Radio 1</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="radio" value="2">
            <label for="radio2" class="form-check-label">Radio 2</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="radio3" name="radio" value="3" disabled>
            <label for="radio3" class="form-check-label">Radio 3</label>
        </div>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch">
            <label for="customSwitch" class="custom-control-label">Mobile Switch</label>
        </div>
    </form>
    <div class="space"></div>
    <hr>
    <form action="" class="form-inline">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">First Name</label>
            <input type="email" id="email" class="form-control">
        </div>
    </form>
    <div class="space"></div>
    <hr>
    <form action="">
        <div class="row">
            <div class="col">
                <input type="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="fname" id="fname" class="form-control" placeholder="First name">
            </div>
        </div>
    </form>
    <div class="space"></div>
    <hr>
    <form action="">
        <div class="form-row">
            <div class="col">
                <input type="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="fname" id="fname" class="form-control" placeholder="First name">
            </div>
        </div>
    </form>
    <div class="space"></div>
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="pass">Password</label>
                <input type="password" id="pass" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" placeholder="Address" class="form-control">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" id="city" class="form-control" placeholder="City">
            </div>
            <div class="form-group col-md-4">
                <label for="country">Country</label>
                <select name="country" id="" class="form-control">
                    <option value="es">Spain</option>
                    <option value="en">England</option>
                    <option value="us">United States</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip">
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="policy">
                <label for="policy" class="form-check-label">Policy</label>
            </div>
        </div>
    </form>
    <div class="space"></div>
</div>
