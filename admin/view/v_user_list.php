<?php include_once 'layout/header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Fist name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone number</th>
                                <th>Plant</th>
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
                                <td><?php
                                    if ($value->plant==0){
                                        echo "BEGINNER";
                                    }elseif ($value->plant==1){
                                        echo "PREMIUM";
                                    }else{
                                        echo "ULTIMATE";
                                    } ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='?ctr=user_detail_list&user_id=<?= $value->user_id ?>'">Chi tiết</button>
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

<?php include_once 'layout/footer.php'; ?>