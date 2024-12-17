<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="author/img/favicon.ico" rel="icon">

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

            <h1 class="text-center display-6">Add Blog</h1>
            <div class="container">
                <form action="/upload_blog" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="my-3">
                    <input name="blogtitle" type="text" class="form-control border-2 border-white" placeholder="Blog Title" required>
                </div>
                <div class="my-3">
                    <textarea name="blogdescription" type="text" class="form-control border-2 border-white" placeholder="Blog Description" required></textarea>
                </div>
                <div class="my-3">
                    <label class="mb-2" for="">Blog Cover Image</label>
                    <input name="image" type="file" class="form-control border-2 border-white" required>
                </div>
                <div class="my-3">
                    <button class="btn btn-danger">Add Blog</button>
                </div>
            </form>
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
    @include('author.script')
</body>

</html>


