<?php
$admin = \App\Models\User::get()->first();
?>
@extends('components.admin.layouts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.css" />
@section('content')
<div class="main-right-container" id="main-right-container">
    <!-- main data start here  -->
    <div class="main-data">
        <div class="container-fluid">
            <div class="dash_header">
                <div class="dash_title">
                    <h2>Admin Profile</h2>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('admin/dashboard')}}"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        x="0px"
                                        y="0px"
                                        width="14"
                                        height="14"
                                        viewBox="0,0,256,256">
                                        <g
                                            fill="#384555"
                                            fill-rule="nonzero"
                                            stroke="none"
                                            stroke-width="1"
                                            stroke-linecap="butt"
                                            stroke-linejoin="miter"
                                            stroke-miterlimit="10"
                                            stroke-dasharray=""
                                            stroke-dashoffset="0"
                                            font-family="none"
                                            font-weight="none"
                                            font-size="none"
                                            text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(10.66667,10.66667)">
                                                <path
                                                    d="M12,2.09961l-11,9.90039h3v9h7v-6h2v6h7v-9h3zM12,4.79102l6,5.40039v0.80859v8h-3v-6h-6v6h-3v-8.80859z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0,0,256,256"
                                    width="14"
                                    height="14"
                                    fill-rule="nonzero">
                                    <g
                                        fill="#04aa9e"
                                        fill-rule="nonzero"
                                        stroke="none"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                        stroke-linejoin="miter"
                                        stroke-miterlimit="10"
                                        stroke-dasharray=""
                                        stroke-dashoffset="0"
                                        font-family="none"
                                        font-weight="none"
                                        font-size="none"
                                        text-anchor="none"
                                        style="mix-blend-mode: normal">
                                        <g transform="scale(10.66667,10.66667)">
                                            <path
                                                d="M12,2c-2.19733,0 -4,1.80267 -4,4v1c0,2.19733 1.80267,4 4,4c2.19733,0 4,-1.80267 4,-4v-1c0,-2.19733 -1.80267,-4 -4,-4zM12,4c1.11667,0 2,0.88333 2,2v1c0,1.11667 -0.88333,2 -2,2c-1.11667,0 -2,-0.88333 -2,-2v-1c0,-1.11667 0.88333,-2 2,-2zM10,13c-0.08162,-0.00015 -0.16296,0.00968 -0.24219,0.0293c-4.38045,1.09511 -6.58984,4.41602 -6.58984,4.41602c-0.10951,0.16426 -0.16795,0.35727 -0.16797,0.55469v2c0.00006,0.55226 0.44774,0.99994 1,1h16c0.55226,-0.00006 0.99994,-0.44774 1,-1v-2c-0.00001,-0.19742 -0.05846,-0.39042 -0.16797,-0.55469c0,0 -2.2094,-3.3209 -6.58984,-4.41602c-0.07923,-0.01961 -0.16057,-0.02945 -0.24219,-0.0293zM10.16797,15h3.66406c3.33874,0.86688 4.95997,3.07817 5.16797,3.37305v0.62695h-14v-0.62695c0.208,-0.29488 1.82922,-2.50616 5.16797,-3.37305z"></path>
                                        </g>
                                    </g>
                                </svg>
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            {{--  @if (Session::has('success_messaage'))
            <!-- Check vendorRegister() method in Front/VendorController.php -->
            <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                role="alert">
                <div>
                    <strong>Success:</strong> {{ Session::get('success_messaage') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif --}}

            <div class="container">
                <div class="row">
                    <!-- admin details  -->
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex flex-column align-items-center gap-2">
                                    <!-- admin image  -->
                                    <div class="admin_profile">
                                        <img
                                            src="{{asset('public/assets/images/admin-img.png')}}"
                                            alt="user image" />
                                    </div>
                                    <h4 class="card-title">{{$admin->name}}</h4>
                                    <p class="card-text">{{$admin->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- forms  -->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <ul class="nav nav-pills" role="tablist">
                                    <!-- edit profile start here  -->
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            data-bs-toggle="pill"
                                            href="#edit_profile">Edit Profile</a>
                                    </li>
                                    <!-- edit profile end here  -->

                                    <!-- change password start here  -->
                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            data-bs-toggle="pill"
                                            href="#change_pass">Change Password</a>
                                    </li>
                                    <!-- change password end here  -->
                                </ul>
                            </div>

                            <div class="card-body">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- edit profile start here  -->
                                    <div
                                        id="edit_profile"
                                        class="container tab-pane active">
                                        <div class="form-div">
                                            <form action="{{url('admin/editProfile')}}" method="POST" data-parsley-validate>
                                                @csrf
                                                <div class="row">
                                                    <!-- first name start here  -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label
                                                                for="exampleInputEmail1"
                                                                class="form-label">Name</label>
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="name"
                                                                name="name"
                                                                placeholder="Enter New Name..."
                                                                data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <!-- first name end here  -->

                                                    <!-- last name start here  -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input
                                                                type="email"
                                                                class="form-control"
                                                                name="email"
                                                                id="email"
                                                                placeholder="Enter New Email..."
                                                                data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <!-- last name end here  -->
                                                </div>

                                                <!-- email start here  -->
                                                <!-- <div class="mb-3">
                                                    <label for="email" class="form-label">Email address</label>
                                                    <input
                                                        type="email"
                                                        class="form-control"
                                                        id="email"
                                                        placeholder="chitra@gmail.com" />
                                                </div> -->
                                                <!-- email end here  -->

                                                <!-- submit button start here  -->
                                                <div class="mb-3">
                                                    <button
                                                        type="submit"
                                                        class="btn btn-teal float-end">
                                                        Edit Profile
                                                    </button>
                                                </div>
                                                <!-- submit button end here  -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- edit profile end here  -->

                                    <!-- change password start here  -->
                                    <div
                                        id="change_pass"
                                        class="container tab-pane fade">
                                        <div class="form-div">
                                            <form action="{{url('admin/changePassword')}}" method="POST" data-parsley-validate>
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <!-- New password start here  -->
                                                        <div class="mb-3">
                                                            <label for="npass" class="form-label">New Password</label>
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                id="npass"
                                                                placeholder="Enter New Password..."
                                                                name="password"
                                                                data-parsley-required="true"
                                                                data-parsley-minlength="6"
                                                                data-parsley-minlength-message="Password must be at least 6 characters long."  />
                                                        </div>
                                                    </div>
                                                    <!-- New password end here  -->

                                                    <!-- Confirm password start here  -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="npass" class="form-label">Confirm Password</label>
                                                            <input
                                                                type="password"
                                                                class="form-control"
                                                                id="cpass"
                                                                placeholder="Confirm New Password..."
                                                                data-parsley-required="true"
                                                                data-parsley-minlength="6"
                                                                data-parsley-minlength-message="Confirm Password must be at least 6 characters long."
                                                                data-parsley-equalto="#npass"
                                                                data-parsley-equalto-message="Passwords do not match!" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Confirm password end here  -->

                                                <!--  button start here  -->
                                                <div class="mb-3">
                                                    <button
                                                        type="submit"
                                                        class="btn float-end btn-teal">
                                                        Change Password
                                                    </button>
                                                </div>
                                                <!--  button end here  -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- change password end here  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main data end here  -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
<script src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script>

@endsection