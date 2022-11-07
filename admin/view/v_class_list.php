<?php include_once 'layout/header.php'; ?>

<div class="page-wrapper">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr style="text-align: center">
                                <th>Day</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center">Monday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Monday'">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">Tuesday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Tuesday'">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">Wednesday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Wednesday'">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">Thursday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Thursday'">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">Friday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Friday'">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">Saturday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Saturday'">Chi tiết</button>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center">Sunday</td>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-primary" onclick=" location.href='?ctr=class_detail_list&day=Sunday'">Chi tiết</button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
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
</script>

<?php include_once 'layout/footer.php'; ?>