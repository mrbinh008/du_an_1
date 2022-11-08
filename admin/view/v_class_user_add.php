<?php include_once 'layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Class Info</h4>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Categories</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="categories_id">
                                            <option>Select</option>
                                            <?php foreach ($categorie as $item => $value): ?>
                                                <option value="<?= $value->id ?>"> <?= $value->categories_name ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Member</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="user_id">
                                            <option>Select</option>
                                            <?php foreach ($user as $item => $value): ?>
                                                <option value="<?= $value->id ?>"><?= $value->fist_name ?> <?=$value->last_name?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Plant</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="plant_type">
                                            <option>Select</option>
                                            <option value="0">BEGINNER PLAN</option>
                                            <option value="1">PREMIUM PLAN</option>
                                            <option value="2">ULTIMATE PLAN</option>
                                        </select>
                                    </div>
                                </div>

<!--                                <div class="form-group row">-->
<!--                                    <label class="col-sm-3 text-right control-label col-form-label">Day</label>-->
<!--                                    <div class="col-md-9">-->
<!--                                        <select class="select2 form-control custom-select"-->
<!--                                                style="width: 100%; height:36px;" name="day_">-->
<!--                                            <option>Select</option>-->
<!--                                            <option value="Monday">Monday</option>-->
<!--                                            <option value="Tuesday">Tuesday</option>-->
<!--                                            <option value="Wednesday">Wednesday</option>-->
<!--                                            <option value="Tuesday">Tuesday</option>-->
<!--                                            <option value="Thursday">Thursday</option>-->
<!--                                            <option value="Friday">Friday</option>-->
<!--                                            <option value="Saturday">Saturday</option>-->
<!--                                            <option value="Sunday">Sunday</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_add_class">Thêm
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="location.href='?ctr=class_list'">Danh sách
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'layout/footer.php'; ?>