<?php

global $dir;
//var_dump($dir);
//die();
//global $data;
//
//foreach ($data as $item){
//
//    foreach ($item as $key=>$value){
//        echo $key.' : '.$value.'<br>';
//    }
//    echo '<hr>';
//
//}
//
//
//
//?>

<!--<form action="--><?php //echo url('file/create')?><!--">-->
<!--    <button type="submit">create</button>-->
<!--</form>-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>My Files</title>
</head>
<body class="bg-light">

<div class="modal fade" id="makeDirModal" tabindex="-1" aria-labelledby="makeDirModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Make a new Directory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="#" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="path" value="#">
                    <div class="form-floating mb-3">
                        <input type="text" name="dirname" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Directory Name</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="rename" tabindex="-1" aria-labelledby="rename" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="renamelabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<div class="container ">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Google Drive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="#" class="btn btn-outline-primary me-2">Add file to this directory</a>
                    <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#makeDirModal">
                        Make directory
                    </button>
                </div>
                <div class="">
<!--                    <h5 class="">Make a new Directory</h5>-->
                    <a href="<?php echo url('users/index') ?>" class="btn btn-primary">go to user index</a>
                </div>
            </div>
        </div>
    </nav>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item " aria-current="page">
                <a class="text-decoration-none" href="#">

                </a>
            </li>

        </ol>
    </nav>
    <div class="shadow rounded w-100 container">
        <div class="px-2 py-3">
            <!--           if-->
            <?php if (count($dir) == 0) { ?>

                <div class="text-center fs-2 mb-5 text-secondary">
                    There is no file here :(
                </div>
            <?php } ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 w-100 g-2">

                <?php foreach ($dir as $key => $file) { ?>
                    <div class="col">

                        <div class="row w-100 border rounded py-3">
                            <div class="col-4">
                                <div class="w-100 ratio ratio-1x1 border rounded">
                                    <a href="#" class="text-decoration-none text-dark h-100">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <i class="bi bi-folder fs-1 text-secondary"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <div>
                                        Name:<?= $key ?>
                                    </div>
                                    <div>
                                    </div>

                                    <div>
                                        Size: <?php //todo: function for count all size ?>
                                    </div>

                                    <div>
                                        Type:
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="fs-5 d-flex flex-column justify-content-between gap-1 h-100">
                                    <button class="btn btn-primary p-1" data-bs-toggle="modal" data-bs-target="#rename">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-danger p-1">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>