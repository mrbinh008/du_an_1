<?php include_once 'layout/header.php'; ?>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form class="form-horizontal" action="?ctr=categorie_update" method="post">
                            <div class="card-body">
                                <h4 class="card-title">Categorie Info</h4>
                                <input type="text" class="form-control" id="id" name="id" value="<?=$categorie->id?>" hidden>
                                <div class="form-group row">
                                    <label for="categorie_name" class="col-sm-3 text-right control-label col-form-label">Categorie name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="categorie_name" name="categorie_name" placeholder=" Categorie name Here" value="<?=$categorie->categories_name?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="categorie_mean" class="col-sm-3 text-right control-label col-form-label">Categorie meaningful</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="categorie_mean" name="categorie_mean" placeholder="Categorie mean Here" value="<?=$categorie->categories_meaningful?>">
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary" name="btn_update_categorie">Update</button>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=categorie_list'">Danh sách</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'layout/footer.php'; ?>