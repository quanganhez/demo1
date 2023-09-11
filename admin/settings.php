<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Settings Page</title>
  
    <?php 
        require('inc/links.php')
    ?>

    <link rel="stylesheet" href="./css/common.css">

</head>
<body class="bg-light">
    
    <?php require('inc/sidebar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden" id="main-content">
                <h2 class="mb-4 fw-bold note-font">SETTINGS</h2>

                <!-- Main setting -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title m-0">Page settings</h4>
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#page-settings">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text">Content</p>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Message</h6>
                        <p class="card-text">Content</p>
                    </div>
                </div>

                <!-- Model -->

                <div class="modal fade" id="page-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Page settings</h5>
                                </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" class="form-control shadow-none">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Site Message</label>
                                    <textarea name="site_Message" class="form-control shadow-none" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary text-white shadow-none">Submit</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require('inc/script.php')
    ?>
</body>
</html>