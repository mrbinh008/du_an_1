<?php include_once '././view/layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Trainers Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trainer name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="trainer_name" placeholder=" Username Here">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Trainers categorie</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="trainer_categorie">
                                        <option>Select</option>
                                        <?php foreach ($categorie as $item => $value): ?>
                                        <option value="<?=$value->id?>"><?=$value->categories_name?></option>
    <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right control-label col-form-label">Upload Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="validatedCustomFile" oninput="this.form.submit()">
                                        <label class="custom-file-label" for="validatedCustomFile">
                                            <?php if (!isset($trainer_image)){
                                            echo 'Choose file...';}else{
                                                echo $trainer_image;
                                            }
                                            ?>
                                        </label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_trainer">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='?ctr=trainers_list'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '././view/layout/footer.php'; ?>