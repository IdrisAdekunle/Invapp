<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
<div id="page-loader" class="show">
</div>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
@include('layouts.sidebar')
 @include('layouts.navbar')

    <main id="main-container">


    @yield('content')


</main>
    @include('layouts.footer')
</div>
</body>
</html>