<!-- HEADER
   ============================================= -->
   <header id="header" class="header tra-menu navbar-light">
    <div class="header-wrapper">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo"><img src="{{asset('/website/assets/assets/images/logo-01.png')}}" width="170" height="50"
                    alt="mobile-logo" /></span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <div class="desktoplogo"><a href="/" class="logo-black">
                    <img src="{{asset('/website/assets/assets/images/1.png')}}"
                            width="170" height="50" alt="header-logo"></a></div>
                <div class="desktoplogo">
                    <a href="/"   class="{{ request()->is('/') ? 'text-white' : 'text-dark' }} logo-white"  >
                        

                            <h4 class="{{ request()->is('/') ? 'text-white' : 'text-dark' }} white-color mb-0">Kajal Spa</h4>
                    </a>
                </div>
                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list">
                        <li class="  nl-simple" aria-haspopup="true"><a class="{{ request()->is('/') ? 'text-white' : 'text-dark' }}" href="/about">About Us</a>
                        </li>
                        <li class="nl-simple" aria-haspopup="true"><a class="{{ request()->is('/') ? 'text-white' : 'text-dark' }}" href="/service">Services</a>
                        </li>
                        <li class="nl-simple" aria-haspopup="true"><a class="{{ request()->is('/') ? 'text-white' : 'text-dark' }}" href="/blog">Blogs</a>
                        </li>
                        <li class="nl-simple" aria-haspopup="true"><a class="{{ request()->is('/') ? 'text-white' : 'text-dark' }}" href="/contact">Contact Us</a></li>
                        <li class="nl-simple header-phone" aria-haspopup="true">
                            <a class="{{ request()->is('/') ? 'text-white' : 'text-dark' }}" href="tel:123456789"><span class="bg-color-09 white-color"><i
                                        class="fas fa-phone"></i></span>+12 34567889</a>
                        </li>

                    </ul>
                </nav>

            </div>
        </div>
    </div>
</header>
