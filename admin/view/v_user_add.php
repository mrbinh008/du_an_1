<?php include_once 'layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post">
                        <div class="card-body">
                            <h4 class="card-title">Personal Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="username" placeholder=" Username Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="pass" name="password" placeholder="Password Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Full Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="fullname" placeholder="Full Name Here">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Vai trò</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role">
                                        <option>Select</option>
                                        <option value="0">Admin</option>
                                        <option value="1">CTV</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 m-t-15">Multiple Select</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control m-t-15" multiple="multiple" style="height: 36px;width: 100%;">
                                        <optgroup label="Monday">
                                            <option value="1">Gym 7:00am-9:00am</option>
                                            <option value="0">yoga 9:00am-11:00am</option>
                                        </optgroup>
                                        <optgroup label="Tuesday">
                                            <option value="1">Gym 7:00am-9:00am</option>
                                            <option value="0">yoga 9:00am-11:00am</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_member">Thêm</button>
                                <!-- <button type="button" class="btn btn-primary" onclick="location.href='admin_member_list.php'">Danh sách</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>
 <!--Custom JavaScript -->
 <script src="./view/dist/js/custom.min.js"></script>
<script src="./view/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="./view/dist/js/pages/mask/mask.init.js"></script>
    <script src="./view/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="./view/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="./view/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="./view/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="./view/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="./view/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="./view/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="./view/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
<?php include_once 'layout/footer.php'; ?>