<?php include_once '././view/layout/header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Danh sách khách hàng</h5>
                <div class="table-responsive">
<!--                    <select>-->
<!--                        <option>Active</option>-->
<!--                        <option>Pending</option>-->
<!--                    </select>-->

                    <form class="form-group row" name="status_submit" id="status_submit" action="" method="post">
                        <label class="col-sm-3 text-right control-label col-form-label">Status : </label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select"
                                    style="width: 20%; height:36px;" name="status_type" onchange="this.form.submit()">
                                <option value="" <?php if (isset($status)&&$status==null){ echo 'selected';}?> >All</option>
                               <option value="0" <?php if (isset($status)&&$status==0){echo 'selected';}?> >Active</option>
                                <option value="1" <?php if (isset($status)&&$status==1){echo 'selected';}?> >Pending</option>
                            </select>
                        </div>
                    </form>

                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Fist name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone number</th>
                                <th>Plant</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($user as $item => $value): ?>
                            <tr>
                                <td><?= $value->fist_name ?></td>
                                <td><?= $value->last_name ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->address ?></td>
                                <td><?= $value->phone_number ?></td>
                                <td><?=$value->plant_name ?></td>
                                <td><?=$value->status==0?'Active':'Pending'?></td>
                                <td>
                                    <?php if ($value->status==1): ?>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=user_active&user_id=<?= $value->id ?>'">Active</button>
                                    <?php endif;?>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=user_edit&user_id=<?= $value->id ?>'">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fist name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone number</th>
                                <th>Plant</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- slimscrollbar scrollbar JavaScript -->
<script src="./view/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="./view/assets/extra-libs/sparkline/sparkline.js"></script>
<!-- this page js -->
<script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="./view/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="./view/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="./view/assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>

<?php include_once '././view/layout/footer.php'; ?>