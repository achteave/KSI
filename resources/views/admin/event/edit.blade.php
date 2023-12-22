<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Klik Semangat Indonesia</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin/edit_event.css') }}">
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
<br>
    <h1>Edit Events</h1>
<br>
    <form action="{{ url('/admin/events/'.$event->id) }}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="container">
        <div class="row p-t-20 p-1">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Insert Title" value="{{ old('title', $event->title)  }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <label class="control-label">Date</label>
                    <input type="date" name="date" class="form-control form-control-danger" value="{{ old('date', $event->date) }}">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label class="control-label">Description</label>
                <input type="text" name="body" class="form-control" placeholder="Write Description Here" value="{{ old('body', $event->body) }}">
            </div>
        </div>

        <div class="col">
            <div class="form-group has-danger">
                <label class="control-label">Image</label>
                <input type="file" name="image" id="lastName" class="form-control form-control-danger" placeholder="12n" value="{{ $event->image }}">
                <br>
            </div>
        </div>

        <div class="form-actions text-center pb-3">
            <input type="submit" name="submit" class="btn btn-success mx-auto" value="Save"> 
            <a href="{{ url('admin/events') }}" class="btn btn-inverse mx-auto">Cancel</a>
        </div>
    </div>
    </form>
</div>
</body>
</html>
