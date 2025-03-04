<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- title start here... -->
    <title>Tarot-Card</title>
    <!-- title end here... -->

    <!-- All css links start here... -->
    <link
        rel="stylesheet"
        href="{{asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/scss/main.css')}}" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- All css links end here... -->

    <!-- favicon icon start here -->
    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('public/assets/icons/card4.png') }}" />
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <div class="main-container">
        <div class="wrapper">
            <div>
                <div class="wrapper-content">
                    @include('components.admin.nav')
                    @include('components.admin.header')
                    @yield('content')
                    @include('components.admin.footer')
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('public/assets/js/toastr.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    @if (session()->has('toastr'))
        window.toastrData = @json(session('toastr'));
    @endif
</script>
</body>


</html>


