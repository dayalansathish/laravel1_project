<!DOCTYPE html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="shortcut icon" href="/metronic8/demo8/assets/media/logos/favicon.ico" /> -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
 
    <script>
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>

    @include('include.style')
</head>


<body id="kt_body" class="auth-bg">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
 
        @yield('content-sign-in')


        @include('include.script')
<script src="assets/js/custom/authentication/sign-in/general.js"></script>

</body>
</html>