

<?php $page="profile"; include './components/head.php'; ?>
        <title>Profile Info</title>
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
                    <h4 class="page-header">Profile Info</h4>
                    <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-body pd-sm">
                            <div class="container-fluid px-4">
                        <div class="form-box">
                          <form class="mt-3" method="post">
                            <div class="form-group mt-2">
                              <label for="dp"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&s" width="200px" alt=""></label>
                              <input class="form-control" id="dp" type="file" name="dp">
                            </div>
                            <div class="form-group mt-2">
                              <label for="whatsapp_num">Profile Name</label>
                              <input class="form-control" id="whatsapp_num" type="text" name="whatsapp_num" placeholder="Whatsapp Number">
                            </div>
                            
                            <input class="btn btn-primary mt-3" type="submit" name="submit" value="Save">
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
