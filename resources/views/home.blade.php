<x-layout>
    <x-slot:title>Liste des restaurants</x-slot:title>
{{--    Ces balises permettent à Blade de les interpréter comme des composants.--}}
    <h2>Liste des restaurants</h2>
    <div style="margin-bottom: 1rem">
        <a href="{{ route('restaurants.create') }}">Créer un restaurant</a>
    </div>
    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Entretiens</th>
        </tr>
        </thead>
        <tbody>
        @foreach($chats as $chat)
            <tr>
                <td>
                    <a href="{{ route('meow.show', $chat) }}">{{ $chat->name }}</a>
                </td>
                <td>{{ $chat->type }}</td>
                <td>{{ $chat->user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
