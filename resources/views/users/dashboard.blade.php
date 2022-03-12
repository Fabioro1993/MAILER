<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Emails
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p style="text-align: center">Correos enviados</p><br>
                    <a class="btn btn-primary" href="{{ route('email.create') }}" role="button">Nuevo correo</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Destinatario</th>
                                <th>Mensaje</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emails as $email)
                                <tr>
                                    <td>{{$email->subject}}</td>
                                    <td>{{$email->addressee}}</td>
                                    <td>{{$email->message}}</td>
                                    <td>{{$email->status_boolean}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>