<div class="topnav">
    <div class="d-flex justify-content-between align-items-center h-100">
        <div class="left">
            <div class="menu-icon">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </div>
        </div>
        <div class="right">
            <div class="userinfo">
                <div class="dropdown action">
                    <div class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-inline-flex align-items-center">
                            <img class="photo d-none" src="../img/biography/life.png" alt="">
                            @auth
                                <div class="avatar">{{ substr(auth()->user()->name, 0, 1) }}</div>
                                <div class="name">{{ auth()->user()->name }}</div>
                                <span class="material-symbols-outlined">
                                    expand_more
                                </span>
                            @endauth
                        </div>

                    </div>
                    <ul class="dropdown-menu dropdown-menu-end ">
                        <li><a class="dropdown-item " href="#">
                                <span class="material-symbols-outlined">
                                    vpn_key
                                </span>
                                Change Password
                            </a></li>
                        <li>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                                Logout
                                <form id="logout-form" action="#" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
