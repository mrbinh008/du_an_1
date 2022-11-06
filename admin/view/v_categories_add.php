<?php include_once 'layout/header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" action="" method="post">
                        <div class="card-body">
                            <h4 class="card-title">Categorie Info</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Categorie name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="uname" name="categorie_name" placeholder=" Username Here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Categorie meaningful</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="categorie_mean" placeholder="Full Name Here">
                                </div>
                            </div>

                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary" name="btn_add_categorie">Thêm</button>
                                <button type="button" class="btn btn-primary" onclick="location.href='categorie_list.php'">Danh sách</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'layout/footer.php'; ?>