@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
    <div class="main-data">
        <div class="container-fluid">
            <div class="dash_header mb-3">
                <div class="dash_title">
                    <h2>Dashboard</h2>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
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
                                                d="M2,2v1v10h9v-11zM13,2v1v6h9v-7zM4,4h5v7h-5zM15,4h5v3h-5zM13,11v1v10h9v-11zM15,13h5v7h-5zM2,15v1v6h9v-7zM4,17h5v3h-5z"></path>
                                        </g>
                                    </g>
                                </svg>
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-4">
    <div class="card dash_card h-100">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-1 text-secondary">New Text Here</h5>
                <h3 class="fw-bold mb-0">123</h3>
            </div>
            <div class="dash_icon">
                <i class="bi bi-bar-chart-fill text-primary fs-2"></i>
            </div>
        </div>
    </div>
</div>


                    <!-- card-2  -->
                    <div class="col-md-4">
    <div class="card dash_card h-100">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-1 text-secondary">New Text Here</h5>
                <h3 class="fw-bold mb-0">123</h3>
            </div>
            <div class="dash_icon">
                <i class="bi bi-bar-chart-fill text-primary fs-2"></i>
            </div>
        </div>
    </div>
</div>


                    <!-- card-3  -->
                    <div class="col-md-4">
    <div class="card dash_card h-100">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h5 class="mb-1 text-secondary">New Text Here</h5>
                <h3 class="fw-bold mb-0">123</h3>
            </div>
            <div class="dash_icon">
                <i class="bi bi-bar-chart-fill text-primary fs-2"></i>
            </div>
        </div>
    </div>
</div>


                    <!-- card-4  -->
                    <div class="col-md-12 mt-3">
                        <div class="card dash_card">
                            <div class="card-body">
                                <div
                                    class="mb-3 graph-card d-flex justify-content-end w-100">
                                    <input
                                        type="date"
                                        class="form-control"
                                        placeholder="From - To"
                                        style="max-width: 150px" />
                                    <select
                                        class="form-select"
                                        style="max-width: 90px">
                                        <option>Week</option>
                                        <option>Month</option>
                                        <option>Year</option>
                                    </select>
                                    <button class="btn border">
                                        <img
                                            src="{{asset('public/assets/icons/export.svg')}}"
                                            alt="export button" />
                                    </button>
                                </div>

                                <div class="d-flex gap-3">
                                    <div
                                        class="dash_icon align-self-center bg-success-subtle">
                                        <!-- <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0,0,256,256"
                                            width="24"
                                            height="24"
                                            fill-rule="nonzero">
                                            <g
                                                fill="#16D39A"
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
                                                <g transform="scale(8,8)">
                                                    <path
                                                        d="M16,2c-1.383,0 -2.531,0.969 -2.875,2.25c-0.352,-0.145 -0.723,-0.25 -1.125,-0.25c-1.645,0 -3,1.355 -3,3v10.75l-0.875,-0.875c-1.164,-1.164 -3.086,-1.164 -4.25,0c-1.164,1.164 -1.164,3.086 0,4.25l6.78125,6.78125c1.176,1.172 2.80075,2.09375 4.71875,2.09375h4.625c3.855,0 7,-3.145 7,-7v-12c0,-1.645 -1.355,-3 -3,-3c-0.352,0 -0.684,0.0735 -1,0.1875v-1.1875c0,-1.645 -1.355,-3 -3,-3c-0.402,0 -0.773,0.105 -1.125,0.25c-0.344,-1.281 -1.492,-2.25 -2.875,-2.25zM16,4c0.566,0 1,0.434 1,1v10h2v-8c0,-0.566 0.434,-1 1,-1c0.566,0 1,0.434 1,1v8h2v-4c0,-0.566 0.434,-1 1,-1c0.566,0 1,0.434 1,1v12c0,2.773 -2.227,5 -5,5h-4.625c-1.273,0 -2.36725,-0.62125 -3.28125,-1.53125l-6.8125,-6.75c-0.398,-0.398 -0.398,-1.0385 0,-1.4375c0.398,-0.398 1.0385,-0.398 1.4375,0l2.5625,2.59375l1.71875,1.71875v-15.59375c0,-0.566 0.434,-1 1,-1c0.566,0 1,0.434 1,1v8h2v-10c0,-0.566 0.434,-1 1,-1zM16,17c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM22,17c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM18,20c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM14,21c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM22,21c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM18,24c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1z"></path>
                                                </g>
                                            </g>
                                        </svg> -->
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <!-- <span class="text-muted">Total Allergens</span>
                                        <h3>3</h3> -->
                                        <div class="graph-placeholder">
    <div class="bar" style="height: 60%;"></div>
    <div class="bar" style="height: 80%;"></div>
    <div class="bar" style="height: 40%;"></div>
    <div class="bar" style="height: 90%;"></div>
</div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    
                    <div class="col-md-12">
                        <div class="card dash_card">
                            <div class="card-body">
                                <h3 class="mb-3">Recent Offers</h3>
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Offer ID</th>
                                                <th>Title</th>
                                                <th>Discount</th>
                                                <th>Valid Till</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#101</td>
                                                <td>Summer Sale</td>
                                                <td>20%</td>
                                                <td>30th June 2025</td>
                                                <td>
                                                    <div class="d-flex align-items-start justify-content-center ">
                                                    <a
                              href=""
                              role="button"
                              class="btn float-end">
                              <img
                                src="{{asset('public/assets/icons/edit.svg')}}"
                                alt="edit button" />
                            </a>

                            <a
                              href="#"
                              role="button"
                              class="btn float-end"
                              >
                              <img
                                src="{{asset('public/assets/icons/delete.svg')}}"
                                alt="delete button" />
                            </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#102</td>
                                                <td>Winter Special</td>
                                                <td>15%</td>
                                                <td>15th December 2025</td>
                                                <td>
                                                    <div class="d-flex align-items-start justify-content-center ">
                                                    <a
                              href=""
                              role="button"
                              class="btn float-end">
                              <img
                                src="{{asset('public/assets/icons/edit.svg')}}"
                                alt="edit button" />
                            </a>

                            <a
                              href="#"
                              role="button"
                              class="btn float-end"
                              >
                              <img
                                src="{{asset('public/assets/icons/delete.svg')}}"
                                alt="delete button" />
                            </a>
                                                    </div>
                                                </td>
                       
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                





                    <!-- card-5  -->
                    <!-- <div class="col-md-4">
                        <div class="card dash_card">
                            <div class="card-body">
                                <div
                                    class="mb-3 d-flex justify-content-between w-100">
                                    <input
                                        type="date"
                                        class="form-control"
                                        placeholder="From - To"
                                        style="max-width: 150px" />
                                    <select
                                        class="form-select"
                                        style="max-width: 90px">
                                        <option>Week</option>
                                        <option>Month</option>
                                        <option>Year</option>
                                    </select>
                                    <button class="btn border">
                                        <img
                                            src="{{asset('public/assets/icons/export.svg')}}"
                                            alt="export button" />
                                    </button>
                                </div>
                                <div class="d-flex gap-3">
                                    <div
                                        class="dash_icon align-self-center bg-danger-subtle">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            viewBox="0,0,256,256"
                                            width="24"
                                            height="24"
                                            fill-rule="nonzero">
                                            <g
                                                fill="#FF7588"
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
                                                <g transform="scale(4,4)">
                                                    <path
                                                        d="M10.00195,8v28h4v-28zM42,8c-7.48,0 -14.42969,2.30047 -20.17969,6.23047l2.87891,2.87891c4.99,-3.23 10.93078,-5.10937 17.30078,-5.10937c6.11,0 11.81969,1.72047 16.67969,4.73047l2.91016,-2.91016c-5.64,-3.68 -12.36984,-5.82031 -19.58984,-5.82031zM42,17c-4.97,0 -9.61031,1.39984 -13.57031,3.83984l2.91992,2.91992c3.16,-1.76 6.79039,-2.75977 10.65039,-2.75977c3.6,0 7,0.87016 10,2.41016l2.93945,-2.93945c-3.81,-2.21 -8.22945,-3.4707 -12.93945,-3.4707zM17.99805,21v15h4v-15zM42,26c-2.47,0 -4.81969,0.53047 -6.92969,1.48047l6.42969,6.42969l6.7207,-6.7207c-1.92,-0.77 -4.0207,-1.18945 -6.2207,-1.18945zM2,36v20h60v-20h-4v16h-48v-16zM17.5,41c-1.933,0 -3.5,1.567 -3.5,3.5c0,1.933 1.567,3.5 3.5,3.5c1.933,0 3.5,-1.567 3.5,-3.5c0,-1.933 -1.567,-3.5 -3.5,-3.5zM28.5,41c-1.933,0 -3.5,1.567 -3.5,3.5c0,1.933 1.567,3.5 3.5,3.5c1.933,0 3.5,-1.567 3.5,-3.5c0,-1.933 -1.567,-3.5 -3.5,-3.5zM50.5,41c-1.933,0 -3.5,1.567 -3.5,3.5c0,1.933 1.567,3.5 3.5,3.5c1.933,0 3.5,-1.567 3.5,-3.5c0,-1.933 -1.567,-3.5 -3.5,-3.5z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <span class="text-muted">Total Devices</span>
                                        <h3>3</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- card-6  -->
                    <!-- <div class="col-md-4">
                        <div class="card dash_card">
                            <div class="card-body">
                                <div
                                    class="mb-3 d-flex justify-content-between w-100">
                                    <input
                                        type="date"
                                        class="form-control"
                                        placeholder="From - To"
                                        style="max-width: 150px" />
                                    <select
                                        class="form-select"
                                        style="max-width: 90px">
                                        <option>Week</option>
                                        <option>Month</option>
                                        <option>Year</option>
                                    </select>
                                    <button class="btn border">
                                        <img
                                            src="{{asset('public/assets/icons/export.svg')}}"
                                            alt="export button" />
                                    </button>
                                </div>

                                <div class="d-flex gap-3">
                                    <div
                                        class="dash_icon align-self-center bg-success-subtle">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"
                                            width="24"
                                            height="24"
                                            fill="#16D39A">
                                            <path
                                                d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <span class="text-muted">Checks Pending</span>
                                        <h3>6</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection