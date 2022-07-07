<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="title">Página Princpal</h1>
                    <br>
                    @can('cooker')
                    <div class="container">
                        <p>Sua função: <i>Cozinheiro</i></p>
                        <br>
                    </div> 
                    <br>
                    <h1 class="title">Lista de Pedidos</h1>
                    
                    <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome do Cliente</th>
                                <th>CPF</th>
                                <th>Item do Pedido</th>
                                <th>Preço</th>
                                <th>Mesa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requests as $users)
                            <tr>
                                <td> {{$users->id}}</td>
                                <td> {{$users->name}}</td>
                                <td> {{$users->cpf}}</td>
                                <td> {{$users->item}}</td>
                                <td> {{$users->price}}</td>
                                <td> {{$users->table}}</td>           
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @elsecan('waiter')
                        <div class="container">
                            <p>Sua função: <i>Garçom</i></p>
                            <br>
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{url('newRequest')}}">Novo pedido</a>
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{url('newClient')}}">Novo cliente</a>
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{url('tables')}}">Nova Mesa</a>
                        </div> 
                        <br>
                        <h1 class="title">Sua Lista de Pedidos</h1>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-black">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Cliente</th>
                                    <th>CPF</th>
                                    <th>Pedido</th>
                                    <th>Preço</th>
                                    <th>Mesa</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach($requests as $request)
                                    <tr>
                                        @if($request->waiter ==  Auth::user()->name)
                                            <td> {{$request->id}}</td>
                                            <td> {{$request->name}}</td>
                                            <td> {{$request->cpf}}</td>
                                            <td> {{$request->item}}</td>
                                            <td> {{$request->price}}</td>
                                            <td> {{$request->table}}</td>
                                        @endif
                                    </tr>
                                @endforeach  
                            </tbody>
                        </table>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

