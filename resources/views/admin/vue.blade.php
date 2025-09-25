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
        @if($component == 'admin-settings-list')
            <admin-settings-list></admin-settings-list>
        @elseif($component == 'admin-settings-edit')
            <admin-settings-edit></admin-settings-edit>
        @elseif($component == 'admin-settings-create')
            <admin-settings-create></admin-settings-create>
        @else
            <admin-settings-list></admin-settings-list>
        @endif
    </div>

    @vite(['resources/js/app.js'])
</body>
</html>