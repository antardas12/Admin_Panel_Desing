<?php $page = "subjects";
include './components/head.php'; ?>
<title>New Subject</title>
<style>
    #icons .icon {
        flex: 0 0 225px;
    }
    .category-header{
        position: relative;
    }
    .category-header .actions{
        position: absolute;
        top: 0;
        right: 0;
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
                <h4 class="page-header">New Subject</h4>
                <div class="container-fluid px-4">
                    <div class="card shadow mb-4">
                        <div class="card-body pd-sm">
                            <div class="container-fluid p-0">
                                <div class="form-box">
                                <div class="category-container">
                                    <div class="category" data-category-id="1" data-order="1">
                                        <div class="category-header">
                                            <div class="actions">
                                                <span class="drag-handle">&#9776;</span> 
                                            </div>
                                            <div class="category-body my-2">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="https://static-00.iconduck.com/assets.00/javascript-js-icon-2048x2048-nyxvtvk0.png" alt="image" height="50px">
                                                    <h3 class="mb-0">Javascript</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category" data-category-id="1" data-order="2">
                                        <div class="category-header">
                                            <div class="actions">
                                                <span class="drag-handle">&#9776;</span> 
                                            </div>
                                            <div class="category-body my-2">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="https://i0.wp.com/junilearning.com/wp-content/uploads/2020/06/python-programming-language.webp?fit=800%2C800&ssl=1" alt="image" height="50px">
                                                    <h3 class="mb-0">Python</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category" data-category-id="1" data-order="3">
                                        <div class="category-header">
                                            <div class="actions">
                                                <span class="drag-handle">&#9776;</span> 
                                            </div>
                                            <div class="category-body my-2">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSoW3g9hjXIasgon-kpzz-lD9z4SsalyPbZA&s" alt="image" height="50px">
                                                    <h3 class="mb-0">React Js</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
    <script>
    $(function() {
    function initializeSortable() {
        $(".category-container").sortable({
            items: ".category",
            handle: ".drag-handle",
            connectWith: ".category-container",
            update: function(event, ui) {
                updateOrder($(this), 'category');
            }
        });

    }

    // Call initializeSortable initially
    initializeSortable();

    // Update order data-attribute
    function updateOrder(container, type) {
        container.children().each(function(index) {
            $(this).attr('data-order', index + 1);
        });
    }
});

    </script>
</body>

</html>