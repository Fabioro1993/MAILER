<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Administrador
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p style="text-align: center">Usuarios del sistema</p><br>
                    <a class="btn btn-primary" href="{{ route('admin.register') }}" role="button">Registrar usuarios</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Cedula</th>
                                <th>Nacimiento</th>
                                <th>Codigo postal</th>
                                <th>Ciudad</th>
                                <th>Edad</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->id_card}}</td>
                                    <td><?PHP echo date('d-m-Y',strtotime($user->birthday)); ?></td>
                                    <td>{{$user->postal_code}}</td>
                                    <td>{{$user->municipality->name_municipality}}</td>
                                    <td>{{$user->year}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ url('admin/edit/user/'.$user->id.'') }}" role="button">Actualizar</a>
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
