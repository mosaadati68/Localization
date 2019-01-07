<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="direction: rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

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
                    <a class="nav-link" href="{{ route('language',['locale'=>'en']) }}"><img
                                src="{{ asset('img/flags/United-Kingdom.png') }}" alt=""
                                width="45" height="30"> English</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('language',['locale'=>'fa']) }}"
                       style="font-family: IRANSansWeb"><img
                                src="{{ asset('img/flags/Iran.png') }}" alt="" width="45"
                                height="30"> فارسی </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('language',['locale'=>'ch']) }}"><img
                                src="{{ asset('img/flags/France.png') }}" alt="" width="45"
                                height="30"> Chienese</a>
                </li>
            </ul>
        </div>
    </nav>

</div>
<div class="row mt-5">
    <div class="col-md-12 col-lg-12 text-center">
        <h1>@lang('messages.message')</h1>
    </div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>
</html>