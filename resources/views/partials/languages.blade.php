<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
{{ \app()->setlocale($locale)}}
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active" style="float: right">
                <a class="nav-link" href="#">@lang('messages.home_menu')<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@lang('messages.about_menu')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@lang('messages.contact_menu')</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link language" data-locale="en">
                    <img src="{{ asset('img/flags/United-Kingdom.png') }}" alt=""
                         width="45" height="30"> English</a>
            </li>
            <li class="nav-item">
                <a class="nav-link language" style="font-family: IRANSansWeb" data-locale="fa">
                    <img src="{{ asset('img/flags/Iran.png') }}" alt="" width="45"
                         height="30"> فارسی </a>
            </li>
            <li class="nav-item">
                <a class="nav-link language" data-locale="ch">
                    <img src="{{ asset('img/flags/France.png') }}" alt="" width="45"
                         height="30"> Chienese</a>
            </li>
        </ul>
    </div>
</nav>

<div class="row mt-5">
    <div class="col-md-12 col-lg-12 text-center">
        <h1>@lang('messages.message')</h1>
    </div>
</div>