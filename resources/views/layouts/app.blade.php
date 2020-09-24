<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Comments</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/my.css">

</head>
<body>
    <div class="header">
        <div class="left_block">
            <div class="contact">
                <div>Телефон: (499) 340-94-71</div>
                <div class="email">Email:
                    <a href="mailto: info@future-group.ru">info@future-group.ru</a>
                    </div>
            </div>
            <div class="title">Комментарии</div>
        </div>

        <div class="right_block">
            <img src="storage/images/logo_1.png" alt="">
        </div>
    </div>

    <div class="my_hr"></div>
    <div class="content">
        @yield('content')
    </div>


    <div class="footer">
        <div class="img_footer">
            <img src="storage/images/logo.png">
        </div>
        <div class="contact_copyright_footer">
            <div class="contact_footer" style="">
                <div class="one_contact">
                    Телефон: (499) 340-94-71
                    {{--                Roboto Bold 12--}}
                </div>
                <div class="one_contact">
                    Email: info@future-group.ru
                    {{--                    Roboto Bold 12--}}
                </div>
                <div class="one_contact">
                    Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1
                    {{--                Roboto Bold 12--}}
                </div>
            </div>
            <div class="copyright">
                © 2010 - 2020 Future. Все права защищены
                {{--                Roboto Regula 12--}}
            </div>
        </div>
    </div>
</body>
</html>
