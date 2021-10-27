<x-app-layout>
    <head>
        <style>
            body{
                width: 80%;
                margin: 0 auto;
                margin-top: 10px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body >
        <x-slot name="header" >
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight"
                style="text-align: center">
                {{ __('My HOME') }}
            </h2>
        </x-slot>
        <div>
            @foreach ($posts as $post)
            <div class="p-16" style="padding: 10px">
                <div
                    class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">
                            {{  $post-> created_at }}</p>
                        <span>
                            <p>Title :
                                {{ $post->title }}</p>
                        </span>
                        <br>
                        <div class="box2">
                            {!! $post->content !!}
                        </div>

                        <div class="w-full text-right mt-4">
                            <a href="{{route('show', ['id'=>$post->id, 'page'=>$posts->currentPage()])}}">Read More</a>
                        </div>

                    </div>
                </div>

            </div>
            @endforeach
            <div class="a" style="padding: 20px">
                {{ $posts->links()}}
            </div>
        </div>
    </body>
</x-app-layout>
