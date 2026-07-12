<header class="topbar">
    <div class="container-fluid">
        <div class="row py-1">
            <div class="col-6">
                <div class="social-info social-info-left d-flex">
                    <div class="icon-box me-3">
                        <a href="" class="d-flex align-items-center">
                        <i class="fa-solid fa-phone-volume me-1"></i>
                        <p class="">+91 90689 91180</p>
                        </a>
                    </div>
                    <div class="icon-box">
                        <a href="" class="d-flex align-items-center">
                        <i class="fa-regular fa-envelope me-1"></i>
                        <p>shubhanueyehospital@gmail.com</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="social-info social-info-right d-flex justify-content-end">
                    <div class="social-icons me-3"><a href=""><i class="fa-brands fa-facebook"></i></a></div>
                    <div class="social-icons me-3"><a href=""><i class="fa-brands fa-square-instagram"></i></a></div>
                    <div class="social-icons"><a href=""><i class="fa-brands fa-square-x-twitter"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="ds-header">
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-5 col-md-2">

                <div class="logo text-start">
                    <a href="/">
                        <img src="/assets/logo.webp" alt="Shubhanu eye Hospital logo" width="255px" class="text-center" fetchpriority="high" loading="eager" decoding="async">
                    </a>
                </div>
            </div>
            <div class="col-7 col-md-10">

                <nav class="navb" id="mbnav">
                    <ul class="d-flex justify-content-end align-items-center m-0 p-0" style="list-style:none">
                        <li><a href="{{route('home')}}"  class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{route('about')}}"  class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                        <li class="p-menu" id="pmenu"><a href="javascript:void(0)" class="menu-toggle">Ophthalmologist
                                <i id="uparrow" class="fa-solid fa-chevron-down darrow" style="font-size:12px"></i></a>
                            <div class="submenu sub-p-1" id="submenu">
                                <ul class="m-0 p-0" style="list-style:none">
                                    <li><a href="javascript:void(0)">Retinal Surgery & Injection</a></li>
                                    <li><a href="javascript:void(0)">Lid Surgery</a></li>
                                    <li><a href="javascript:void(0)">Orbital Surgery</a></li>
                                    <li><a href="javascript:void(0)">Eye Tumors</a></li>
                                    <li><a href="javascript:void(0)">Treatment Of Watering Eyes</a></li>
                                    <li><a href="javascript:void(0)">Ocular Emergencies</a></li>
                                    <li><a href="javascript:void(0)">Neuro-Ophthalmology</a></li>
                                    <li><a href="javascript:void(0)">Artificial / Prosthetic Eyes</a></li>
                                    <li><a href="javascript:void(0)">Thyroid Eye Disease</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)">Gallery</a></li>
                        <li><a href="javascript:void(0)">Case Studies</a></li>
                        <li><a href="javascript:void(0)">Testimonials</a></li>
                        <li><a href="javascript:void(0)">Contact Us</a></li>
                    </ul>

                </nav>
                <div class="text-end pe-2" id="menuburgar"><a href="javascript:void(0)"><i
                            class="fa-solid fa-bars"></i></a></div>
                <div id="closeiconmenu" class="text-end"><a href="javascript:void(0)"><i class="fa-solid fa-x"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
document.querySelector("#menuburgar").addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector("#mbnav").style.display = "block";
    document.querySelector("#closeiconmenu").style.display = "block";
    document.querySelector("#menuburgar").style.display = "none";
});

document.querySelector("#closeiconmenu").addEventListener('click', function(event) {
    event.preventDefault();
    document.querySelector("#mbnav").style.display = "none";
    document.querySelector("#closeiconmenu").style.display = "none";
    document.querySelector("#menuburgar").style.display = "block";
});


document.querySelectorAll(".menu-toggle").forEach(function(toggle) {

    toggle.addEventListener("click", function(e) {
        e.preventDefault();

        const parent = this.parentElement;
        const submenu = parent.querySelector(".submenu");
        const arrow = this.querySelector(".darrow");

        // Close other menus
        document.querySelectorAll(".p-menu").forEach(function(item) {
            if (item !== parent) {
                item.querySelector(".submenu").style.display = "none";

                const otherArrow = item.querySelector(".darrow");
                if (otherArrow) {
                    otherArrow.classList.remove("drotate");
                }
            }
        });

        // Toggle current menu
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
            arrow.classList.remove("drotate");
        } else {
            submenu.style.display = "block";
            arrow.classList.add("drotate");
        }

    });

});
</script>