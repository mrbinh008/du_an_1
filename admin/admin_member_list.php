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
                                <th>Username</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Role</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>admin</td>
                                <td>admin</td>
                                <td>admin@gmail.com</td>
                                <td>admin</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>

                            </tr>
                            <tr>
                                <td>CTV</td>
                                <td>CTV</td>
                                <td>ctv@gmail.com</td>
                                <td>ctv</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>

                            </tr>

                            <tr>
                                <td>admin</td>
                                <td>admin</td>
                                <td>admin@gmail.com</td>
                                <td>admin</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>

                            </tr>
                            <tr>
                                <td>CTV</td>
                                <td>CTV</td>
                                <td>ctv@gmail.com</td>
                                <td>ctv</td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick=" location.href='' ">Sửa</button>
                                    <button type="button" class="btn btn-primary" onclick="return confirm_delete() ">Xóa</button>
                                </td>

                            </tr>

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


<script src="assets/libs/jquery/dist/jquery.min.js"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>
<!-- </div>
</div> -->

<?php include_once 'layout/footer.php'; ?>