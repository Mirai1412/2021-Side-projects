<x-app-layout>
    <head>
        <style>
            body{
                width: 80%;
                margin: 0 auto;
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body >
        <x-slot name="header">
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight"
                style="text-align: center;">
                {{ __('LIST') }}
            </h2>
        </x-slot>
        <div>
            <h1>리스트</h1>
        </div>
    </body>
</x-app-layout>
