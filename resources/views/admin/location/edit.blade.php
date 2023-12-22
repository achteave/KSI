<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/edit_location.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/themify-icons.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-treeview@1.2.0/dist/bootstrap-treeview.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.css">

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

</head>

<body class="fix-header">
    <div class="wrapper">
        @include('admin.partials.sidebar')

<!-- isi -->
<div class="content-wrapper px-4">
<br>
    <h1>Edit Location</h1>
<br>
    <form action="{{ url('/admin/locations/'.$loc->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="container">
        <div class="col">
            <div class="form-group">
                <label class="control-label">Nama Cabang</label>
                <input type="text" name="branch_name" class="form-control" placeholder="Insert Title" value="{{ old('branch_name', $loc->branch_name) }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group has-danger">
                <label class="control-label">Alamat</label>
                <input type="text" name="address" class="form-control" placeholder="Lorem Ipsum" value="{{ old('address', $loc->address) }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group has-danger">
                <label class="control-label">Link GPS</label>
                <input type="text" name="gmaps" class="form-control" placeholder="Lorem Ipsum" value="{{ old('gmaps', $loc->gmaps) }}">
            </div>
        </div>
        <div class="col">
            <div class="form-group has-danger">
                <label class="control-label">Image</label>
                <input type="file" name="image" id="lastName" class="form-control form-control-danger" placeholder="12n">
                    <br>
            </div>
        </div>
        <div class="form-actions text-center pb-3">
            <input type="submit" name="submit" class="btn btn-success mx-auto" value="Save"> 
            <a href="{{ url('admin/locations/index') }}" class="btn btn-inverse mx-auto">Cancel</a>
        </div>
    </div>
    </form>
</div>
</body>
</html>