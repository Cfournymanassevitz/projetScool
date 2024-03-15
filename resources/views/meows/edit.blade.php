<x-slot name="header">
    <head>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <style>
            body {
                background-color: #f5f4f6;
            }
            h1 {
                color: #333;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
            }
        </style>
    </head>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Meows France') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                <div>
                    <h1>Meows France : Les chats - Show ID of user </h1>

                </div>

                <h2>Liste des users</h2>
            </div>
        </div>
    </div>
</div>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>message</th>
    </tr>
    </thead>
    <tbody>

    <form action="{{route("meows.update", ['id' => $meow->id])}}" method="post" class="test">
        @CSRF
        <fieldset>
            <legend>CONTACTEZ NOUS</legend>
        </fieldset>
        <div class="msg">
            <label for="content">Message : </label>
            <textarea id="content" name="content" cols="30" rows="10">{{ $meow->messages }}</textarea>
        </div>
        <div class="btn">
            <button type="submit"> Envoyer le message </button>
        </div>
    </form>
    </tbody>

</table>


