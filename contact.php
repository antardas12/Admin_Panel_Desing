

<?php $page="contact"; include './components/head.php'; ?>
        <title>Contact Info</title>
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
                    <h4 class="page-header">Contact Info</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-body pd-sm">
                            <div class="container-fluid px-4">
                        <div class="form-box">
                          <form class="mt-3 row" method="post">
                            <div class="form-group mt-2 col-sm-6">
                              <label for="contact">Contact Number</label>
                              <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact Number">
                            </div>
                            <div class="form-group mt-2 col-sm-6">
                              <label for="whatsapp_num">Whatsapp Number</label>
                              <input class="form-control" id="whatsapp_num" type="text" name="whatsapp_num" placeholder="Whatsapp Number">
                            </div>
                            <div class="d-flex justify-content-end">
                                <input class="btn btn-primary mt-3" type="submit" name="submit" value="Save Changes">
                            </div>
                            
                            </form></div>
                          
                        </div>
                        </div>
                    </div>
                        
                    </div>
                    <div class="container-fluid px-4 mt-3   ">
                    <div class="card shadow mb-4">
                        
                        <div class="card-body pd-sm">
                            <h6>Queries</h6>
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th >#</th>
                                            <th >Username</th>
                                            <th >Phone</th>
                                            <th >Subject</th>
                                            <th >Message</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rahul Das</td>
                                            <td>98985986</td>
                                            <td>------</td>
                                            <td>------</td>
                                            <td class="d-flex" style="gap:4px;">
                                                <a href="./view_user" class="btn btn-sm btn-info text-light">View/Edit</a>
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
