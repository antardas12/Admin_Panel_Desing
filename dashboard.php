<?php $page = "dashboard";
include './components/head.php'; ?>
<title>Dashboard - Admin</title>
</head>

<body class="sb-nav-fixed">
    <?php include './components/nav.php'; ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include './components/sidebar.php'; ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <h4 class="page-header">Dashboard <div class="h6 d-inline-block mt-3" id="clock"></div>
                </h4>
                <div class="container-fluid px-4">
                    <div class="row mt-3 gy-3">
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="my-card p-3 color1">
                                <div class="card-content d-flex align-items-center">
                                    <div class="icon"><span><i class="fa-solid fa-users"></i></span></div>
                                    <div class="content">
                                        <h6 class="m-0">Total User</h6>
                                        <p class="m-0"><i class="fa-solid fa-users"></i> 200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="my-card p-3 color2">
                                <div class="card-content d-flex align-items-center">
                                    <div class="icon"><span><i class="fa-solid fa-book-open"></i></span></div>
                                    <div class="content">
                                        <h6 class="m-0">Total Subject</h6>
                                        <p class="m-0"><i class="fa-solid fa-book-open"></i> 500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="my-card p-3 color3">
                                <div class="card-content d-flex align-items-center">
                                    <div class="icon"><span><i class="fa-regular fa-newspaper"></i></span></div>
                                    <div class="content">
                                        <h6 class="m-0">Total News</h6>
                                        <p class="m-0"><i class="fa-regular fa-newspaper"></i> 500</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="my-card p-3 color3">
                                    <div class="card-content d-flex align-items-center">
                                        <div class="icon"><span><i class="fa-solid fa-sack-dollar"></i></span></div>
                                        <div class="content">
                                            <h6 class="m-0">Monthly Sale</h6>
                                            <p class="m-0"><i class="fa-solid fa-indian-rupee-sign"></i> 500</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             -->
                    </div>

                </div>
                <div class="container-fluid px-4 mt-3">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Recent Users</h6>
                            <!-- <a href="./new_student" class="btn btn-primary"><i class="fa-solid fa-plus"></i> New Student</a> -->
                        </div>
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
        function updateTime() {
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            var clock = document.getElementById("clock");
            var now = new Date();
            let month = monthNames[now.getMonth()];
            let date = now.getDate();
            clock.innerHTML = `${date} ${month}- ${now.toLocaleTimeString()}`
        }

        setInterval(updateTime, 1000);

    </script>
    <script>
        let table = new DataTable('#myTable', {
            // options
        });


    </script>
</body>

</html>