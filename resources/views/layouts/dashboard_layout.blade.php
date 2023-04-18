
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GesProduits - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/img/logo.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/dashboard/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/dashboard/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/dashboard/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Template Main CSS File -->
    <link href="/dashboard/assets/css/style.css" rel="stylesheet">

</head>
<body>
@yield('content')
<!-- Vendor JS Files -->
<script src="/dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="/dashboard/assets/vendor/php-email-form/validate.js"></script>
<script src="/dashboard/assets/vendor/quill/quill.min.js"></script>
<script src="/dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="/dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="/dashboard/assets/vendor/chart.js/chart.min.js"></script>
<script src="/dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="/dashboard/assets/vendor/echarts/echarts.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<!-- Template Main JS File -->
<script src="/dashboard/assets/js/main.js"></script>
<x-notify::notify />
@notifyJs
</body>

</html>
