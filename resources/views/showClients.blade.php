<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="title">
                        Lista de Clientes
                    </h1>
                    <br>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do Cliente</th>
                                <th>CPF</th>  
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($clients as $client)
                                <tr><td> {{$client->id}}</td>
                                    <td> {{$client->name}}</td>
                                    <td> {{$client->cpf}}</td>
                                </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

