<?php include_once 'layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=trainers_update" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Trainers Info</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?=$trainer->id?>" hidden>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trainer name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="uname" name="trainer_name" placeholder=" Username Here" value="<?=$trainer->trainer_name?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Trainers categorie</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="trainer_categorie">
                                            <option>Select</option>
                                            <?php foreach ($categorie as $item => $value): ?>
                                                <option value="<?=$value->id?>" <?=$trainer->trainer_categorie==$value->id?'selected':null?> ><?=$value->categories_name?></option>
                                            <?php endforeach;?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_trainer">Update</button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=trainers_list'">Danh sách</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'layout/footer.php'; ?>