<section class="header-bg">
    <div class="container pt-2 pb-2">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg ">
                    <a href="/index">
                    <div title="Friendzone Caf&eacute; & Restaurant">
                        <h2 class="fz">Friend Zone</h2>
                        <small class="cf-rs">Caf&eacute; & Restaurant</small>
                    </div></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse menu-margin-top" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto text-in-btn">
                            <div class="border-bottom border-dark">
                                <li
                                    class="nav-item <?php if ($current_page == 'index') {echo "active"; } ?> li-margin-right mb-1 mt-1">
                                    <a class="nav-link pl-4 my-text" href="{{url('/index')}}">Home</a>
                                </li>
                            </div>
                            <div class="border-bottom border-dark">
                                <li
                                    class="nav-item <?php if ($current_page == 'menu') {echo "active"; } ?>  li-margin-right mb-1 mt-1">
                                    <a class="nav-link pl-4 my-text" href="{{url('/menus')}}">Menu</a>
                                </li>
                            </div>
                            <div class="border-bottom border-dark">
                                <li
                                    class="nav-item <?php if ($current_page == 'gallery') {echo "active"; } ?> li-margin-right mb-1 mt-1 ">
                                    <a class="nav-link pl-4 my-text" href="{{url('/gallery')}}">Gallery</a>
                                </li>
                            </div>
                            <div class="border-bottom border-dark">
                                <li
                                    class="nav-item <?php if ($current_page == 'contactus') {echo "active"; } ?> li-margin-right mb-1 mt-1">
                                    <a class="nav-link pl-4 my-text" href="{{url('/contact')}}">Contact</a>
                                </li>
                            </div>

                        </ul>
                        <div class="border-bottom border-dark facebook">
                            <a href="https://www.facebook.com/friendzonecafeandrestaurantpkk/" class="my-text"><img src="{{asset('user/images/facebook.png')}}" class="mt-1 mb-1"></a>
                        </div>
                    </div>
                </nav>
                <div>
                </div>
            </div>
</section>