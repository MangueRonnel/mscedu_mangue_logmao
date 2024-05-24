<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @yield('header')
    <title>@yield('title')</title>
</head>
<body>
    <div class="flex flex-col lg:flex-row items-start lg:justify-between">
        <x-sidebar/>
        <div class="flex flex-col w-full">
            <x-header title="{{ $__env->yieldContent('title') }}"/>
            <div class="dashboard-container w-full p-6 overflow-y-scroll">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>