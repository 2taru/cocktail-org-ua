<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ isset($description) ? $description : 'TODO' }}" />
    <meta name="author" content="SkyTek" />
    <title>
        @isset($doctitle)
            {{ $doctitle }} | Cocktail
        @else
            Cocktail
        @endisset
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg shadow bg-light" style="--bs-bg-opacity: .5;">
            <div class="container px-5">
                <a class="navbar-brand" href="/"><img src="/logo.svg" alt="label" title="label"
                        style="height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 18px !important;">
                        <li class="nav-item"><a class="nav-link" href="/">Головна</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Функціонал</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="/service/backend">Бек Офіс</a></li>
                                <li><a class="dropdown-item" href="/service/frontend">Фронт Офіс</a></li>
                                <li><a class="dropdown-item" href="#">Гість</a></li>
                                <li><a class="dropdown-item" href="#">ПРРО</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Контакти</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">Про нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="/instruction">Інструкція</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content -->
        {{ $slot }}

    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto" style="--bs-bg-opacity: .8;">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; SkyTek {{ date('Y') }}</div>
                </div>
                <div class="col-auto">
                    <a class="text-white text-decoration-none mx-1"
                        href="https://www.instagram.com/skytek.svl?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                        <i class="bi bi-instagram"></i></a>
                    <a class="text-white text-decoration-none mx-1" href="https://www.facebook.com/cboskytek">
                        <i class="bi bi-facebook"></i></a>
                    <a class="link-light small mx-1" href="/contact">Контакти</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <style>
        * {
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        body {
            background: linear-gradient(-45deg, #e6e0b9, #c3e8da, #bde4e0, #e0c8e0, #e4bfd4);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            height: 100vh;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</body>

</html>
