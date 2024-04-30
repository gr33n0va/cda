<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vault') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full mx-auto">
            <div class="space-y-10 shadow-sm sm:rounded-lg">
                <div>
                    <h2 class="text-2xl font-bold text-center">Création</h2>
                    <form action="store" method="POST" class="flex justify-around">
                        @csrf
                        <input type="text" name="name" placeholder="Nom du site" class="text-sm">
                        <input type="text" name="url" placeholder="lien du site" class="text-sm">
                        <input type="text" name="pseudo" placeholder="identifiant" class="text-sm">
                        <input type="text" name="mail" placeholder="adresse mail" class="text-sm">
                        <input type="text" name="password" placeholder="Mot de passe" class="text-sm">
                        <input type="submit" value="Create" class="text-sm bg-green-500 rounded-lg px-2 hover:bg-green-600">
                    </form>
                </div>

                <div>                    
                    <h2 class="text-2xl font-bold text-center">Edition</h2>
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col" class="text-sm">Nom</th>
                                <th scope="col" class="text-sm">Url</th>
                                <th scope="col" class="text-sm">Identifiant</th>
                                <th scope="col" class="text-sm">adresse mail</th>
                                <th scope="col" class="text-sm">mot de passe</th>
                                <th scope="col" class="text-sm"></th>
                                <th scope="col" class="text-sm"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <form action="update/{{ $data['id'] }}" method="POST" class="flex justify-around">
                                    @csrf
                                    @method("PATCH")
                                    <td>
                                        <input type="text" name="name" value="{{ $data['name'] }}" class="text-sm">
                                    </td>
                                    <td>
                                        <input type="text" name="url" value="{{ $data['url'] }}" class="text-sm">
                                    </td>
                                    <td>
                                        <input type="text" name="pseudo" value="{{ $data['pseudo'] }}" class="text-sm">
                                    </td>
                                    <td>
                                        <input type="text" name="mail" value="{{ $data['mail'] }}" class="text-sm">
                                    </td>
                                    <td>
                                        <input type="text" name="password" value="{{ $data['password'] }}" class="text-sm">
                                    </td>
                                    <td>
                                        <input type="submit" value="Update" class="text-sm bg-blue-500 rounded-lg px-2 hover:bg-blue-600">
                                    </td>
                                </form>
                                <td>
                                    <form action="/delete/{{$data['id']}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" value="delete" class="text-sm bg-red-500 rounded-lg px-2 hover:bg-red-600">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
