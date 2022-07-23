@extends('admin.adminlayouts.adminapp')

@section('content')
    <div class="page-content__wrapper">
        <div class="page-content__box max--width100 min--height100vh mrg-body-top">
            <div class="page-content__box-wrapper">
                <div class="page-content__heading">
                    <h2>dodaj serwer</h2>
                </div>

                <div class="category-body">
                    <form action="{{route('addserver')}}" method="POST">
                        @csrf
                        <div class="category-body__small">
                            <div class="category__from__controls text-align__center">
                                <input type="text" name="name" placeholder="nazwa">
                            </div>
                            <div class="category__from__controls text-align__center">
                                <input type="text" name="ip" placeholder="ip">
                            </div>
                            <div class="category__from__controls text-align__center">
                                <input type="text" name="port" placeholder="port">
                            </div>
                            <div class="category__from__controls text-align__center">
                                <input type="text" name="rconport" placeholder="rconport">
                            </div>
                        </div>
                        <div class="category__from__controls text-align__center">
                            <input type="submit" value="Zapisz">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
