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
                                        class="dash_icon align-self-center bg-warning-subtle">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            x="0px"
                                            y="0px"
                                            width="24"
                                            height="24"
                                            viewBox="0,0,256,256">
                                            <g
                                                fill="#FFA87D"
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
                                                <g transform="scale(5.33333,5.33333)">
                                                    <path
                                                        d="M35.97656,5.97852c-0.82766,0.01293 -1.48844,0.69381 -1.47656,1.52148v0.76953c-1.98378,0.56183 -3.5,2.30132 -3.5,4.46289v0.00195c0,2.61382 2.15175,4.76563 4.76563,4.76563h1.46875c0.99213,0 1.76563,0.7735 1.76563,1.76563c0,0.98653 -0.76473,1.75541 -1.75195,1.76367l-1.83984,0.01563c-0.64532,0 -1.16571,-0.41857 -1.34375,-0.98437c-0.15229,-0.52162 -0.57475,-0.92011 -1.10436,-1.0417c-0.52962,-0.12159 -1.08358,0.05273 -1.44813,0.45569c-0.36455,0.40296 -0.48269,0.97156 -0.30883,1.48639c0.46639,1.48215 1.77675,2.43322 3.29688,2.7832v0.75586c-0.00765,0.54095 0.27656,1.04412 0.74381,1.31683c0.46725,0.27271 1.04514,0.27271 1.51238,0c0.46725,-0.27271 0.75146,-0.77588 0.74381,-1.31683v-0.51758c2.48898,-0.14634 4.5,-2.19746 4.5,-4.7168c0,-2.61387 -2.15175,-4.76562 -4.76562,-4.76562h-1.46875c-0.99213,0 -1.76562,-0.7735 -1.76562,-1.76562v-0.00195c0,-0.9822 0.73265,-1.70603 1.74023,-1.7207l0.82422,-0.01172c0.68328,0 1.17626,0.38887 1.34766,0.94922c0.15282,0.51718 0.57147,0.91254 1.09655,1.03553c0.52508,0.12299 1.07576,-0.04533 1.44235,-0.44086c0.36659,-0.39552 0.49268,-0.95738 0.33024,-1.47162c-0.4574,-1.49534 -1.77716,-2.41856 -3.28125,-2.76758v-0.80469c0.00582,-0.40562 -0.15288,-0.7963 -0.43991,-1.08296c-0.28703,-0.28666 -0.67792,-0.44486 -1.08353,-0.43852zM23.96094,11.98047c-0.07387,0.00243 -0.14755,0.00895 -0.2207,0.01953h-7.74023c-0.72127,-0.0102 -1.39216,0.36875 -1.75578,0.99175c-0.36361,0.623 -0.36361,1.39351 0,2.01651c0.36361,0.623 1.0345,1.00195 1.75578,0.99175h3.17188l-12.58594,12.58594c-0.52247,0.50163 -0.73294,1.24653 -0.55022,1.94741c0.18271,0.70088 0.73006,1.24822 1.43094,1.43094c0.70088,0.18271 1.44578,-0.02775 1.94741,-0.55022l12.58594,-12.58594v3.17188c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-7.75391c0.0781,-0.58158 -0.10312,-1.16812 -0.49567,-1.60429c-0.39255,-0.43617 -0.95683,-0.67796 -1.5434,-0.66133zM23.9707,27.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v10c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-10c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495zM31.9707,27.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v10c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-10c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495zM39.9707,27.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v10c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-10c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495zM15.9707,31.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v6c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-6c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495zM7.9707,36.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v1c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-1c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <span class="text-muted">Total Revenue</span>
                                        <h3>&euro;278k</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-2  -->
                    <div class="col-md-4">
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
                                        class="dash_icon align-self-center bg-info-subtle">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            x="0px"
                                            y="0px"
                                            width="24"
                                            height="24"
                                            viewBox="0,0,256,256">
                                            <g
                                                fill="#00B5B8"
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
                                                <g transform="scale(5.33333,5.33333)">
                                                    <path
                                                        d="M14.5,4c-3.01977,0 -5.5,2.48023 -5.5,5.5v32c0,1.36359 1.13641,2.5 2.5,2.5h8c1.36359,0 2.5,-1.13641 2.5,-2.5v-4c0,-0.29505 0.20496,-0.5 0.5,-0.5h3c0.29504,0 0.5,0.20495 0.5,0.5v4c0,1.36359 1.13641,2.5 2.5,2.5h8c1.36359,0 2.5,-1.13641 2.5,-2.5v-32c0,-3.01977 -2.48023,-5.5 -5.5,-5.5zM14.5,7h19c1.39823,0 2.5,1.10177 2.5,2.5v31.5h-7v-3.5c0,-1.91495 -1.58505,-3.5 -3.5,-3.5h-3c-1.91495,0 -3.5,1.58505 -3.5,3.5v3.5h-7v-31.5c0,-1.39823 1.10177,-2.5 2.5,-2.5zM16.5,10c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM23.5,10c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM30.5,10c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM16.5,16c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM23.5,16c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM30.5,16c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM16.5,22c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM23.5,22c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM30.5,22c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM16.5,28c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM23.5,28c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381zM30.5,28c-0.54095,-0.00765 -1.04412,0.27656 -1.31683,0.74381c-0.27271,0.46725 -0.27271,1.04514 0,1.51238c0.27271,0.46725 0.77588,0.75146 1.31683,0.74381h1c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <span class="text-muted">Total Bussinesses</span>
                                        <h3>40</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-3  -->
                    <div class="col-md-4">
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
                                            viewBox="0 0 384 512"
                                            width="24"
                                            height="24"
                                            fill="#FF7588">
                                            <path
                                                d="M280 64l40 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 128C0 92.7 28.7 64 64 64l40 0 9.6 0C121 27.5 153.3 0 192 0s71 27.5 78.4 64l9.6 0zM64 112c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l256 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16l-16 0 0 24c0 13.3-10.7 24-24 24l-88 0-88 0c-13.3 0-24-10.7-24-24l0-24-16 0zm128-8a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <span class="text-muted">Total Plans</span>
                                        <h3>2</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-4  -->
                    <div class="col-md-4">
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
                                        </svg>
                                    </div>
                                    <div
                                        class="dash-body text-right d-flex align-items-center justify-content-between w-100">
                                        <span class="text-muted">Total Allergens</span>
                                        <h3>3</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card-5  -->
                    <div class="col-md-4">
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
                    </div>

                    <!-- card-6  -->
                    <div class="col-md-4">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection