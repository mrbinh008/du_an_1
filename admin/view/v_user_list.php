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
                                <th>Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nguyễn Văn</td>
                                <td>An</td>
                                <td>nvan@gmail.com</td>
                                <td>hà nội</td>
                                <td>0819956789</td>
                                <td>PREMIUM PLAN</td>
                                <td>1,2,3</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='user_edit.php?user_id='">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Nguyễn Văn</td>
                                <td>An</td>
                                <td>nvan@gmail.com</td>
                                <td>hà nội</td>
                                <td>0819956789</td>
                                <td>PREMIUM PLAN</td>
                                <td>1,2,3</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='user_edit.php?user_id='">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>

                            <tr>
                                <td>Nguyễn Văn</td>
                                <td>An</td>
                                <td>nvan@gmail.com</td>
                                <td>hà nội</td>
                                <td>0819956789</td>
                                <td>PREMIUM PLAN</td>
                                <td>1,2,3</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='user_edit.php?user_id='">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Nguyễn Văn</td>
                                <td>An</td>
                                <td>nvan@gmail.com</td>
                                <td>hà nội</td>
                                <td>0819956789</td>
                                <td>PREMIUM PLAN</td>
                                <td>1,2,3</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="location.href='user_edit.php?user_id='">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fist name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone number</th>
                                <th>Plant</th>
                                <th>Class</th>
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