<?php include_once 'layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">
            <button type="button" class="btn btn-primary" onclick="location.href='?ctr=class_list'">Danh sách lớp</button>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Danh sách học viên lớp <?=$class->categorie_name?>_<?=$class->class_id?></h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($class_member as $item => $value): ?>
                                <tr>
                                    <td><?=$value->fist_name?> <?=$value->last_name?></td>
                                    <td><?=$value->email ?></td>
                                    <td><?=$value->phone_number?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Phone number</th>
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
        function confirm_delete(id){
            if(confirm('Bạn chắc chắn muốn xóa lớp có id là '+id)){
                window.open('?ctr=class_delete&id='+id,'_self');
            }
        }
    </script>

<?php include_once 'layout/footer.php'; ?>