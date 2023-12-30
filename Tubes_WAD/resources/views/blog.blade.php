<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>GreenGlow - Blog</title>
</head>

<body>

    <!-- Include Header -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
  <a class="navbar-brand" href="/index">GreenGlow X Rancakalong<span>.</span></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsFurni">
    <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
      </li><a class="nav-link" href="/index">Home</a>
      <li><a class="nav-link" href="shop">Shop</a></li>
      <li><a class="nav-link" href="depan">About us</a></li>
      <li><a class="nav-link" href="about.html">Rancakalong</a></li>
      <li><a class="nav-link" href="contact.html">Contact us</a></li>
      <li><a class="nav-link" href="/">Logout</a></li>
      <li class="nav-item active">
							<a class="nav-link" href="blog">Blog</a>
						</li>
    </ul>

    <!-- <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
      <li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
      <li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
    </ul> -->
  </div>
</div>
  
</nav>
    <!-- End Header/Navigation -->

<!-- Start Blog Section -->
<div class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Updated styling for "Latest Blog Posts" -->
                <h2 class="latest-posts-title">Latest Blog Posts</h2>

                <div class="row">
                    <!-- Sample Blog Post 1 -->
                    <div class="col-md-6 blog-post" style="margin-bottom: 30px;">
                        <div class="blog-header">
                            <img src="images/blog-1.jpg" alt="Blog Post Header Image" class="img-fluid blog-post-image">
                        </div>
                        <h3><a href="#">Sustainable Packaging and its Benefits</a></h3>
                        <p class="meta">Posted by <span>Dhewa Radya</span> on <span>January 1, 2023</span></p>
                        <p class="blog-post-text">Sustainable Packaging has a lot of benefits for the future...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>

                    <!-- Sample Blog Post 2 -->
                    <div class="col-md-6 blog-post" style="margin-bottom: 30px;">
                        <div class="blog-header">
                            <img src="images/blog-2.jpg" alt="Blog Post Header Image" class="img-fluid blog-post-image">
                        </div>
                        <h3><a href="#">Best Materials for Recyclable Packaging</a></h3>
                        <p class="meta">Posted by <span>Rafi Abdul</span> on <span>January 5, 2023</span></p>
                        <p class="blog-post-text">Creating Recyclable packaging isn't easy...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <!-- Additional Blog Post -->
                    <div class="col-md-6 blog-post" style="margin-bottom: 30px;">
                        <div class="blog-header">
                            <img src="images/blog-3.jpg" alt="Blog Post Header Image" class="img-fluid blog-post-image">
                        </div>
                        <h3><a href="#">Is Plastic Waste killing our Planet?</a></h3>
                        <p class="meta">Posted by <span>Justin Surya</span> on <span>January 10, 2023</span></p>
                        <p class="blog-post-text">Plastic Waste is becoming more unmanagable in recent...</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Include Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Add any sidebar content here -->
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</div>
<!-- End Blog Section -->

    <!-- Include Footer -->
    <footer class="footer-section">
        <!-- ... (Copy the entire footer section from the index.html) ... -->
    </footer>
    <!-- End Footer Section -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
