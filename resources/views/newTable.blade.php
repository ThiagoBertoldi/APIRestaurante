<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="forms" action="/tables" method="POST"><br>
                        @csrf
                        <h1 class="title">
                            Nova Mesa
                        </h1>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Número da Mesa
                            </label>
                            <input class="form_inputs" name="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none 
                            focus:shadow-outline" id="username" type="text" placeholder="Número da Mesa">

                            <button class=" btn_buttons bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Cadastrar Mesa
                            </button>
                        </div>
                    </form>
                    <div class="center_table">
                        <h1 class="title">
                            Lista de Mesas
                        </h1>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Número da Mesa</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($tables as $table)
                                    <tr>
                                        <td> {{$table->id}}</td>
                                        <td> {{$table->number}}</td>
                                    </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
