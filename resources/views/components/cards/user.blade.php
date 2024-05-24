@props([
    'profile' => 'https://img.freepik.com/premium-vector/man-support-icon-flat-vector-service-help-marketing-personal_98396-64301.jpg',
    'name' => 'John Doe',
    'email' => 'johndoe23@gmail.com',
    'value' => '0',
])

<div
    class="flex flex-wrap items-center shadow-[0_0px_8px_-3px_rgba(6,81,237,0.3)] rounded-lg w-full px-4 py-4">
    <img src='{{$profile}}' class="w-10 h-10 rounded-full" />
    <div class="ml-4 flex-1">
        <p class="text-sm text-black font-semibold">{{$name}}</p>
        <p class="text-xs text-gray-500 mt-0.5">{{$email}}</p>
    </div>
    <p class="font-sans text-lg font-semibold">{{$value}}</p>
</div>