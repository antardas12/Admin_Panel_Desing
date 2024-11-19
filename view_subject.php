<?php $page = "subjects";
include './components/head.php'; ?>
<title>New Subject</title>
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
                                                <span class="collapse-handle">&#9660;</span> Subject
                                                <button class="add-subcategory btn btn-sm btn-info ">+ Add Topic</button>
                                            </div>
                                            <div class="category-body my-2">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="subject" placeholder="Subject Name">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="subcategories"></div>
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
    // Initialize sortable for categories, subcategories, and child categories
    function initializeSortable() {
        $(".category-container").sortable({
            items: ".category",
            handle: ".drag-handle",
            connectWith: ".category-container",
            update: function(event, ui) {
                updateOrder($(this), 'category');
            }
        });

        $(".subcategories").sortable({
            items: ".subcategory",
            handle: ".drag-handle",
            connectWith: ".subcategories",
            update: function(event, ui) {
                updateOrder($(this), 'subcategory');
            }
        });

        $(".child-categories").sortable({
            items: ".child-category",
            handle: ".drag-handle",
            connectWith: ".child-categories",
            update: function(event, ui) {
                updateOrder($(this), 'child-category');
            }
        });
    }

    // Call initializeSortable initially
    initializeSortable();

    // Add subcategory
    $(document).on('click', '.add-subcategory', function() {
        const category = $(this).closest('.category');
        const subcategoryId = new Date().getTime(); // Unique ID
        const subcategoryHtml = `
            <div class="subcategory" data-subcategory-id="${subcategoryId}" data-order="${category.find('.subcategory').length + 1}">
                <div class="subcategory-header">
                    <div class="actions">
                        <span class="drag-handle">&#9776;</span> 
                        <span class="collapse-handle">&#9660;</span> Topic
                        <button class="add-childcategory btn btn-sm btn-info">+ Add ChildCategory</button>
                        <button class="delete-subcategory btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i> </button>
                    </div>
                    <div class="category-body my-2">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="form-control" name="topic" placeholder="Topic Name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="child-categories"></div>
            </div>
        `;
        category.find('.subcategories').append(subcategoryHtml);
        category.find('.subcategories').show(); // Show subcategories container
        initializeSortable(); // Re-initialize sortable for new elements
    });

    // Add child category
    $(document).on('click', '.add-childcategory', function() {
        const subcategory = $(this).closest('.subcategory');
        const childCategoryId = new Date().getTime(); // Unique ID
        const childCategoryHtml = `
            <div class="child-category" data-child-category-id="${childCategoryId}" data-order="${subcategory.find('.child-category').length + 1}">
                <span class="drag-handle">&#9776;</span>Sub Topic
                <button class="delete-childcategory btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i> </button>
                <div class="category-body my-2">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" name="sub_topic[]" placeholder="Sub Topic Name">
                        </div>
                    </div>
                </div>
            </div>
        `;
        subcategory.find('.child-categories').append(childCategoryHtml);
        subcategory.find('.child-categories').show(); // Show child categories container
        initializeSortable(); // Re-initialize sortable for new elements
    });

    // Delete subcategory
    $(document).on('click', '.delete-subcategory', function() {
        $(this).closest('.subcategory').remove();
        updateOrder($(this).closest('.subcategories'), 'subcategory');
    });

    // Delete child category
    $(document).on('click', '.delete-childcategory', function() {
        $(this).closest('.child-category').remove();
        updateOrder($(this).closest('.child-categories'), 'child-category');
    });

    // Collapse/expand subcategories and child categories
    $(document).on('click', '.collapse-handle', function() {
        const header = $(this).closest('.subcategory-header, .category-header');
        const container = header.next();
        const isCollapsed = container.is(':visible');

        // Toggle visibility
        container.toggle();
        
        // Update collapse handle icon
        $(this).html(isCollapsed ? '&#9654;' : '&#9660;');
    });

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