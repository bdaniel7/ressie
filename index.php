<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ReSSie - The RSS Reader</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../bower_components/normalize-css/normalize.css">
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="css/default.css">

    </head>
    <body>
        <div id="app" class="container-fluid">
            <div id="status">
                <span class="message">
                    shu shu
                </span>
                <a href="#" class="close-container pull-right">X</a>
            </div>
            <div id="sidebar" class="navbar-left col-md-2">
                <h4 id="today">Today</h4>
                <h4>Menu</h4>
                <ul class="categories menu">
                    <li class="category draggable" position="0">
                        Geeky
                    </li>
                    <li class="category draggable" position="1">
                        Development
                    </li>
                    <li class="category draggable" position="2">
                        Science
                    </li>
                    <li class="category draggable" position="3">
                        Permaculture
                    </li>
                </ul>
                <h4>Settings</h4>
                <ul id="settings">
                    <li>Import/Export</li>
                    <li>Preferences</li>
                </ul>
            </div>

            <div id="content" class="right col-md-9">
                <div id="content-header">
                    Content header
                </div>
                <div class="article row" id="article-1">
                    <h5 class="article-title">Article title</h5>
                    <div class="article-header">
                        <a href="#" class="mark-unread">Mark as unread</a>
                        <a href="#" class="share">Share</a>
                    </div>
                    <div class="article-content">
                        Article 1
                        more content
                    </div>
                </div>
                <div class="article row" id="article-3">
                    <h5 class="article-title">Article title</h5>
                    <div class="article-header">
                        <a href="#" class="mark-unread">Mark as unread</a>
                        <a href="#" class="share">Share</a>
                    </div>
                    <div class="article-content">
                        Article 3
                        more content
                    </div>
                </div>
                <div class="article row" id="article-4">
                    <h5 class="article-title">Article title</h5>
                    <div class="article-header">
                        <a href="#" class="mark-unread">Mark as unread</a>
                        <a href="#" class="share">Share</a>
                    </div>
                    <div class="article-content">
                        Article 4
                        more content
                    </div>
                </div>
                <div class="article row" id="article-5">
                    <h5 class="article-title">Article title</h5>
                    <div class="article-header">
                        <a href="#" class="mark-unread">Mark as unread</a>
                        <a href="#" class="share">Share</a>
                    </div>
                    <div class="article-content">
                        Article 5
                        more content
                    </div>
                </div>
                <div class="article row" id="article-6">
                    <h5 class="article-title">Article title</h5>
                    <div class="article-header">
                        <a href="#" class="mark-unread">Mark as unread</a>
                        <a href="#" class="share">Share</a>
                    </div>
                    <div class="article-content">
                        Article 6
                        more content
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">ReSSie - The RSS Reader &copy 2015 Daniel Blendea, bdaniel7@gmail.com</footer>

        <script src="js/requirejs-config.js"></script>
        <script src="../bower_components/requirejs/require.js" data-main="js/main.js"></script>

    </body>
</html>
