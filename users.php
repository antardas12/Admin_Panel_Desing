<?php $page = "users";
include './components/head.php'; ?>
<title>Users</title>
</head>

<body class="sb-nav-fixed">
    <?php include './components/nav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include './components/sidebar.php'; ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header d-flex justify-content-between px-3">
                    <h4 class="mb-0">
                        <a class="text-dark" style="text-decoration:none" href="">Users</a>
                    </h4>
                    <div class="btns">
                        <!-- <a href="./new_user" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> New User</a> -->
                    </div>
                </div>
                <div class="container-fluid px-4 mt-3   ">
                    <div class="card shadow mb-4">

                        <div class="card-body pd-sm">
                            <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Phone</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rahul Das</td>
                                            <td>98985986</td>
                                            <td>1234@@</td>
                                            <td class="d-flex" style="gap:4px;">
                                                <a href="./view_user"
                                                    class="btn btn-sm btn-info text-light">View/Edit</a>
                                                <a href="#!" class="btn btn-sm btn-danger">Delete</a>
                                                <a href="#" class="btn btn-sm btn-danger">Block</a>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </main>
            <!--<?php include './components/copy.php'; ?>-->
        </div>
    </div>
    <?php include './components/script.php'; ?>
    <script>
        let table = new DataTable('#myTable', {
            // options
        });


    </script>
</body>

</html>