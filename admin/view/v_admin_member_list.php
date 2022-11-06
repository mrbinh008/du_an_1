<?php include_once './view/layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Username</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Role</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
//                            include_once './../models/m_admin_member.php';
//                            $m_admin_member = new m_admin_member();
//                            $admin_member = $m_admin_member->read_admin_member();

                            foreach ($admin_member as $key => $value) { ?>

                            <tr>
                                <td><?= $value->user_name ?></td>
                                <td><?= $value->fullname ?></td>
                                <td><?= $value->email ?></td>
                                <td><?= $value->role_==0?'Admin':'CTV' ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='admin_member_edit.php?id=<?= $value->id ?>'">Sửa
                                    </button>
                                    <button type="button" class="btn btn-primary"
                                            onclick="return confirm_delete('<?= $value->id ?>','<?= $value->fullname ?>') ">Xóa
                                    </button>
                                </td>

                            </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="./view/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="./view/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./view/assets/extra-libs/sparkline/sparkline.js"></script>
    <!-- this page js -->
    <script src="./view/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="./view/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="./view/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

        function confirm_delete(id,name){
            if(confirm('Bạn chắc chắn muốn xóa '+name)){
                window.open('admin_member_delete.php?id='+id,'_self');
            }
        }
    </script>

<?php include_once './view/layout/footer.php'; ?>