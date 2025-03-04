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
            transform: translateY(-50%);
            display: flex;
            align-items: left;
            justify-content: left;
            padding: 0;
            border: 0;
            background: 0;
            margin-left: 200px;
        }

        .eyebtn i {
            font-size: 20px;
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
                            style="height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; padding: 0">
                            <!-- Image Section -->
                            <div
                                class="col-md-7 d-none d-md-block image-section"
                                style="height: 100vh; padding: 0">
                                <img
                                    src="{{asset('public/assets/images/card1.webp')}}"
                                    alt=""
                                    style="height: 100vh; width: 100%; object-fit: cover; display: block;" />
                            </div>

                            <!-- New Password Form Section -->
                            <div
                                class="col-md-5 d-flex align-items-center justify-content-center"
                                style="height: 100vh; margin: 0; padding: 0">
                                <div
                                    class="w-75"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: center; margin: 0; padding: 0">
                                    <!-- logo start here  -->
                                    
                                    <!-- <div class="mx-auto mb-4">
                                        <a href="#" class="brand-logo">
                                            <img
                                                src="{{asset('public/assets/images/card1.webp')}}"
                                                alt="Logo" />
                                        </a>
                                    </div> -->
                                    <div class="login-title">
                    <h2>Change Password</h2>
                  </div>
                                    
                                    @if (Session::has('success_message'))
                                    <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                                        role="alert">
                                        <div>
                                            <strong>Success:</strong> {{ Session::get('success_message') }}
                                        </div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    @if (Session::has('error_message'))
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
                                        <form action="{{ url('admin/new-password') }}" method="post" data-parsley-validate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="old-password" class="form-label my-0">Old Password</label>
                                                        <div class="position-relative password_div">
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                name="old_password"
                                                                id="old-password"
                                                                placeholder="Enter Old Password..."
                                                                data-parsley-required="true" />
                                                            <span class="eyebtn" id="eye-toggle-old-password">
                                                                <i class="bi bi-eye" id="old-password-toggle"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="new-password" class="form-label my-0">New Password</label>
                                                        <div class="position-relative password_div">
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                name="new_password"
                                                                id="new-password"
                                                                placeholder="Enter New Password..."
                                                                data-parsley-required="true"
                                                                data-parsley-minlength="6"
                                                                data-parsley-error-message="Password must be at least 6 characters long." />
                                                            <span class="eyebtn" id="eye-toggle-new-password">
                                                                <i class="bi bi-eye" id="new-password-toggle"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="confirm-password" class="form-label my-0">Confirm Password</label>
                                                        <div class="position-relative password_div">
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                name="confirm_password"
                                                                id="confirm-password"
                                                                placeholder="Confirm New Password..."
                                                                data-parsley-required="true"
                                                                 data-parsley-minlength="6"
                                                                data-parsley-error-message="Password must be at least 6 characters long."
                                                                data-parsley-equalto="#new-password" />
                                                            <span class="eyebtn" id="eye-toggle-confirm-password">
                                                                <i class="bi bi-eye" id="confirm-password-toggle"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="d-grid my-3">
                                                        <button class="btn btn-teal" type="submit">Save</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script>

    <!-- Password toggle script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const oldPasswordField = document.getElementById('old-password');
            const newPasswordField = document.getElementById('new-password');
            const confirmPasswordField = document.getElementById('confirm-password');

            const oldPasswordToggleIcon = document.getElementById('old-password-toggle');
            const newPasswordToggleIcon = document.getElementById('new-password-toggle');
            const confirmPasswordToggleIcon = document.getElementById('confirm-password-toggle');

            // Old Password toggle
            oldPasswordToggleIcon.addEventListener('click', function() {
                togglePasswordVisibility(oldPasswordField, oldPasswordToggleIcon);
            });

            // New Password toggle
            newPasswordToggleIcon.addEventListener('click', function() {
                togglePasswordVisibility(newPasswordField, newPasswordToggleIcon);
            });

            // Confirm Password toggle
            confirmPasswordToggleIcon.addEventListener('click', function() {
                togglePasswordVisibility(confirmPasswordField, confirmPasswordToggleIcon);
            });

            function togglePasswordVisibility(field, icon) {
                if (field.type === 'password') {
                    field.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                } else {
                    field.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
            }
        });
    </script>
    <!-- All js scripts end here... -->
</body>
<!-- body tag end here... -->

</html>
<!-- html tag end here... -->