<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/banner.css') }}">
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

    @include('admin.partials.sidebar')

<!-- isi -->
<div class="content-wrapper px-4">
    <h1>Banner</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ url('admin/add_banner') }}" class="btn btn-primary">Add Banner</a>
    </div>
<br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                <td>IMAGE</td>
                <td>
                <a href="#" class="btn btn-info btn-flat btn-addon btn-xs m-b-10">
                    <i class="ti-pencil-alt" style="font-size: 16px;"></i>
                </a>
                <a href="#" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10">
                    <i class="ti-trash" style="font-size: 16px;"></i>
                </a>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
