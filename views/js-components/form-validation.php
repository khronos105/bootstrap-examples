<div class="container">
    <?php _t('Form Validation'); ?>
    <form class="formValidation" action="" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" required>
                <div class="invalid-feedback">First Name is required</div>
                <div class="valid-feedback">First Name is set</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="name">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" required>
                <div class="invalid-feedback">Last Name is required</div>
                <div class="valid-feedback">Last Name is set</div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="name">User</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="describeUser">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="User" aria-describedby="describeUser" required>
                    <div class="invalid-feedback">User is required</div>
                    <div class="valid-feedback">User is set</div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
    (function(){
        "use strict";
        window.addEventListener(
            "load",
            function () {
                var form = document.getElementsByClassName('formValidation');
                var validation = Array.prototype.filter.call(form, function(form){
                    form.addEventListener(
                        'submit',
                        function(e){
                            if(form.checkValidity() === false){
                                e.preventDefault();
                                e.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }
                    )
                })
            }
        )
    })();
</script>
