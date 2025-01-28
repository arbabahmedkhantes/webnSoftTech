<?php include 'layouts/session.php'; ?>
<?php include 'layouts/main.php'; ?>

<head>

    <?php includeFileWithVariables('layouts/title-meta.php', array('title' => 'Basic Elements')); ?>

    <?php include 'layouts/head-css.php'; ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'layouts/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php includeFileWithVariables('layouts/page-title.php', array('pagetitle' => 'Blog Posts', 'title' => 'Add New Blog Post')); ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Add New Blog Post</h4>
                                    
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <form action="blogs/save_blog.php" method="post" enctype="multipart/form-data">

                                        <div class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="author" class="form-label">Author</label>
                                                    <input type="text" class="form-control" id="author" placeholder="Enter Title" name="author" required>
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="slug" class="form-label">Slug</label>
                                                    <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="image" class="form-label">Select Blog Image:</label>
                                                    <input class="form-control" type="file" id="image" accept="image/*" name="image">
                                                </div>
                                            </div>
                                            
                                            <div class="col-xxl-12 col-md-6">
                                                <div>
                                                    <label for="content1" class="form-label">Content</label>
                                                    <textarea id="content1" name="content1" class="form-control" required></textarea>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-6">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Publish</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>

                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php include 'layouts/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php //include 'layouts/customizer.php'; ?>

    <?php include 'layouts/vendor-scripts.php'; ?>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>