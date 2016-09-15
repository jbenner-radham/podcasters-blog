<!DOCTYPE html>
<html lang="en" prefix="dcterms: http://purl.org/dc/terms/ og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="@yield('author')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="dcterms:modified" content="@yield('timestamp')">
        <title>@yield('title', 'Podcasters Blog')</title>
        <link rel="canonical" href="@yield('canonical_url')">
        <link rel="stylesheet" href="//oss.maxcdn.com/semantic-ui/2.2.4/semantic.min.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/latest/css/medium-editor.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/medium-editor/5.22.0/css/themes/tim.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <h1>Podcasters Blog</h1>
        @yield('content')
        <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="//oss.maxcdn.com/semantic-ui/2.2.4/semantic.min.js"></script>
        <script src="//cdn.jsdelivr.net/medium-editor/latest/js/medium-editor.min.js"></script>
        @yield('scripts')
    </body>
</html>
