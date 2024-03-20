<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar" style=" background-color:#6B021C">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i
            class="ion ion-ios-menu"></i></a>
    <a class="navbar-brand" href="{{ route('home') }}">
        {{-- <img class="brand-img d-inline-block align-top " src="{{ asset('assets/dist/img/aastuimage.jpg') }}"
            style="width:80px; height:80px" alt="brand" /> --}}
        <img class="brand-img d-inline-block " src="{{ asset('assets/dist/img/wcu.png') }}"
            style="width:auto; height:100px" alt="brand" />
        {{-- <nav class="navbar navbar-expand-xl navbar-light  hk-navbar hk-navbar-alt shadow-none"
                    style=" background-color:#6B021C"> --}}

        {{-- <h5 class="text-white font-24 font-weight-600 ml-50 "> ዋቸሞ ዩኒቨርሲቲ</h5> --}}
        {{--  ለአመልካቾች ግምገማ --}}
    </a>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item">
            {{-- <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><i
                    class="ion ion-ios-search"></i></a> --}}
        </li>

        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{ asset('assets/dist/img/avatar12.jpg') }}" alt="user"
                                class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span> {{ Auth::user()->name }}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                        class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>


            </div>
        </li>
    </ul>
</nav>
{{-- <form role="search" class="navbar-search" id="search" type="get" action="{{ url('search') }}">
    <div class="position-relative">
        <a href="javascript:void(0);" class="navbar-search-icon"><i class="ion ion-ios-search"></i></a>
        <input type="text" name="query" class="form-control" placeholder="Type here to Search">
        <a id="navbar_search_close" class="navbar-search-close" href="#"><i class="ion ion-ios-close"></i></a>
    </div>
</form> --}}
