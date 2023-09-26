<!DOCTYPE html>
<html lang="ko">
<head>
    @include('common.header')
</head>
<body>
<div id="wrap">
    @include('common.headerLayout')
    <div id="contents">
        @yield('content')
    </div>
    @include('common.footerLayout')
</div>
@include('common.background')
@include('common.footer')
</body>
</html>
