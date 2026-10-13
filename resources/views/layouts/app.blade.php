<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #fcfdfd;
            color: #212529;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .style-nav {
            background-color: #ffda6a;
            border-bottom: 3px solid #198754;
        }
        .style-footer {
            background-color: #ffda6a;
            border-top: 3px solid #198754 !important;
        }
        .btn-custom {
            background-color: #198754;
            color: #ffffff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #146c43;
            color: #ffffff;
        }
        .card-custom {
            border: 1px solid #198754;
        }
    </style>
</head>
<body>
    <x-navbar />
    <main class="mb-5">
        @yield('content')
    </main>
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>