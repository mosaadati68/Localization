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

<div class="container" id="container">

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

</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>--}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function () {
        $('.language').on('click', function () {
            let local = $(this).attr('data-locale');
            axios.get('/language/' + local)
                .then(function (response) {
                    $('#container').html(response.data);
                });
        });
    });
</script>
</body>
</html>