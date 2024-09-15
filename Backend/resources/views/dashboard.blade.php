<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icon-font.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .header-right .dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    margin-top: 10px;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.header-right .dropdown:hover .dropdown-menu {
    display: block;
}

.header-right img {
    border-radius: 50%;
    cursor: pointer;
}

    </style>

</head>

<body>

    <div class="header">
        
        <div class="header-left">
            <div class="header-search">
                <form method="GET">
                    <div class="form-group mb-0">
                        <i style="    position: absolute;
    top: 11px;
    left: 18px;
    font-size: 17px;"
                            class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" value="{{ isset($search) ? $search : '' }}" name="search"
                            class="form-control search-input" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <li>
                <a class="dropdown-item" href="#" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </li>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            
        </div>
    </div>
    <div class="left-side-bar">
        <div class="brand-logo">
            <a class="d-flex justify-content-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="156.633" height="55" viewBox="0 0 256.633 55">
                    <g id="deskapp-logo" transform="translate(-329.089 -601.197)">
                        <g id="_029-blend" data-name="029-blend" transform="translate(329.089 601.197)">
                            <path id="Path_78" data-name="Path 78"
                                d="M25.58,27.609H1.705A1.716,1.716,0,0,1,0,25.883V1.725A1.716,1.716,0,0,1,1.705,0H25.58a1.716,1.716,0,0,1,1.705,1.725V25.883A1.716,1.716,0,0,1,25.58,27.609Zm0,0"
                                transform="translate(0)" fill="#0051bd" />
                            <path id="Path_79" data-name="Path 79"
                                d="M153.947,155.781H137.834A4.84,4.84,0,0,1,133,150.947V134.834A4.84,4.84,0,0,1,137.834,130h16.113a4.84,4.84,0,0,1,4.834,4.834v16.113A4.84,4.84,0,0,1,153.947,155.781Zm0,0"
                                transform="translate(-118.713 -116.035)" fill="#00eccf" />
                            <path id="Path_80" data-name="Path 80"
                                d="M261.949,130H254v25.781h7.949a4.84,4.84,0,0,0,4.834-4.834V134.834A4.84,4.84,0,0,0,261.949,130Zm0,0"
                                transform="translate(-226.715 -116.035)" fill="#00cab1" />
                            <path id="Path_81" data-name="Path 81"
                                d="M284.891,297.781a12.891,12.891,0,1,1,12.891-12.891A12.905,12.905,0,0,1,284.891,297.781Zm0,0"
                                transform="translate(-242.781 -242.781)" fill="#d11372" />
                        </g>
                        <text id="NVK" transform="translate(400 640)" fill="#FFFFFF" font-size="40"
                            font-family="Arial" font-weight="bold">
                            NVK
                        </text>
                    </g>
                </svg>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="{{ route('home.index') }}" class="dropdown-toggle no-arrow">
                            <span style="padding-right: 10px"><i class="fa-solid fa-house"></i></span>
                            <span class="mtext">Home</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle arrow">
                            <span style="padding-right: 10px"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span class="mtext" style="padding-right: 40px">Product</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </a>
                        <ul class="submenu">
                            <li><a>Product List</a></li>
                            <li><a>Create Product</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span><i class="fa-solid fa-list"></i></span>
                            <span class="mtext" style="padding-right: 40px">Category</span>
                            <i class="fa-solid fa-chevron-down"></i>

                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('category.index') }}">Category List</a></li>
                            <li><a href="{{ route('category.create') }}">Create Category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="dropdown-toggle no-arrow">
                            <span><i class="fa-regular fa-user"></i></span>
                            <span class="mtext">User</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact.index') }}" class="dropdown-toggle no-arrow">
                            <span><i class="fa-regular fa-message"></i></span>
                            <span class="mtext">Contact</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html" class="dropdown-toggle no-arrow">
                            <span><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="mtext">Statistics</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tags.index') }}" class="dropdown-toggle no-arrow">
                            <span><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="mtext">Tag</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faqs.index') }}" class="dropdown-toggle no-arrow">
                            <span><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="mtext">FAQs</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-toggle no-arrow">
                            <span><i class="fa-solid fa-chart-simple"></i></span>
                            <span class="mtext">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-container">
        @yield('content_admin')
    </div>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/script.min.js') }}"></script>
</body>

</html>
