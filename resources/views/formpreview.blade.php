@extends('layouts.app')
@section('title', 'Assessment Form Preview')

@section('content')
<p class="font-sans text-lg font-semibold">{{$title}}</p>
<p class="font-sans text-md text-gray-600">{{$description}}</p>

<form action="" class="mt-5 flex flex-col space-y-3">
    @foreach(json_decode($data) as $node)
        @if($node->type == 'instruction')
            <fieldset>
                <p class="font-sans text-lg font-semibold">Instruction: {{$node->text}}</p>
            </fieldset>
        @elseif($node->type == 'shortText')
            <fieldset>
                <p for="" class="font-sans text-md font-base">{{$node->text}}</p>
                <p class="mt-1 text-sm font-sans">{{$node->score}} points</p>
                <input type="text" placeholder="Enter your answer"
                class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2"/>
            </fieldset>
        @elseif($node->type == 'longText')
            <fieldset>
                <p for="" class="font-sans text-md font-base">{{$node->text}}</p>
                <p class="mt-1 text-sm font-sans">{{$node->score}} points</p>
                <textarea placeholder="Enter your answer" class="mt-2 px-4 py-1.5 text-sm rounded-md bg-white border border-gray-400 w-full outline-blue-500 md:w-1/2">
                </textarea>
            </fieldset>
        @elseif($node->type == 'radio')
            <fieldset>
                <p for="" class="font-sans text-md font-base">{{$node->text}}</p>
                <p class="mt-1 text-sm font-sans">{{$node->score}} points</p>
                @foreach(explode(',', $node->options) as $option)
                    <div class="mt-2 flex flex-row items-center space-x-3">
                        <input type="radio" name="{{$node->text}}" value="{{$option}}">
                        <label for="" class="font-sans text-base font-normal text-gray-700">{{$option}}</label>
                    </div>
                @endforeach
            </fieldset>
        @endif
    @endforeach
</form>
@endsection
