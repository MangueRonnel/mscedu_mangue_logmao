@extends('layouts.app')
@section('title', 'Dashboard')
@section('header')
@vite('resources/js/section_average_chart.js')
@endsection

@section('content')

{{-- Class Function Buttons --}}
<div class="flex flex-row justify-between md:justify-end md:space-x-6 lg:space-x-12">
    <button type="button" id="joinClass"
        class="flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-600 hover:bg-blue-700 active:bg-blue-600">
        Join a class
        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 inline stroke-white stroke-1">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.36364 13.5C6.36364 13.7761 6.58749 14 6.86364 14H13.5C14.3284 14 15 13.3284 15 12.5V2.5C15 1.67157 14.3284 1 13.5 1H3.5C2.67157 1 2 1.67157 2 2.5V9.13636C2 9.41251 2.22386 9.63636 2.5 9.63636C2.77614 9.63636 3 9.41251 3 9.13636V2.5C3 2.22386 3.22386 2 3.5 2H13.5C13.7761 2 14 2.22386 14 2.5V12.5C14 12.7761 13.7761 13 13.5 13H6.86364C6.58749 13 6.36364 13.2239 6.36364 13.5Z"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 5.5C11 5.22386 10.7761 5 10.5 5H5.5C5.22386 5 5 5.22386 5 5.5C5 5.77614 5.22386 6 5.5 6H9.29289L1.14645 14.1464C0.951184 14.3417 0.951184 14.6583 1.14645 14.8536C1.34171 15.0488 1.65829 15.0488 1.85355 14.8536L10 6.70711V10.5C10 10.7761 10.2239 11 10.5 11C10.7761 11 11 10.7761 11 10.5V5.5Z"/>
        </svg>            
    </button>
    <button type="button" id="createClass"
        class="flex flex-row items-center px-6 py-2.5 rounded text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-600 hover:bg-green-700 active:bg-green-600">
        Create a class
        <svg viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-2 inline stroke-white stroke-1">
            <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z"/>
        </svg>
    </button>
</div>

{{-- Dashboard Cards --}}
<div class="mt-6 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
    <x-cards.dashboard iconBackgroundColor="bg-blue-400" title="Owned Class" value="{{count(auth()->user()->getOwnedClassrooms())}}" defaultIcon="false">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            viewBox="0 0 330 330" class="h-12 w-12 fill-white">
            <path d="M325.606,114.394l-110-110C212.794,1.581,208.979,0,205,0H65c-8.284,0-15,6.716-15,15v225H15c-8.284,0-15,6.716-15,15
                c0,41.355,33.645,75,75,75h180c41.355,0,75-33.645,75-75V125C330,121.022,328.42,117.206,325.606,114.394z M220,51.213L278.787,110
                H220V51.213z M75,300c-19.556,0-36.239-12.539-42.43-30h148.937c2.258,11.075,6.966,21.276,13.528,30H75z M255,300
                c-24.814,0-45-20.186-45-45c0-8.284-6.716-15-15-15H80V30h110v95c0,8.284,6.716,15,15,15h95v115C300,279.814,279.814,300,255,300z"
            />
         </svg>
    </x-card.dashboard>
    <x-cards.dashboard iconBackgroundColor="bg-orange-400" title="Joined Class" value="{{count(auth()->user()->getJoinedClassrooms())}}" defaultIcon="false">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 stroke-white" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
            </path>
        </svg>
    </x-card.dashboard>
    <x-cards.dashboard iconBackgroundColor="bg-red-400" title="Assessment Answered" value="{{count(auth()->user()->answers)}}" defaultIcon="false">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-12 fill-white">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V7C19 7.55228 19.4477 8 20 8C20.5523 8 21 7.55228 21 7V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM22.1213 10.7071C20.9497 9.53553 19.0503 9.53553 17.8787 10.7071L16.1989 12.3869L11.2929 17.2929C11.1647 17.4211 11.0738 17.5816 11.0299 17.7575L10.0299 21.7575C9.94466 22.0982 10.0445 22.4587 10.2929 22.7071C10.5413 22.9555 10.9018 23.0553 11.2425 22.9701L15.2425 21.9701C15.4184 21.9262 15.5789 21.8353 15.7071 21.7071L20.5556 16.8586L22.2929 15.1213C23.4645 13.9497 23.4645 12.0503 22.2929 10.8787L22.1213 10.7071ZM18.3068 13.1074L19.2929 12.1213C19.6834 11.7308 20.3166 11.7308 20.7071 12.1213L20.8787 12.2929C21.2692 12.6834 21.2692 13.3166 20.8787 13.7071L19.8622 14.7236L18.3068 13.1074ZM16.8923 14.5219L18.4477 16.1381L14.4888 20.097L12.3744 20.6256L12.903 18.5112L16.8923 14.5219Z"/>
        </svg>
    </x-card.dashboard>
</div>

{{-- Recent Assessments --}}
<p class="my-6 font-sans text-lg font-semibold md:text-xl lg:text-2xl">Recent Assessment Trend</p>

<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 w-full justify-center items-start">
    @if(auth()->user()->getLatestAssessment() != null)
        <div class="grid bg-white shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] px-6 py-8 w-full rounded-lg font-[sans-serif] overflow-hidden">
            <div class="flex items-center">
                <h3 class="text-xl font-bold flex-1 text-black">Top Scorers</h3>
                <a href="/assessments/latest" class="text-sm text-blue-500 font-bold cursor-pointer">See more</a>
            </div>
            <div class="mt-8 space-y-4 min-h-72">
                @foreach(auth()->user()->getLatestAssessment()->answers as $answer)
                <x-cards.user 
                    profile="{{$answer->user->profile}}" 
                    name="{{$answer->user->name}}" 
                    email="{{$answer->user->email}}" 
                    value="{{$answer->score}} / {{auth()->user()->getLatestAssessment()->total}}"
                />
                @endforeach
            </div>
        </div>
        <div class="grid lg:col-span-2 bg-white shadow-[0_2px_15px_-6px_rgba(0,0,0,0.2)] px-6 py-8 w-full rounded-lg font-[sans-serif] items-center justify-center">
            <input type="text" class="hidden" id="sectionAverage" value="{{json_encode(auth()->user()->getLatestAssessment()->getSectionAverage())}}">
            <canvas id="sectionAverageChart" class=""></canvas>
        </div>
    @else
        <p class="mt-8 font-sans text-xl font-semibold text-gray-700 text-center md:col-span-2 md:text-2xl lg:col-span-3 lg:text-4xl">
            No assessment yet
        </p>
    @endif
</div>


{{-- Modals --}}
<x-modals.createclass/>
<x-modals.joinclass/>

@endsection
