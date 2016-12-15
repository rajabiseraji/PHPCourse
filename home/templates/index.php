<!doctype html>
<html lang="en">

<?php
session_start();
if(!isset($_SESSION['login'])	){

  header('Location: ../../views/layout.php');
}
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design Lite</title>

    <!-- Add to homescreen -->
    <link rel="manifest" href="manifest.json">

    <!-- Fallback to homescreen for Chrome <39 on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Material Design Lite">
    <link rel="icon" sizes="192x192" href="../assets/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon" href="../assets/ios-desktop.png">

    <!-- TODO: Tile icon for Win8 (144x144 + tile color) -->
    <!-- <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png"> -->
    <!-- <meta name="msapplication-TileColor" content="#3372DF"> -->

    <meta name="theme-color" content="#263238">

    <link rel="shortcut icon" href="../assets/favicon.png">
    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Page styles -->
    <link rel="stylesheet" href="../assets/prism-default.css">
    <link rel="stylesheet" href="../material.min.css">
    <link rel="stylesheet" href="../assets/main.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body class="templates">
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
  <script>
    // if (document.location.hostname !== 'localhost' &&
    //     document.location.hostname !== '127.0.0.1' &&
    //     document.location.hostname.search('.corp.') === -1) {
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-25993200-9', 'auto');
      // If a specific component page is loaded directly we'll attribute the
      // page view to the specific component's page
      if (window.location.pathname.indexOf('/components/') !== -1 &&
          window.location.hash.indexOf('-section') !== -1) {
        ga('send', 'pageview', '/components/' +
            window.location.hash.split('#')[1].split('/')[0]);
      } else {
        ga('send', 'pageview');
      }
    // }

    // Setup error tracking before anything else runs.
  window.onerror = function(message, file, lineNumber, columnNumber, error) {
    try {
      if (error !== undefined) {
        message = error.stack;
      }
       ga('send', 'event', 'error', file + ':' + lineNumber, String(message));
    } catch (e) {
      // no-op
    }
  };
  </script>
  <div class="image-preloader"></div>
  <div class="docs-layout mdl-layout mdl-js-layout">
    <header class="docs-layout-header mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="docs-layout-title mdl-layout-title"><a href="../">Material<br>Design<br>Lite</a></span>
      </div>
      <div class="docs-navigation__container">
        <nav class="docs-navigation mdl-navigation">
          <a href="../index.html" class="mdl-navigation__link about">About</a>
          <a href="../started/index.html" class="mdl-navigation__link started">Getting Started</a>
          <a href="../templates/index.html" class="mdl-navigation__link templates">Templates</a>
          <a href="../components/index.html" class="mdl-navigation__link components">Components</a>
          <a href="../styles/index.html" class="mdl-navigation__link styles">Styles</a>
          <a href="../customize/index.html" class="mdl-navigation__link customize">Customize</a>
          <a href="../faq/index.html" class="mdl-navigation__link faq">FAQ</a>
          <div class="spacer"></div>



          <div style="font-size: medium;margin-right: 20px"><?php  echo  $_SESSION['name']; ?> </div>
          <div><?php echo "<form method='post' action='logout.php'>
		<input type='submit' value='log out'>
		</form> "; ?> </div>

        </nav>
      </div>
      <i class="material-icons scrollindicator scrollindicator--right">&#xE315;</i>
      <i class="material-icons scrollindicator scrollindicator--left">&#xE314;</i>
    </header>
    <main class="docs-layout-content mdl-layout__content mdl-color-text--grey-600">
      <div class="content mdl-grid mdl-grid--no-spacing" id="content">
        <div class="subpageheader mdl-cell--12-col">Templates</div>
        

<section class="template template--blog docs-text-styling mdl-grid mdl-cell mdl-cell--12-col">
  <img src="../assets/templates/blog.jpg"
    srcset="../assets/templates/blog.jpg 1x, ../assets/templates/blog_2x.jpg 2x"
    class="template__preview mdl-cell mdl-cell--8-col">
  <div class="template__meta mdl-cell mdl-cell--4-col mdl-grid mdl-grid--no-spacing">
    <h3 class="template__header mdl-cell mdl-cell--12-col mdl-typography--body-2">Blog</h3>
    <p class="mdl-cell mdl-cell--12-col">
      A mobile focused responsive template that showcases image or text based blog entries, a subscription CTA, search &amp; share links, and an expanded article page with comments, counters and bookmarking capabilities built-in.
    </p>
    <a href="https://storage.googleapis.com/code.getmdl.io/1.0.6/mdl-templates.zip" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">file_download</i>
      </button>
      Download
    </a>
    <a href="../templates/blog/index.html" target="_blank" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">arrow_forward</i>
      </button>
      Preview
    </a>
  </div>
</section>

<section class="template template--android-dot-com docs-text-styling mdl-grid mdl-cell mdl-cell--12-col">
  <img src="../assets/templates/android-dot-com.jpg"
    srcset="../assets/templates/android-dot-com.jpg 1x, ../assets/templates/android-dot-com_2x.jpg 2x"
    class="template__preview mdl-cell mdl-cell--8-col">
  <div class="template__meta mdl-cell mdl-cell--4-col mdl-grid mdl-grid--no-spacing">
    <h3 class="template__header mdl-cell mdl-cell--12-col mdl-typography--body-2">Android.com MDL skin</h3>
    <p class="mdl-cell mdl-cell--12-col">
      A Material Design Lite version of the current android.com site, using the same content with a horizontal navigation, feature carousel and long form scrolling sub pages.
    </p>
    <a href="https://storage.googleapis.com/code.getmdl.io/1.0.6/mdl-templates.zip" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">file_download</i>
      </button>
      Download
    </a>
    <a href="../templates/android-dot-com/index.html" target="_blank" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">arrow_forward</i>
      </button>
      Preview
    </a>
  </div>
</section>

<section class="template template--dashboard docs-text-styling mdl-grid mdl-cell mdl-cell--12-col">
  <img src="../assets/templates/dashboard.jpg"
    srcset="../assets/templates/dashboard.jpg 1x, ../assets/templates/dashboard_2x.jpg 2x"
    class="template__preview mdl-cell mdl-cell--8-col">
  <div class="template__meta mdl-cell mdl-cell--4-col mdl-grid mdl-grid--no-spacing">
    <h3 class="template__header mdl-cell mdl-cell--12-col mdl-typography--body-2">Dashboard</h3>
    <p class="mdl-cell mdl-cell--12-col">
      A modular responsive template built to display data visualizations and information with a clear vertical nav, user profile, search and dedicated space for updates and filters.
    </p>
    <a href="https://storage.googleapis.com/code.getmdl.io/1.0.6/mdl-templates.zip" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">file_download</i>
      </button>
      Download
    </a>
    <a href="../templates/dashboard/index.html" target="_blank" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">arrow_forward</i>
      </button>
      Preview
    </a>
  </div>
</section>

<section class="template template--text-only docs-text-styling mdl-grid mdl-cell mdl-cell--12-col">
  <img src="../assets/templates/text-only.jpg"
    srcset="../assets/templates/text-only.jpg 1x, ../assets/templates/text-only_2x.jpg 2x"
    class="template__preview mdl-cell mdl-cell--8-col">
  <div class="template__meta mdl-cell mdl-cell--4-col mdl-grid mdl-grid--no-spacing">
    <h3 class="template__header mdl-cell mdl-cell--12-col mdl-typography--body-2">Text-heavy webpage</h3>
    <p class="mdl-cell mdl-cell--12-col">
      Built for presenting content that is information dense, easily updatable, and optimized for legibility, this template has a sticky horizontal top nav on mobile, feature callouts, cards and a site map footer with a deep-linked table of contents.
    </p>
    <a href="https://storage.googleapis.com/code.getmdl.io/1.0.6/mdl-templates.zip" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">file_download</i>
      </button>
      Download
    </a>
    <a href="../templates/text-only/index.html" target="_blank" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">arrow_forward</i>
      </button>
      Preview
    </a>
  </div>
</section>

<section class="template template--article docs-text-styling mdl-grid mdl-cell mdl-cell--12-col">
  <img src="../assets/templates/article.jpg"
    srcset="../assets/templates/article.jpg 1x, ../assets/templates/article_2x.jpg 2x"
    class="template__preview mdl-cell mdl-cell--8-col">
  <div class="template__meta mdl-cell mdl-cell--4-col mdl-grid mdl-grid--no-spacing">
    <h3 class="template__header mdl-cell mdl-cell--12-col mdl-typography--body-2">Stand-alone article</h3>
    <p class="mdl-cell mdl-cell--12-col">
      A clean layout optimized for presenting text-based content with a breadcrumb nav, search, clear headers and a footer that utilizes a card-like structure to showcase the content.
    </p>
    <a href="https://storage.googleapis.com/code.getmdl.io/1.0.6/mdl-templates.zip" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">file_download</i>
      </button>
      Download
    </a>
    <a href="../templates/article/index.html" target="_blank" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
        <i class="material-icons">arrow_forward</i>
      </button>
      Preview
    </a>
  </div>
</section>


      </div>
      <section class="docs-text-styling download mdl-color--grey-800">
        <a href="../started/index.html#download" class="mdl-color-text--grey-50">Download Kit</a>
      </section>
      <footer class="docs-text-styling docs-footer mdl-mini-footer mdl-color--grey-900">
        <ul>
          <li class="mdl-mini-footer--social-btn">
            <a href="https://twitter.com/googledesign" class="social-btn social-btn__twitter" role="button" title="Twitter"></a>
          </li>
          <li class="mdl-mini-footer--social-btn">
            <a href="https://github.com/google/material-design-lite" class="social-btn social-btn__github" role="button" title="GitHub"></a>
          </li>
          <li class="mdl-mini-footer--social-btn">
            <a href="https://plus.google.com/+googledesign" class="social-btn social-btn__gplus" role="button" title="Google+"></a>
          </li>
        </ul>
        <ul class="docs-link-list">
          <li><a class="mdl-color-text--grey-600" href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
          <li><a class="mdl-color-text--grey-600" href="https://github.com/google/material-design-lite/issues">Help</a></li>
        </ul>
      </footer>
    </main>
  </div>

    <!-- IE Compatibility shims -->
      <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js""></script>
      <![endif]-->

      <!--[if IE]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.7/es5-shim.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/classlist/2014.01.31/classList.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flexie/1.0.3/flexie.min.js"></script>
        <link href="../assets/ie.css" rel="stylesheet">
      <![endif]-->
    <!-- end shims -->


    <!-- Material Design Lite -->
    <script src="../material.min.js"></script>
    <!-- Add Copy-to-CodePen buttons to code blocks -->
    <script src="../assets/codepen.js"></script>
    <!-- Enable Prism syntax highlighting -->
    <script src="../assets/prism.js"></script>
    <script src="../assets/prism-markup.min.js"></script>
    <script src="../assets/prism-javascript.min.js"></script>
    <script src="../assets/prism-css.min.js"></script>
    <script src="../assets/prism-bash.min.js"></script>
    <script src="../assets/main.js"></script>
    <!-- Built with love using Material Design Lite -->
  </body>
</html>
