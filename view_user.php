

<?php $page="users"; include './components/head.php'; ?>
        <title>Edit User</title>
        <style>
            #icons .icon{
                flex:0 0 225px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <h4 class="page-header">New User</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-body pd-sm">
                            <div class="container-fluid px-4">
                        <div class="form-box">
                          <form class="mt-3" method="post">
                            <div class="form-group mt-2">
                              <label for="name">Name</label>
                              <input class="form-control" id="name" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group mt-2">
                              <label for="phone">Phone</label>
                              <input class="form-control" id="phone" type="text" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group mt-2">
                              <label for="password">Password</label>
                              <input class="form-control" id="password" type="text" name="password" placeholder="Password">
                            </div>
                            <input class="btn btn-primary mt-3" type="submit" name="submit" value="Update">
                            </form></div>
                          
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
           
        </script>
    </body>
</html>
