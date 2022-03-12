<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"> </script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script type=text/javascript>
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
        </script>

        <script type=text/javascript>
            $('#country').change(function(){
                var countryID = $(this).val();
                if(countryID){
                    $.ajax({
                        type:"GET",
                        url:"{{url('state_list')}}?country_id="+countryID,
                        success:function(res){
                            if(res){
                                $("#state").empty();
                                $("#state").append('<option>Select</option>');
                                $.each(res,function(key,value){
                                    $("#state").append('<option value="'+value.id+'">'+value.name_state+'</option>');
                                });
                            }else{
                                $("#state").empty();
                            }
                        }
                    });
                }else{
                    $("#state").empty();
                    $("#city").empty();
                }
            });
            $('#state').on('change',function(){
                var stateID = $(this).val();
                if(stateID){
                    $.ajax({
                        type:"GET",
                        url:"{{url('admin/municipality_list')}}?state_id="+stateID,
                        success:function(res){
                            if(res){
                                $("#city").empty();
                                $.each(res,function(key,value){
                                    $("#city").append('<option value="'+value.id+'">'+value.name_municipality+'</option>');
                                });
                            }else{
                            $("#city").empty();
                            }
                        }
                    });
                }else{
                $("#city").empty();
                }
            });
        </script>
    </body>
</html>
