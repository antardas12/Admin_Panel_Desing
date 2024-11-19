<?php $page = "contents";
include './components/head.php'; ?>

<link href="./css/joedit.css" rel="stylesheet" type="text/css">
<title>View Content</title>
<style>
  #icons .icon {
    flex: 0 0 225px;
  }
</style>
</head>

<body class="sb-nav-fixed">
  <?php include './components/nav.php'; ?>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <?php include './components/sidebar.php'; ?>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <h4 class="page-header">View Content</h4>
        <div class="container-fluid px-4">
          <div class="card shadow mb-4">
            <div class="card-body pd-sm">
              <div class="container-fluid px-4">
                <div class="form-box">
                  <form class="mt-3 row" method="post">
                    <div class="form-group col-lg-4 col-md-6 mt-2">
                      <label for="subject_name">Select Subject</label>
                      <select class="form-control" id="subject_name" name="subject_name">
                        <option>Select Subject</option>
                        <option>Subject 1</option>
                        <option>Subject 2</option>
                        <option>Subject 3</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 mt-2">
                      <label for="topic_name">Select Topic</label>
                      <select class="form-control" id="topic_name" name="topic_name">
                        <option>Select Topic</option>
                        <option>Topic 1</option>
                        <option>Topic 2</option>
                        <option>Topic 3</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 mt-2">
                      <label for="topic_name">Select Sub Topic</label>
                      <select class="form-control" id="topic_name" name="topic_name">
                        <option>Select Sub Topic</option>
                        <option>Topic 1</option>
                        <option>Topic 2</option>
                        <option>Topic 3</option>
                      </select>
                    </div>
                    <div class="form-group col-12 mt-2">
                      <label for="heading">Heading</label>
                      <textarea class="form-control" id="heading" name="heading" placeholder="Text here ..."></textarea>
                    </div>
                    <div class="form-group col-12 mt-2">
                      <label for="content">Content</label>
                      <textarea class="form-control" id="content" name="content" placeholder="Text here ..."></textarea>
                    </div>
                    <div class="form-group mt-2">
                      <label for="audio">Audio</label>
                      <input type="file" name="audio" id="audio" class="form-control" accept="audio/*">
                    </div>

                    <input class="btn btn-primary mt-3" type="submit" name="submit" value="Add">
                  </form>
                </div>

              </div>
            </div>
          </div>

        </div>
      </main>
      <!--<?php include './components/copy.php'; ?>-->
    </div>
  </div>
  <?php include './components/script.php'; ?>
  <script src="./js/joedit.js"></script>
  <script>
    const editor = Jodit.make('#heading');
    const content = Jodit.make('#content');
  </script>
</body>

</html>