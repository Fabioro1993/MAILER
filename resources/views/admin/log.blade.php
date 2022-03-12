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
                    <p style="text-align: center">Logs del sistema</p><br>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Accion</th>
                                <th>Model Afectado</th>
                                <th>Usuario</th>
                                <th>Administrador</th>
                                <th>Modificacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <td>{{$activity->description}}</td>
                                    <td>{{$activity->subject_type}}</td>
                                    <td>{{$activity->subject_id}} - {{$activity->subject->name}}</td>
                                    <td>{{$activity->causer_id}} - {{$activity->causer->name}}</td>
                                    <td>{{$activity->properties}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
