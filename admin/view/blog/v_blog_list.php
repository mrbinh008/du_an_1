<?php include_once '././view/layout/header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Post Id</th>
                                <th>Post name</th>
                                <th>Post content</th>
                                <th>Post avater</th>
                                <th>Post viewer</th>
                                <th>Post time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>post1</td>
                                <td>sssssdfsdg</td>
                                <td><img src="aaa.png" width="20" height="20"></td>
                                <td>10</td>
                                <td>2022/11/02</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>post1</td>
                                <td>sssssdfsdg</td>
                                <td><img src="aaa.png" width="20" height="20"></td>
                                <td>10</td>
                                <td>2022/11/02</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>post1</td>
                                <td>sssssdfsdg</td>
                                <td><img src="aaa.png" width="20" height="20"></td>
                                <td>10</td>
                                <td>2022/11/02</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>post1</td>
                                <td>sssssdfsdg</td>
                                <td><img src="aaa.png" width="20" height="20"></td>
                                <td>10</td>
                                <td>2022/11/02</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Post Id</th>
                                <th>Post name</th>
                                <th>Post content</th>
                                <th>Post avater</th>
                                <th>Post viewer</th>
                                <th>Post time</th>
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