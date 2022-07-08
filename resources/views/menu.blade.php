<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="title">
                        Cardápios Disponíveis
                    </h1>
                    @can('waiter')
                        <h3 class="subtitle">
                            <i>Apenas o Cozinheiro consegue criar cardápios</i>
                        </h3>
                    @endcan
                    <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Prato</th>
                                <th>Bebida</th>
                                <th>Sobremesa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $item)
                            <tr>
                                <td> {{$item->id}}</td>
                                <td> {{$item->dish}}</td>
                                <td> {{$item->drink}}</td>
                                <td> {{$item->dessert}}</td>     
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

