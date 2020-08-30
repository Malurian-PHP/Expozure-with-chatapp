<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up for our Social Media app</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ URL::asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <nav class="alert alert-primary" role="alert" style="background:none; border: none">
        <a class="navbar-brand" href="{{ url('/') }}" style="font-family: helvetic;color: aquamarine;">
        <img src="/img/medium.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Expozure
        </a>
        {{-- <a class="navbar-brand" style="color:black;float: right" href="{{ url('sign') }}">Login</a> --}}
    </nav>

    @yield('content')
    <!-- Footer -->
        <footer style="background: #cce5ff;" class="page-footer font-small special-color-dark pt-4">

            <!-- Footer Elements -->
            <div class="container">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                <!-- Form -->
                <form class="form-inline">
                    <input class="form-input form-control-sm mr-3 w-75" type="text" placeholder="Search"
                    aria-label="Search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </form>
                <!-- Form -->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                <form class="input-group">
                    <input style="width:30vw" type="text" class="form-input form-control-sm" placeholder="Your email"
                    aria-label="Your email" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                    </div>
                </form>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://www.fiverr.com/users/wordpress_slick/seller_dashboard"> minkstrings</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

    <!-- JS -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
