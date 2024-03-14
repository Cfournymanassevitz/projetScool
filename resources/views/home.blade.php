{{--<x-layout>--}}

{{--    Ces balises permettent à Blade de les interpréter comme des composants.--}}
    <h2>Liste des miaou</h2>
    <div style="margin-bottom: 1rem">
        <a >Créer un restaurant</a>
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
        @foreach($meows as $meow)
            <tr>
                <td>
                    <a >{{ $meow->name }}</a>
                </td>
                <td>{{ $meow->type }}</td>
                <td>{{ $meow->user->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--</x-layout>--}}
