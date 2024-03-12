<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf8">
{{--    double point d'interogation = si la variable n'est pas définie, on affiche la valeur par défaut--}}
    <title>{{ $paragraphe?? 'Meows France : Les chats' }}</title>
</head>
<body>
<header><h1><a href="/">{{$title}}France: Les bases</a></h1></header>
<main>{{ $slot }}</main>
</body>
</html>
