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
                    <p style="text-align: center">Registrar Usuarios</p><br>
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
                    <form action="{{ url('admin/register/store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email')}}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{old('name')}}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_card">Cedula</label>
                                <input type="text" class="form-control" id="id_card" name="id_card" placeholder="Cedula" value="{{old('id_card')}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" min="8" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password_confirmation">Confirmar Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="birthday">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Fecha de nacimiento" max="{{$min_date}}" value="{{old('birthday')}}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone">Celular</label>
                                <input type="text" class="form-control" id="phone" name="phone" min="10" max="10" value="{{old('phone')}}" placeholder="Celular">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="postal_code">Codigo de la ciudad</label>
                              <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="codigo" value="{{old('postal_code')}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="country">Pais</label>
                                <select id="country" name="contries" class="form-control">
                                    @foreach ($countries as $country)
                                        <option selected value="{{$country->id}}">{{$country->name_country}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="states">Estado</label>
                                <select name=state id="state"></select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="city">Ciudad</label>
                                <select name=municipalities_id id="city"></select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
