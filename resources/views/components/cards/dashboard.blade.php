@props([
    'iconBackgroundColor' => 'bg-blue-400',
    'title' => 'Default Title',
    'value' => '0',
    'defaultIcon' => 'true',
])

<div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
    <div class="{{$iconBackgroundColor}} p-4">
        @if($defaultIcon == 'true')
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 fill-white" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                </path>
            </svg>
        @else
            {{$slot}}
        @endif

    </div>
    <div class="px-4 text-gray-700">
        <h3 class="text-sm tracking-wider">{{$title}}</h3>
        <p class="text-3xl">{{$value}}</p>
    </div>
</div>