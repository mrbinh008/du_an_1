<?php include_once '././view/layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <input type="text" name="id" value="<?=$user->id?>" hidden>
                                <div class="form-group row">
                                    <label for="fist_name" class="col-sm-3 text-right control-label col-form-label">Fist
                                        name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fist_name" name="fist_name"
                                               placeholder="Fist name Here" value="<?=$user->fist_name?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="last_name" class="col-sm-3 text-right control-label col-form-label">Last
                                        name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                               placeholder="Last name Here" value="<?=$user->last_name?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email1"
                                           class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Email Here" value="<?=$user->email?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address" name="address"
                                               placeholder="Address Here" value="<?=$user->address?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone_number" class="col-sm-3 text-right control-label col-form-label">Phone
                                        number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                               placeholder="Phone number Here" value="value="<?=$user->phone_number?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Plant</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="plant_id">
                                            <option>Select</option>
                                            <?php foreach ($plant as $item =>$value): ?>
                                                <option value="<?=$value->id?>" <?= $value->id==$user->plant_id?'selected':null ?> ><?=$value->plant_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="status">
                                            <option>Select</option>
                                            <option value="0">Active</option>
                                            <option value="1">Pending</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_user">Update</button>
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
        $('.demo').each(function () {
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

                change: function (value, opacity) {
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
<?php include_once '././view/layout/footer.php'; ?>