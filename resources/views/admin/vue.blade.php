<!DOCTYPE html>
<html>
<head>
    <title>Админ панель</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="vue-admin">
        <admin-wrapper></admin-wrapper>
    </div>

    @vite(['resources/js/app.js'])
    
    <script>
        window.Laravel = {
            component: '{{ $component }}',
            settingId: '{{ $id ?? null }}'
        };
    </script>
</body>
</html>