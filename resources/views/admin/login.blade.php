<!DOCTYPE html>
<!-- html tag start here... -->
<html lang="en">
    
<!-- Head tag start here... -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta tags end here... -->

    <!-- title start here... -->
    <title>Tarot-Card</title>
    <!-- title end here... -->

    <!-- All css links start here... -->
    <link
        rel="stylesheet"
        href="{{asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="../public/assets/scss/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.css" />

    <!-- All css links end here... -->

    <!-- favicon icon start here -->
    <link
        rel="icon"
        type="image/x-icon"
        href="{{ asset('public/assets/icons/card4.png') }}" />
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- favicon icon end here -->
    <style>
        .eyebtn {
            position: absolute;
            cursor: pointer;
            top: 50%;
            right: 20px;
            /* Adjust the right distance to your liking */
            transform: translateY(-50%);
            /* Vertically center the icon */
            display: flex;
            align-items: left;
            justify-content: left;
            padding: 0;
            border: 0;
            background: 0;
            margin-left: 200px;
        }

        /* Style for the icon */
        .eyebtn i {
            font-size: 20px;
            /* You can adjust the size */
            line-height: normal;
        }
    </style>
</head>
<!-- Head tag end here... -->

<!-- body tag start here... -->

<body style="height: 100vh; margin: 0; padding: 0">
    <!-- main-container start here  -->
    <div
        class="main-container main_login"
        style="
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        padding: 0;
      ">
        <!-- wrapper start here  -->
        <div
            class="wrapper"
            style="height: 100%; width: 100%; margin: 0; padding: 0">
            <div>
                <!-- wrapper content start here  -->
                <div
                    class="wrapper-content"
                    style="height: 100%; margin: 0; padding: 0">
                    <div
                        class="container-fluid h-100"
                        style="height: 100vh; margin: 0; padding: 0">
                        <div
                            class="row login-container h-100"
                            style="
                  height: 100vh;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  margin: 0;
                  padding: 0;
                ">
                            <!-- Image Section -->
                            <div
                                class="col-md-7 d-none d-md-block image-section"
                                style="height: 100vh; padding: 0">
                                <img
                                    src="{{asset('public/assets/images/card1.webp')}}"
                                    alt=""
                                    style="
                      height: 100vh;
                      width: 100%;
                      object-fit: cover;
                      display: block;
                    " />
                            </div>

                            <!-- Login Form Section -->
                            <div
                                class="col-md-5 d-flex align-items-center justify-content-center"
                                style="height: 100vh; margin: 0; padding: 0">
                                <div
                                    class="w-75"
                                    style="
                      height: 100%;
                      display: flex;
                      flex-direction: column;
                      justify-content: center;
                      margin: 0;
                      padding: 0;
                    ">
                                    <!-- logo start here  -->
                                    <!-- <div class="mx-auto mb-4">
                                        <a href="#" class="brand-logo">
                                            <img
                                                src="{{asset('public/assets/images/card4.png')}}"
                                                alt="BootstrapBrain Logo" />
                                        </a>
                                    </div> -->
                                    <div class="login-title">
                                        <h2>Login</h2>
                                    </div>
                                    
                                    @if (Session::has('success_message'))
                                    <!-- Check vendorRegister() method in Front/VendorController.php -->
                                    <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                                        role="alert">
                                        <div>
                                            <strong>Success:</strong> {{ Session::get('success_message') }}
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <!-- logo end here -->
                                    @if (Session::has('error_message'))
                                    <!-- Check vendorRegister() method in Front/VendorController.php -->
                                    <div class="alert alert-danger alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                                        role="alert">
                                        <div>
                                            <strong>Error:</strong> {{ Session::get('error_message') }}
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif

                                    <!-- form start here  -->
                                    <div class="form-div">
                                        <form action="{{ url('admin/login') }}" method="post" data-parsley-validate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label my-0">Email</label>
                                                        <input
                                                            type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email"
                                                            id="email"
                                                            placeholder="Enter Email Address..."
                                                            value="{{ old('email') }}"
                                                            data-parsley-required="true"
                                                            data-parsley-type="email"
                                                            data-parsley-error-message="Please enter a valid email address." />
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label my-0">Password</label>
                                                        <div class="position-relative password_div">
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                name="password"
                                                                id="password"
                                                                placeholder="Enter Password..."
                                                                data-parsley-required="true"
                                                                data-parsley-minlength="6"
                                                                data-parsley-error-message="Password must be at least 6 characters long." />

                                                            <!-- <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 576 512"
                                                                width="18"
                                                                height="18"
                                                                fill="#8F8880"
                                                                class="position-absolute end-0 top-0 search_icon">
                                                                <path
                                                                    d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                                                            </svg> -->

                                                            <span class="eyebtn" id="eye-toggle-password">
                                                                <i class="bi bi-eye" id="password-toggles-password"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <a href="{{ url('admin/forgot-password') }}" class="text-decoration-none forgot_pass">Forgot password?</a>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="d-grid my-3">
                                                        <button class="btn btn-teal" type="submit">Log in</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!-- form end here  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrapper content end here  -->
            </div>
        </div>
        <!-- wrapper end here  -->
    </div>
    <!-- main-container end here  -->

    <!-- All js scripts start here... -->
    <script src="{{asset('public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
    <script src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script>
    <script src="{{ asset('public/assets/js/toastr.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- Inject Toastr data from session -->
<script>
    @if (session()->has('toastr'))
        window.toastrData = @json(session('toastr'));
    @endif
</script>

        <!-- All js scripts end here... -->
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // For password field
        const passwordField = document.getElementById('password');
        const passwordToggleIcon = document.getElementById('password-toggles-password');

        passwordToggleIcon.addEventListener('click', function() {
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Show password
                passwordToggleIcon.classList.remove('bi-eye');
                passwordToggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password'; // Hide password
                passwordToggleIcon.classList.remove('bi-eye-slash');
                passwordToggleIcon.classList.add('bi-eye');
            }
        });
    });
</script>
<!-- body tag end here... -->

</html>
<!-- html tag end here... -->