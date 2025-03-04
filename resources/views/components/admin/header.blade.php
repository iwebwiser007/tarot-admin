<?php
$admin = \App\Models\User::get()->first();
?>
<header class="header">
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <div class="d-flex align-items-center">
                    <a href="#" role="button" class="btn d-block d-md-none">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        x="0px"
                        y="0px"
                        width="20"
                        height="20"
                        viewBox="0,0,256,256">
                        <g
                          fill="#000000"
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
                          style="mix-blend-mode: normal"
                        >
                          <g transform="scale(8.53333,8.53333)">
                            <path
                              d="M3,7c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h24c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587zM3,14c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h24c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587zM3,21c-0.36064,-0.0051 -0.69608,0.18438 -0.87789,0.49587c-0.18181,0.3115 -0.18181,0.69676 0,1.00825c0.18181,0.3115 0.51725,0.50097 0.87789,0.49587h24c0.36064,0.0051 0.69608,-0.18438 0.87789,-0.49587c0.18181,-0.3115 0.18181,-0.69676 0,-1.00825c-0.18181,-0.3115 -0.51725,-0.50097 -0.87789,-0.49587z"
                            ></path>
                          </g>
                        </g>
                      </svg>
                    </a>
                    <!-- welcome message  -->
                    <!-- <div class="wlcm_msg d-none d-sm-block">
                      <span class="">Admin, add new roles.</span>
                      <img
                        src="{{asset('public/assets/images/role.png')}}"
                        alt="Add Role"
                        width="22"
                        height="22"
                        class="img-fluid mb-2 mx-1"
                      />
                    </div> -->
                  </div>
                  <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                  ></div>
                  <div class="nav-right">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown pe-3">
                        <a
                          class="nav-link dropdown-toggle"
                          href="#"
                          role="button"
                          data-bs-toggle="dropdown"
                          data-bs-auto-close="outside"
                          aria-expanded="false"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"
                            width="20"
                            height="20"
                            fill="#04aa9e">
                            <path
                              d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"
                            />
                          </svg>
                        </a>
                        <ul
                          class="dropdown-menu dropdown-menu-lg-end"
                          id="notification">
                          <div class="dropdown_head">
                            <div class="head_text mb-2">
                              <h3>Notification</h3>
                              <a href="#">Mark all as read</a>
                            </div>
                          </div>

                          <div class="dropdown_content">
                            <div class="dropdown_scroll">
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-danger rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        x="0px"
                                        y="0px"
                                        width="20"
                                        height="20"
                                        viewBox="0,0,256,256"
                                      >
                                        <g
                                          fill="#ffffff"
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
                                          style="mix-blend-mode: normal"
                                        >
                                          <g transform="scale(5.33333,5.33333)">
                                            <path
                                              d="M16,5c-4.39467,0 -8,3.60533 -8,8v11.71875c-1.7751,1.95128 -3,4.44005 -3,7.28125c0,6.05167 4.94833,11 11,11c6.05167,0 11,-4.94833 11,-11c0,-2.8412 -1.2249,-5.32997 -3,-7.28125v-11.71875c0,-4.39467 -3.60533,-8 -8,-8zM16,9c2.23333,0 4,1.76667 4,4v12.30469c0.00005,0.56787 0.24148,1.10894 0.66406,1.48828c1.43538,1.28769 2.33594,3.12755 2.33594,5.20703c0,3.89033 -3.10967,7 -7,7c-3.89033,0 -7,-3.10967 -7,-7c0,-2.07948 0.90056,-3.91934 2.33594,-5.20703c0.42258,-0.37934 0.66401,-0.92041 0.66406,-1.48828v-12.30469c0,-2.23333 1.76667,-4 4,-4zM35.9707,11c-0.52023,0.00778 -1.01695,0.21796 -1.38477,0.58594l-4,4c-0.52248,0.50163 -0.73295,1.24653 -0.55024,1.94742c0.18271,0.70088 0.73006,1.24823 1.43094,1.43094c0.70088,0.18271 1.44578,-0.02776 1.94742,-0.55024l0.58594,-0.58594v17.17188c-0.0102,0.72127 0.36875,1.39216 0.99175,1.75578c0.623,0.36361 1.39351,0.36361 2.01651,0c0.623,-0.36361 1.00195,-1.0345 0.99175,-1.75578v-17.17187l0.58594,0.58594c0.50163,0.52248 1.24653,0.73295 1.94742,0.55024c0.70088,-0.18271 1.24823,-0.73006 1.43094,-1.43094c0.18271,-0.70088 -0.02776,-1.44578 -0.55024,-1.94742l-4,-4c-0.38217,-0.38233 -0.90283,-0.5937 -1.44336,-0.58594zM15.9707,15.97266c-1.1038,0.01618 -1.9858,0.92353 -1.9707,2.02734v9.41992c-2.1668,0.94888 -3.37218,3.28635 -2.88877,5.60188c0.48341,2.31554 2.52332,3.97549 4.88877,3.97819c2.36197,-0.00688 4.39695,-1.66568 4.87983,-3.97778c0.48288,-2.31209 -0.71806,-4.64672 -2.87983,-5.5984v-9.42383c0.00739,-0.54026 -0.2041,-1.06052 -0.58634,-1.44239c-0.38224,-0.38187 -0.90271,-0.59286 -1.44296,-0.58495z"
                                            ></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">
                                        Temperature Out of Range
                                      </p>
                                      <span class="text-muted">7 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-primary rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        x="0px"
                                        y="0px"
                                        width="20"
                                        height="20"
                                        viewBox="0,0,256,256"
                                      >
                                        <g
                                          fill="#ffffff"
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
                                          style="mix-blend-mode: normal"
                                        >
                                          <g transform="scale(5.33333,5.33333)">
                                            <path
                                              d="M23.97656,2.97852c-0.82766,0.01293 -1.48844,0.69381 -1.47656,1.52148v8.80664c-1.45695,0.60044 -2.5,2.03264 -2.5,3.69336v1h-3.5c-3.57194,0 -6.5,2.92806 -6.5,6.5v1c0,7.75 -1.92383,13.52539 -1.92383,13.52539c-0.22268,0.66756 0.0486,1.40017 0.65234,1.76172c0,0 5.41854,3.21289 14.27148,3.21289c3.39204,0 6.37305,-0.49329 8.97461,-1.05859c0.33874,0.04462 0.68257,-0.02773 0.97461,-0.20508c3.65314,-0.87131 6.14258,-1.85742 6.14258,-1.85742c0.74774,-0.32118 1.10304,-1.17996 0.80078,-1.93555c0,0 -1.89258,-4.66558 -1.89258,-13.44336v-1c0,-3.57194 -2.92806,-6.5 -6.5,-6.5h-3.5v-1c0,-1.66072 -1.04305,-3.09292 -2.5,-3.69336v-8.80664c0.00582,-0.40562 -0.15288,-0.7963 -0.43991,-1.08296c-0.28703,-0.28666 -0.67792,-0.44486 -1.08353,-0.43852zM23.95313,16.01953c0.03189,0.00102 0.06381,0.00102 0.0957,0c0.54157,0.02801 0.95117,0.42925 0.95117,0.98047v2.5c0.00008,0.82839 0.67161,1.49992 1.5,1.5h5c1.95006,0 3.5,1.54994 3.5,3.5v0.5h-22v-0.5c0,-1.95006 1.54994,-3.5 3.5,-3.5h5c0.82839,-0.00008 1.49992,-0.67161 1.5,-1.5v-2.5c0,-0.55189 0.41056,-0.95338 0.95313,-0.98047zM12.85938,28h22.27539c0.26785,5.87425 1.07672,9.06652 1.54883,10.52148c-0.67403,0.26147 -1.41049,0.5665 -3.51953,1.11133c-0.39308,-1.18183 -0.99814,-3.32167 -1.16602,-7.19727c-0.00661,-0.54698 -0.31041,-1.047 -0.79283,-1.30487c-0.48242,-0.25788 -1.06696,-0.23273 -1.52544,0.06563c-0.45848,0.29836 -0.71822,0.82263 -0.67782,1.36815c0.16407,3.78787 0.75237,6.14388 1.22461,7.68164c-2.17981,0.41429 -4.56261,0.75391 -7.22656,0.75391c-1.50668,0 -2.75733,-0.16693 -4.01367,-0.32227c0.36106,-0.94885 0.74361,-2.09698 1,-3.97461c0.07427,-0.53184 -0.1414,-1.06281 -0.5655,-1.39222c-0.42409,-0.32941 -0.99192,-0.40701 -1.48885,-0.20347c-0.49693,0.20354 -0.84716,0.65718 -0.91831,1.18944c-0.26467,1.93821 -0.65216,3.13391 -0.93945,3.80664c-0.03725,0.08722 -0.01486,0.02325 -0.04492,0.08984c-2.7982,-0.63609 -4.09144,-1.20772 -4.76953,-1.56445c0.41167,-1.39214 1.30595,-4.97366 1.59961,-10.62891z"
                                            ></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">Cleaning Due</p>
                                      <span class="text-muted">9 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-warning rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        x="0px"
                                        y="0px"
                                        width="20"
                                        height="20"
                                        viewBox="0,0,256,256"
                                      >
                                        <g
                                          fill="#ffffff"
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
                                          style="mix-blend-mode: normal"
                                        >
                                          <g transform="scale(5.12,5.12)">
                                            <path
                                              d="M43.171,10.925l-19.086,22.521l-9.667,-9.015l1.363,-1.463l8.134,7.585l17.946,-21.175c-4.204,-4.534 -10.205,-7.378 -16.861,-7.378c-12.683,0 -23,10.317 -23,23c0,12.683 10.317,23 23,23c12.683,0 23,-10.317 23,-23c0,-5.299 -1.806,-10.182 -4.829,-14.075z"
                                            ></path>
                                          </g>
                                        </g>
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">
                                        checks still pending
                                      </p>
                                      <span class="text-muted">12 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </div>
                          </div>

                          <div class="dropdown_footer">
                            <div class="d-grid">
                              <button
                                class="btn"
                                type="button"
                                onclick="location.href='notifications.html';">
                                View All
                              </button>
                            </div>
                          </div>
                        </ul>
                      </li>

                      <li class="nav-item dropdown pe-1">
                        <a
                          class="nav-link dropdown-toggle admin_dropdown"
                          href="#"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <div class="admin_image">
                            <img
                              src="{{asset('public/assets/images/admin-img.png')}}"
                              alt="admin image"
                            />
                          </div>
                          <span class="d-none d-sm-block">{{$admin->email}}</span>
                          
                        </a>
                        <ul
                          class="dropdown-menu dropdown-menu-lg-end py-0"
                          id="admin_profile"
                        >
                          <li>
                            <a class="dropdown-item" href="{{url('admin/profile')}}">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256"
                                width="18"
                                height="18"
                                fill-rule="nonzero"
                              >
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
                                  style="mix-blend-mode: normal"
                                >
                                  <g transform="scale(10.66667,10.66667)">
                                    <path
                                      d="M12,2c-2.19733,0 -4,1.80267 -4,4v1c0,2.19733 1.80267,4 4,4c2.19733,0 4,-1.80267 4,-4v-1c0,-2.19733 -1.80267,-4 -4,-4zM12,4c1.11667,0 2,0.88333 2,2v1c0,1.11667 -0.88333,2 -2,2c-1.11667,0 -2,-0.88333 -2,-2v-1c0,-1.11667 0.88333,-2 2,-2zM10,13c-0.08162,-0.00015 -0.16296,0.00968 -0.24219,0.0293c-4.38045,1.09511 -6.58984,4.41602 -6.58984,4.41602c-0.10951,0.16426 -0.16795,0.35727 -0.16797,0.55469v2c0.00006,0.55226 0.44774,0.99994 1,1h16c0.55226,-0.00006 0.99994,-0.44774 1,-1v-2c-0.00001,-0.19742 -0.05846,-0.39042 -0.16797,-0.55469c0,0 -2.2094,-3.3209 -6.58984,-4.41602c-0.07923,-0.01961 -0.16057,-0.02945 -0.24219,-0.0293zM10.16797,15h3.66406c3.33874,0.86688 4.95997,3.07817 5.16797,3.37305v0.62695h-14v-0.62695c0.208,-0.29488 1.82922,-2.50616 5.16797,-3.37305z"
                                    ></path>
                                  </g>
                                </g>
                              </svg>
                              <span class="ms-2">Profile</span>
                            </a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="{{url('admin/logout')}}">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                                width="20"
                                height="20"
                                viewBox="0,0,256,256"
                              >
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
                                  style="mix-blend-mode: normal"
                                >
                                  <g transform="scale(5.33333,5.33333)">
                                    <path
                                      d="M24,4c-11.02793,0 -20,8.97207 -20,20c0,11.02793 8.97207,20 20,20c11.02793,0 20,-8.97207 20,-20c0,-11.02793 -8.97207,-20 -20,-20zM24,7c9.40662,0 17,7.59339 17,17c0,9.40661 -7.59338,17 -17,17c-9.40661,0 -17,-7.59339 -17,-17c0,-9.40661 7.59339,-17 17,-17zM22.4707,16.48633c-0.38956,0.01135 -0.75941,0.17386 -1.03125,0.45313l-6,6c-0.58555,0.58579 -0.58555,1.5353 0,2.12109l6,6c0.37623,0.39185 0.9349,0.54969 1.46055,0.41265c0.52565,-0.13704 0.93616,-0.54754 1.07319,-1.07319c0.13704,-0.52565 -0.0208,-1.08432 -0.41265,-1.46055l-3.43945,-3.43945h11.37891c0.54095,0.00765 1.04412,-0.27656 1.31683,-0.74381c0.27271,-0.46725 0.27271,-1.04514 0,-1.51238c-0.27271,-0.46725 -0.77588,-0.75146 -1.31683,-0.74381h-11.37891l3.43945,-3.43945c0.4429,-0.43135 0.57582,-1.09023 0.33479,-1.65955c-0.24103,-0.56932 -0.80665,-0.93247 -1.42463,-0.91467z"
                                    ></path>
                                  </g>
                                </g>
                              </svg>
                              <span class="ms-2">Logout</span>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>