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
        <div class="ui main text container" style="min-height: 80%; padding-top: 5em;">
            <h1 class="ui dividing header"><i class="icon edit"></i> Podcasters Blog</h1>
            @yield('content')
        </div>

        <div class="ui inverted vertical footer segment">
            <br>

            <div class="ui center aligned container">
                <div class="ui stackable inverted divided grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">Group 1</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Link One</a>
                            <a href="#" class="item">Link Two</a>
                            <a href="#" class="item">Link Three</a>
                            <a href="#" class="item">Link Four</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Group 2</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Link One</a>
                            <a href="#" class="item">Link Two</a>
                            <a href="#" class="item">Link Three</a>
                            <a href="#" class="item">Link Four</a>
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Group 3</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Link One</a>
                            <a href="#" class="item">Link Two</a>
                            <a href="#" class="item">Link Three</a>
                            <a href="#" class="item">Link Four</a>
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Footer Header</h4>
                        <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                    </div>
                </div>

                <br>

                <div class="ui horizontal inverted small divided link list">
                    <a class="item" href="#">Site Map</a>
                    <a class="item" href="#">Contact Us</a>
                    <a class="item" href="#">Terms and Conditions</a>
                    <a class="item" href="#">Privacy Policy</a>
                </div>

                <br>
            </div>
        </div>

        <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="//oss.maxcdn.com/semantic-ui/2.2.4/semantic.min.js"></script>
        <script src="//cdn.jsdelivr.net/medium-editor/latest/js/medium-editor.min.js"></script>
        @yield('scripts')
    </body>
</html>
