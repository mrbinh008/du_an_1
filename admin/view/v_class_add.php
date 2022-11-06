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
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role">
                                        <option>Select</option>
                                        <option value="0">Gym</option>
                                        <option value="1">Yoga</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Trainers</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role">
                                        <option>Select</option>
                                        <option value="0">piter</option>
                                        <option value="1">john</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Time</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role">
                                        <option>Select</option>
                                        <option value="7:00am-9:00am">7:00am-9:00am</option>
                                        <option value="9:00am-11:00am">9:00am-11:00am</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Day</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="role">
                                        <option>Select</option>
                                        <option value="monday">Monday</option>
                                        <option value="tuesday">Tuesday</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_categorier">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='categorier_list.php'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'layout/footer.php'; ?>