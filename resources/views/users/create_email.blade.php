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
                    <p style="text-align: center">Crear Email</p><br>
                </div>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('/dashboard/email/store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="addressee">Destinatario</label>
                                <input type="email" class="form-control" id="addressee" name="addressee" placeholder="Destinatario" value="{{old('addressee')}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="subject">Asunto</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" value="{{old('subject')}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="message">Mensaje</label><br>
                                <textarea name="message" id="message" cols="60" rows="10"required>{{old('message')}}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
