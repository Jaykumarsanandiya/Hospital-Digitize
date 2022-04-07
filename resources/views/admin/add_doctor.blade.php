<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->

    @include('admin.css');
    <style>
        .flex-container {
    flex-direction: column;
  }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and
                                more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" style="flex-direction: column;">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            
            <div class="container-fluid page-body-wrapper flex-container">

                @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <form style="width: 60%;" method="POST" enctype="multipart/form-data"
                    action="{{ url('doctor_add') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Doctor Name</label>
                        <input type="text" style="color:red" class="form-control" name="name"
                            aria-describedby="emailHelp" placeholder="Enter doctor name" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" style="color:red" class="form-control" name="phone"
                            aria-describedby="emailHelp" placeholder="Enter Doctor Phone" required>

                    </div>
                    <label>Speciality</label>
                    <select name="speciality" style="color: black" required>
                        <option value="Eye">Eye</option>
                        <option value="Skin">Skin</option>
                        <option value="Child">Child</option>
                        <option value="Heart">Heart</option>


                    </select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Room Number</label>
                        <input type="text" style="color:red" class="form-control" name="room"
                            aria-describedby="emailHelp" placeholder="Enter Room Number" required>

                    </div>
                    <label for="exampleInputEmail1">Image of Doctor</label>
                    <input type="file" name="image_url" required>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
</body>

</html>
