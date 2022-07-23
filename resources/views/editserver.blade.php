@extends('admin.adminlayouts.adminapp')

@section('content')
    <div class="page-content__wrapper">
        <div class="page-content__box max--width100 min--height100vh mrg-body-top">
            <div class="page-content__box-wrapper">
                <div class="page-content__heading">
                    <h2>edytuj {{$server->name}} </h2>
                </div>

                <div class="category-body">
                    <form action="{{route('editupdateserver', ['server' => $server])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="category-body__small">
                            <div class="category__from__controls text-align__center">
                                <input type="text" value="{{server->name}}" name="name" placeholder="name">
                            </div>
                            <div class="category__from__controls text-align__center">
                                <input type="text" value="{{server->ip}}" name="ip" placeholder="ip">
                            </div>
                            <div class="category__from__controls text-align__center">
                                <input type="text" value="{{server->port}}" name="port" placeholder="port">
                            </div>
                            <div class="category__from__controls text-align__center">
                                <input type="text" value="{{server->rconport}}" name="rconport" placeholder="rconport">
                            </div>
                        </div>
                        <div class="category__from__controls text-align__center">
                            <input type="submit" value="Zapisz1">
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection
