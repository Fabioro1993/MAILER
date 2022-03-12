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
                    <p style="text-align: center">Editar Usuarios</p><br>
                    <a class="btn btn-primary" onclick="delete_user('')" role="button">Eliminar usuario</a>
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
                    <form action="{{ url('admin/update/'.$user->id.'') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$user->email}}" disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{$user->name}}" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_card">Cedula</label>
                                <input type="text" class="form-control" id="id_card" name="id_card" placeholder="Cedula" value="{{$user->id_card}}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" min="8">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password_confirmation">Confirmar Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="birthday">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Fecha de nacimiento" max="{{$min_date}}" value="<?PHP echo date('Y-m-d',strtotime($user->birthday)); ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone">Celular</label>
                                <input type="text" class="form-control" id="phone" name="phone" min="10" max="10" value="{{$user->phone}}" placeholder="Celular">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="postal_code">Codigo de la ciudad</label>
                              <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="codigo" value="{{$user->postal_code}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="country">Pais</label>
                                <select id="country" name="contries" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{$user->municipality->state->country->id}}">{{$country->name_country}}</option>
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
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@section('script-bottom')
    <script>

        function delete_user() {
            var user_id = '{{$user->id}}';

            Swal.fire({
                title: 'Seguro desea eliminar el usuario?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Si',
                denyButtonText: `No`,
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:"{{url('admin/delete/user')}}",
                        method: 'get',
                        data: {'id':user_id},
                        success: function(data) {
                            Swal.fire('Eliminado!', '', 'success')
                            setTimeout(function () {
                                window.location.href = "{{url('admin/dashboard')}}";
                                }, 3000)

                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire('Usuario a salvo ', '', 'info')
                }
            })
        }

        var countryID = $('#country').val();
        var stateID = '{{$user->municipality->state->id}}';
        var state_name = '{{$user->municipality->state->name_state}}';
        var cityID = '{{$user->municipality->id}}';
        var city_name = '{{$user->municipality->name_municipality}}';
        $.ajax({
            type:"GET",
            url:"{{url('state_list')}}?country_id="+countryID,
            success:function(res){
                if(res){
                    $("#state").empty();
                    $("#state").append('<option value="'+stateID+'">'+state_name+'</option>');
                    $.each(res,function(key,value){
                        $("#state").append('<option value="'+value.id+'">'+value.name_state+'</option>');
                    });
                }else{
                    $("#state").empty();
                }
            }
        });

        $.ajax({
            type:"GET",
            url:"{{url('admin/municipality_list')}}?state_id="+stateID,
            success:function(res){
                if(res){
                    $("#city").empty();
                    $("#city").append('<option value="'+cityID+'">'+city_name+'</option>');
                    $.each(res,function(key,value){
                        $("#city").append('<option value="'+value.id+'">'+value.name_municipality+'</option>');
                    });
                }else{
                $("#city").empty();
                }
            }
        });

    </script>
    @show