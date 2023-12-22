<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/add_banner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/themify-icons.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-treeview@1.2.0/dist/bootstrap-treeview.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500&family=Plus+Jakarta+Sans:wght@300&display=swap" rel="stylesheet">
    

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-treeview@1.2.0/dist/bootstrap-treeview.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>

<body>
<div class="wrapper">

<!-- Sidebar -->
<aside class="main-sidebar elevation-4" style="height: 100vh; position: fixed; background-color: white; color: black;">
    <div class="small-logo-container">
        <img src="{{ asset('images/logo.png') }}" alt="logo.png" class="small-logo" style="width: 200px; height: 50px;">
    </div>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="ti-write"></i>
                        <p>Events</p>
                        <i class="right fas fa-angle-left"></i>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/index') }}" class="nav-link">
                                    <p>All Events</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/edit_event') }}" class="nav-link">
                                    <p>Update Events</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="ti-location-pin"></i>
                            <p>Location</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/all_location') }}" class="nav-link">
                                <p>All Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/edit_location') }}" class="nav-link">
                                <p>Update Location</p>
                            </a>
                        </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/application') }}" class="nav-link">
                        <i class="ti-info-alt"></i>
                        <p>Job Application</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/customer') }}" class="nav-link">
                        <i class="ti-user"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <div class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="ti-notepad"></i>
                                <p>Banner</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('admin/banner') }}" class="nav-link">
                                    <p>All banner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/edit_banner') }}" class="nav-link">
                                    <p>Update banner</p>
                                </a>
                            </li>
                            </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<!-- isi -->
<div class="content-wrapper px-4">
<br>
    <h1>Add New Banner</h1>
<br>
    <div class="container">
    <div class="col">
        <div class="form-group has-danger">
            <label class="control-label">Image</label>
            <input type="file" name="file" id="lastName" class="form-control form-control-danger" placeholder="12n">
            <br>
        </div>
    </div>
    <div class="form-actions text-center pb-3">
        <input type="submit" name="submit" class="btn btn-success mx-auto" value="Save"> 
        <a href="{{ url('admin/banner') }}" class="btn btn-inverse mx-auto">Cancel</a>
    </div>
    </div>
</div>
</body>
</html>
