<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">
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

<!-- Navbar -->
{{-- <nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <div class="navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted" href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                    </a>
                </li>
                <li class="nav-item m-l-10">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted" href="javascript:void(0)">
                    </a>
                </li>
                
                <!-- search -->
                {{-- <li class="nav-item d-flex align-items-center">
                    <form class="form-inline my-2 my-lg-0 mx-auto" id="searchBar">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 300px; border-radius: 5px;">
                    </form>
                </li> --}}

                <ul class="navbar-nav ml-auto">
                <!-- profile -->
                <div class="dropdown d-flex align-items-center px-2">
                    <a href="#" class="nav-link dropdown-toggle text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="" alt="admin" class="profile-pic" style="width: 30px; height: 30px; border-radius: 50%;" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>

                <!-- Notifications -->
                <!-- <div class="dropdown d-flex align-items-center">
                <a href="#" class="nav-link dropdown-toggle text-muted" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </a>
                    </div>
                </div> -->
                </ul>
            </ul>
        </div>
    </ul>
</nav>
        
@include('admin.partials.sidebar')

<!-- isi -->
<div class="content-wrapper px-4">
    <h1>All Events</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ url('admin/events/create') }}" class="btn btn-primary">Add Event</a>
    </div>
<br>
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            @foreach ($events as $ev)
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $ev->title }}</td>
                    <td>{{ $ev->body }}</td>
                    <td>{{ $ev->date }}</td>
                    <td>
                            <img src="{{ asset('storage/public/' . $ev->image) }}" alt="" style="max-height: 100px;"></td>
                        
                    <td>
                    <a href="/admin/events/{{ $ev->id }}/edit" class="btn btn-info btn-flat btn-addon btn-xs m-b-10">
                        <i class="ti-pencil-alt" style="font-size: 16px;"></i>
                    </a>
                    <form action="/admin/events/{{ $ev->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-flat btn-addon btn-xs m-b-10" onclick="return confirm('Are you sure?')"><i class="ti-trash" style="font-size: 16px;"></i></button>
                    </form>
                    </td>
                </tr>
            </tbody>
                
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
