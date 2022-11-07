<?php include_once 'layout/header.php'; ?>

    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thông tin khách hàng</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <caption>Thông tin khách hàng</caption>
                            <thead>
                            <tr>
                                <th>Fist name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone number</th>
                                <th>Plant</th>
<!--                                <th>Class</th>-->
<!--                                <th>Action</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?= $user->fist_name ?></td>
                                <td><?= $user->last_name ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->address ?></td>
                                <td><?= $user->phone_number ?></td>
                                <td><?= $user->plant ?></td>

                            </tr>
                            </tbody>
                        </table>

                        <table id="one_config" class="table table-striped table-bordered">
                            <caption>Danh sách lớp</caption>
                            <thead>
                            <tr>
                                <th>Trainers name</th>
                                <th>Time</th>
                                <th>Day</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($user_detail as $item => $value): ?>
                                <tr>
                                    <td><?= $value->trainers_name ?></td>
                                    <td><?= $value->time_ ?></td>
                                    <td> <?= $value->day_ ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
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
        $('#one_config').DataTable();
    </script>

<?php include_once 'layout/footer.php'; ?>