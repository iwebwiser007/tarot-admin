<!-- Hy-Genius Admin Panel project start from 24 Jan 2025 12:00 PM -->
<!DOCTYPE html>
<!-- html tag start here... -->
<html lang="en">
<!-- Head tag start here... -->

<head>

  <!-- Meta tags start here... -->
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
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
  <!-- All css links end here... -->
  <!-- favicon icon start here -->
  <!-- <link
    rel="icon"
    type="image/x-icon"
    href="{{ asset('public/assets/icons/logo-1-removebg-preview.png') }}" /> -->
    <link
    rel="icon"
    type="image/x-icon"
    href="{{ asset('public/assets/icons/card4.png') }}" />
  <link href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- favicon icon end here -->
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
                        src="{{asset('public/assets/images/card1.webp')}}"
                        alt="BootstrapBrain Logo" />
                    </a>
                  </div> -->
                  <!-- logo end here -->

                  <div class="login-title">
                    <h2>Forgot Password</h2>
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
                  <!-- form start here  -->
                  <div class="form-div">
                    <!-- Forgot Password Form -->
                    <form action="{{ route('admin.forgot-password') }}" method="POST" id="forgot-password-form">
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
                              placeholder="Enter your email"
                              required />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="d-grid my-3">
                            <button class="btn btn-teal" type="submit">Send Reset Link</button>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="text-center">
                            <span>
                              Remember it?
                              <a href="{{ url('admin/login') }}" class="text-decoration-none">Back to Login</a>
                            </span>
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
<!-- body tag end here... -->

</html>
<!-- html tag end here... -->