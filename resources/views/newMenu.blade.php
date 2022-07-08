<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="forms" action="/newMenu" method="POST"><br>
                        @csrf
                        <h1 class="title">
                            Novo Cardápio
                        </h1>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Nome do Prato
                            </label>
                            <input class="form_inputs" name="dish" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none 
                            focus:shadow-outline" id="username" type="text" placeholder="Nome do Prato">

                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Nome da Bebida
                            </label>
                            <input class="form_inputs" name="drink" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none 
                            focus:shadow-outline" id="username" type="text" placeholder="Nome da Bebida">

                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                Nome da Sobremesa
                            </label>

                            <input class="form_inputs" name="dessert" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none 
                            focus:shadow-outline" id="username" type="text" placeholder="Nome da Sobremesa">

                            <button class=" btn_buttons bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Cadastrar Cardápio
                            </button>
                            @if ($errors->any())
                                <div class="errors bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="errors">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

