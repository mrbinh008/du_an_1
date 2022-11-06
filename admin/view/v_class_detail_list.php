<?php include_once 'layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">
<button type="button" class="btn btn-primary" onclick="location.href='class_list.php'">Danh sách</button>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Basic Datatable</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Categories name</th>
                                <th>Trainer name</th>
                                <th>Time</th>
                                <th>Day</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($class as $item => $value): ?>
                                <tr>
                                    <td><?=$value->categories_name ?></td>
                                    <td><?=$value->trainer_name ?></td>
                                    <td><?=$value->time?></td>
                                    <td><?=$value->day_?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary" onclick=" location.href='class_edit.php?id=<?=$value->class_id?>'">Sửa</button>
                                        <button type="button" class="btn btn-primary" onclick="return confirm_delete('<?=$value->class_id?>') ">Xóa</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Categories name</th>
                                <th>Trainer name</th>
                                <th>Time</th>
                                <th>Day</th>
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
        function confirm_delete(id){
            if(confirm('Bạn chắc chắn muốn xóa lớp có id là '+id)){
                window.open('class_delete.php?id='+id,'_self');
            }
        }
    </script>

<?php include_once 'layout/footer.php'; ?>