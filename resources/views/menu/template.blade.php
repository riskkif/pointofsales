<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point Of Sales</title>
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <script src="{{ url('/webfont') }}/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Raleway:300,400,700,900"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <style>
        body {
            font-family: 'Raleway';
            background-color: #e9ebec;
        }

        @media print {
            body {
                visibility: hidden;
            }

            #section-to-print {
                display: block !important;
                visibility: visible;
                position: absolute;
                z-index: 2;
                width: 100%;
                left: 0;
                top: 0;
                bottom: 0;
                right: 0;
            }
        }
    </style>
</head>

<body>


    @if (session()->has('msg_status'))
        <div class="alert alert-{{ session('msg_status') }}" role="alert">
            {!! session('msg') !!}
        </div>
    @endif
    @yield('content')

    @yield('script')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>