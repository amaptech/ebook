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
    @include('author.css')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
            @include('author.spinner')
        <!-- Spinner End -->


        <!-- Sidebar Start -->
            @include('author.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
                @include('author.navbar')
            <!-- Navbar End -->

            <h1 class="text-center display-6">All Books</h1>
                <div class="container my-4">
                    <table class="table border-2 border-white table-striped">
                        <thead>
                            <tr class="">
                                <th>Book Id</th>
                                <th>Book Name</th>
                                <th>Description</th>
                                <th>Author</th>
                                <th>Type / Price</th>
                                <th>image</th>
                                <th>Download / Read</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $b)
                            @if ($b->author == Auth::User()->name)
                            <tr>
                                <td>{{$b->id}}</td>
                                <td>{{$b->bookname}}</td>
                                <td>{{$b->description}}</td>
                                <td>{{$b->author}}</td>
                                <td>{{$b->type}}</td>
                                <td><img style="height : 60px" src="{{url('bookimg/' , $b->image)}}"></td>
                                <td><a target="_blank" class="btn btn-primary" href="{{url('bookfile/' , $b->file)}}">Download / Read</a></td>
                                <td><a href="" class="btn btn-info">Edit</a></td>
                                <td><a onclick="return confirm('Are You Sure To Delete This')" href="{{url('delete_book' , $b->id )}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @endif
                            @endforeach



                        </tbody>
                    </table>
                </div>






            <!-- Footer Start -->
                @include('author.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('author.script')
</body>

</html>


