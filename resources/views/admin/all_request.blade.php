<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    @include('admin.css')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
            @include('admin.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            @include('admin.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('admin.navbar')
            <!-- Navbar End -->

            <h1 class="text-center display-6">All Author</h1>
                <div class="container my-4">
                    <table class="table border-2 border-white table-striped">
                        <thead>
                            <tr class="">
                                <th>Id</th>
                                <th>Book Id</th>
                                <th>User Name</th>
                                <th>Book Name</th>
                                <th>Book image</th>
                                <th>Book File</th>
                                <th>Book Author</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($req as $r)
                            @if($r->status != "Cancelled")
                            <tr>
                                <td>{{$r->id}}</td>
                                <td>{{$r->bookid}}</td>
                                <td>{{$r->username}}</td>
                                <td>{{$r->bookname}}</td>
                                <td><img style="height : 60px" src="{{url('bookimg' , $r->bookimg)}}"></td>
                                <td><a target="_blank" href="{{url('bookfile' , $r->bookfile)}}">Read Book</a></td>
                                <td>{{$r->bookauthor}}</td>
                                <td>{{$r->bookprice}}</td>
                                <td>{{$r->status}}</td>
                                <td><a href="{{url('/req_app' , $r->id)}}" class="btn btn-info">Approved</a> <a onclick="return confirm('Are You Sure To Delete This')" href="{{url('/req_can' , $r->id)}}" class="btn btn-danger">Canceled</a></td>

                            </tr>
                            @endif

                            @endforeach



                        </tbody>
                    </table>
                </div>






            <!-- Footer Start -->
                @include('admin.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admin.script')
</body>

</html>


