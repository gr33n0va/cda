<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body>
        <div>
            <h2 class="text-center">Password Vault</h2>
            <div class="flex justify-center">                
                <a href="{{ route('login') }}"
                    class="bg-blue rounded-lg px-2"
                    > Log in
                </a>

                <a href="{{ route('register') }}"
                    class="bg-blue rounded-lg px-2"
                    > Register
                </a>
            </div>
        </div>
        <div class="flex flex-col place-content-center w-full space-y-5 text-center mt-12">
            <div>
                <p>Bienvenus dans ce projet de sauvegarde de mots de passe.</p>
                <p>Le but de ce projet est uniquement de faire une démonstration du CRUD</p>
                <p>Il ne vous serra demander à aucun moment d'utiliser de véritables identifiant de connexion, adresses mail ou mots de passe</p>
                <p>Vous pouvez créer un compte sur ce site en utilisant n'importe quelle adresse factice (utilisateur@exemple.test)</p>
                <p>Ainsi que nimporte quel mot de passe factice</p>
                <p>Vous pourrez vous connecter en utilisant les identifiants ainsi créés</p>
            </div>
            <div>
                <p>Ce projet vous permettra de tester une sauvegarde d'identifiants, adresses mail, mots de passe... factices</p>
                <p>Les données ainsi saugardées pourront ensuite étre modifiées ou supprimées</p>
            </div>
        </div>
    </body>
</html>
