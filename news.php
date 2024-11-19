<?php $page="news"; include './components/head.php'; ?>
        <title>News</title>
    </head>
    <body class="sb-nav-fixed">
        <?php include './components/nav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <?php include './components/sidebar.php';?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <div class="page-header d-flex justify-content-between px-3">
                            <h4 class="mb-0">    
                                <a class="text-dark" style="text-decoration:none" href="">News</a>
                            </h4>
                            <div class="btns">
                                <a href="./add_news" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Add News</a>
                            </div>
                        </div>
                    <div class="container-fluid px-4 mt-3   ">
                    <div class="card shadow mb-4">
                        
                        <div class="card-body pd-sm">
                        <div class="table-responsive">
                                <table class="table table-bordered mt-2" id="myTable" width="100%" cellspacing="0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th >#</th>
                                            <th >Image</th>
                                            <th >Date</th>
                                            <th >Time</th>
                                            <th >Topic</th>
                                            <th >Text</th>
                                            <th >Audio</th>
                                            <th >Action</th>
                                        </tr>
                                    </thead class="bg-light">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>ABC</td>
                                            <td>ABC</td>
                                            <td>ABC</td>
                                            <td>ABC</td>
                                            <td>----Max 20 word here---------</td>
                                            <td>
                                                <audio controls>
                                                    <source src="./assets/audio.mp3" type="audio/mpeg">
                                                    Your browser does not support the audio tag.
                                                </audio>
                                            </td>
                                            <td class="d-flex" style="gap:4px;">
                                                <a href="./view_news" class="btn btn-sm btn-info text-light">View/Edit</a>
                                                <a href="#!" class="btn btn-sm btn-danger">Delete</a>
                                                <!-- <a href="#" class="btn btn-sm btn-danger">Deactivate</a> -->
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
