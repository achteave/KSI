<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/all_location.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/themify-icons.css') }}">

    <!-- External CSS -->
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
    <h1>All Location</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ url('admin/locations/create') }}" class="btn btn-primary">Add Location</a>
    </div>
<br>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>                
                <th scope="col">Nama Cabang</th>
                <th scope="col">Alamat</th>
                <th scope="col">Link GPS</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            @foreach ($locs as $loc)
            <tbody>
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $loc->branch_name }}</td>
                    <td>{{ $loc->address }}</td>
                    <td>{{ $loc->gmaps }}</td>
                    <td>
                            <img src="{{ asset('storage/' . $loc->image) }}" alt="" style="max-height: 100px;"></td>
                        
                    <td>
                    <a href="/admin/locations/{{ $loc->id }}/edit" class="btn btn-info btn-flat btn-addon btn-xs m-b-10">
                        <i class="ti-pencil-alt" style="font-size: 16px;"></i>
                    </a>
                    <form action="/admin/locations/{{ $loc->id }}" method="post" class="d-inline">
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
