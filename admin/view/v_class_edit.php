<?php include_once 'layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=class_update" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Class Info</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?=$class->id?>" hidden>
                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Categories</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="categories_id">
                                            <option>Select</option>
                                            <?php foreach ($categorie as $item => $value): ?>
                                                <option value="<?= $value->id ?>" <?= $class->categories_id==$value->id ? 'selected':null ?> > <?= $value->categories_name ?> </option>
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
                                                <option value="<?= $value->id ?>" <?= $class->trainers_id==$value->id?'selected':null ?>> <?= $value->trainer_name ?> </option>
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
                                            <option value="7:00am-9:00am" <?=$class->time=='7:00am-9:00am'?'selected':null?> >7:00am-9:00am</option>
                                            <option value="8:00am-10:00am" <?=$class->time=='8:00am-10:00am'?'selected':null?> >8:00am-10:00am</option>
                                            <option value="9:00am-11:00am" <?=$class->time=='9:00am-11:00am'?'selected':null?> >9:00am-11:00am</option>
                                            <option value="1:00pm-3:00pm" <?=$class->time=='1:00pm-3:00pm'?'selected':null?> >1:00pm-3:00pm</option>
                                            <option value="2:00pm-4:00pm" <?=$class->time=='2:00pm-4:00pm'?'selected':null?> >2:00pm-4:00pm</option>
                                            <option value="3:00pm-5:00pm" <?=$class->time=='3:00pm-5:00pm'?'selected':null?> >3:00pm-5:00pm</option>
                                            <option value="4:00pm-6:00pm" <?=$class->time=='4:00pm-6:00pm'?'selected':null?> >4:00pm-6:00pm</option>
                                            <option value="5:00pm-7:00pm" <?=$class->time=='5:00pm-7:00pm'?'selected':null?> >5:00pm-7:00pm</option>
                                            <option value="6:00pm-8:00pm" <?=$class->time=='6:00pm-8:00pm'?'selected':null?>>6:00pm-8:00pm</option>
                                            <option value="7:00pm-9:00pm" <?=$class->time=='7:00pm-9:00pm'?'selected':null?>>7:00pm-9:00pm</option>
                                            <option value="8:00pm-10:00pm" <?=$class->time=='8:00pm-10:00pm'?'selected':null?>>8:00pm-10:00pm</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Day</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select"
                                                style="width: 100%; height:36px;" name="day_">
                                            <option>Select</option>
                                            <option value="Monday" <?=$class->day_=='Monday'?'selected':null?>>Monday</option>
                                            <option value="Tuesday" <?=$class->day_=='Tuesday'?'selected':null?>>Tuesday</option>
                                            <option value="Wednesday" <?=$class->day_=='Wednesday'?'selected':null?>>Wednesday</option>
                                            <option value="Thursday" <?=$class->day_=='Thursday'?'selected':null?>>Thursday</option>
                                            <option value="Friday" <?=$class->day_=='Friday'?'selected':null?>>Friday</option>
                                            <option value="Saturday" <?=$class->day_=='Saturday'?'selected':null?>>Saturday</option>
                                            <option value="Sunday" <?=$class->day_=='Sunday'?'selected':null?>>Sunday</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_class">Update
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="location.href='?ctr=class_detail_list&day=<?=$class->day_?>'">Danh sách
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