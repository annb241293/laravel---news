<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/fev-icon.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>newspaper</title>
    <!-- google fonts -->
    @include('layouts.style');
</head>

<body>
    <div class="se-pre-con"></div>
    @include('layouts.header');

    <!-- news feed Area
        ============================================ -->
        
   @yield('content');
   
    @include('layouts.footer');

    @include('layouts.script');
    @yield('script');
</body>

</html>
