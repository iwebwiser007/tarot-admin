<aside class="sidebar-wrapper" id="sidebar">
    <div class="sidebar-content">
        <div class="sidebar-logo gap-4 p-2">
            <a href="{{url('admin/dashboard')}}" class="navbar-brand">
                <img src="{{asset('public/assets/images/card13.png')}}" alt="logo" />
            </a>
            <a href="#" role="button" class="btn d-block d-md-none">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512"
                    width="20"
                    height="20"
                    fill="#000000">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </a>
        </div>

        <div class="sidebar-scroll">
            <div class="side_head">
                <h2>Menu</h2>
            </div>
            <ul class="sidebar-list list-unstyled">
                <li class="sidebar-item">
                    <a href="{{url('admin/dashboard')}}" class="sidebar-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256"
                                width="18"
                                height="18"
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
                        </span>
                        Dashboard
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{url('admin/cards')}}" class="sidebar-link {{ request()->is('admin/cards') ? 'active' : '' }}">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                                width="18"
                                height="18"
                                viewBox="0,0,256,256">
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
                                    <g transform="scale(5.33333,5.33333)">
                                        <path
                                            d="M12.5,6c-3.584,0 -6.5,2.916 -6.5,6.5v23c0,3.584 2.916,6.5 6.5,6.5h11.55664c-0.594,-0.927 -1.07687,-1.932 -1.42187,-3h-10.13477c-1.93,0 -3.5,-1.57 -3.5,-3.5v-18.5h30v5.63477c1.068,0.345 2.073,0.82883 3,1.42383v-11.55859c0,-3.584 -2.916,-6.5 -6.5,-6.5zM12.5,9h23c1.93,0 3.5,1.57 3.5,3.5v1.5h-30v-1.5c0,-1.93 1.57,-3.5 3.5,-3.5zM15.5,21c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5zM24,21c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5zM35.09375,24.0293c-6.075,0 -11,4.925 -11,11c0,6.075 4.925,11 11,11c6.075,0 11,-4.925 11,-11c0,-6.075 -4.924,-11 -11,-11zM35.09375,27.0293c0.552,0 1,0.448 1,1v6h6c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1h-6v6c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1v-6h-6c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1h6v-6c0,-0.552 0.448,-1 1,-1zM15.5,30c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5z"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        Cards
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{url('admin/offers')}}" class="sidebar-link {{ request()->is('admin/offers') ? 'active' : '' }}">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                                width="18"
                                height="18"
                                viewBox="0,0,256,256">
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
                                    <g transform="scale(5.33333,5.33333)">
                                        <path
                                            d="M12.5,6c-3.584,0 -6.5,2.916 -6.5,6.5v23c0,3.584 2.916,6.5 6.5,6.5h11.55664c-0.594,-0.927 -1.07687,-1.932 -1.42187,-3h-10.13477c-1.93,0 -3.5,-1.57 -3.5,-3.5v-18.5h30v5.63477c1.068,0.345 2.073,0.82883 3,1.42383v-11.55859c0,-3.584 -2.916,-6.5 -6.5,-6.5zM12.5,9h23c1.93,0 3.5,1.57 3.5,3.5v1.5h-30v-1.5c0,-1.93 1.57,-3.5 3.5,-3.5zM15.5,21c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5zM24,21c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5zM35.09375,24.0293c-6.075,0 -11,4.925 -11,11c0,6.075 4.925,11 11,11c6.075,0 11,-4.925 11,-11c0,-6.075 -4.924,-11 -11,-11zM35.09375,27.0293c0.552,0 1,0.448 1,1v6h6c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1h-6v6c0,0.552 -0.448,1 -1,1c-0.552,0 -1,-0.448 -1,-1v-6h-6c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1h6v-6c0,-0.552 0.448,-1 1,-1zM15.5,30c-1.38071,0 -2.5,1.11929 -2.5,2.5c0,1.38071 1.11929,2.5 2.5,2.5c1.38071,0 2.5,-1.11929 2.5,-2.5c0,-1.38071 -1.11929,-2.5 -2.5,-2.5z"></path>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        Offers
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>