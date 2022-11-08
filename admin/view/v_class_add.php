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
                                    <label class="col-sm-3 text-right control-label col-form-label">Trainers</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="trainers_id">
                                            <option>Select</option>
                                            <?php foreach ($trainers as $item => $value): ?>
                                                <option value="<?= $value->id ?>"> <?= $value->trainer_name ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Time</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="time">
                                            <option>Select</option>
                                            <option value="7:00am-9:00am">7:00am-9:00am</option>
                                            <option value="8:00am-10:00am">8:00am-10:00am</option>
                                            <option value="9:00am-11:00am">9:00am-11:00am</option>
                                            <option value="1:00pm-3:00pm">1:00pm-3:00pm</option>
                                            <option value="2:00pm-4:00pm">2:00pm-4:00pm</option>
                                            <option value="3:00pm-5:00pm">3:00pm-5:00pm</option>
                                            <option value="4:00pm-6:00pm">4:00pm-6:00pm</option>
                                            <option value="5:00pm-7:00pm">5:00pm-7:00pm</option>
                                            <option value="6:00pm-8:00pm">6:00pm-8:00pm</option>
                                            <option value="7:00pm-9:00pm">7:00pm-9:00pm</option>
                                            <option value="8:00pm-10:00pm">8:00pm-10:00pm</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Day</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="day_">
                                            <option>Select</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>

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