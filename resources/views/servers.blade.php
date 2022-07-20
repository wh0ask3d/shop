@foreach($servers as $server)
    <li>
        <div class="user-group-listing__item">
            <div class="user-group-listing__item__image">
                <img src="" alt="">
                <span class="group-locked"></span>
            </div>
            <div class="user-group-listing__item__contetnt">
                <h4>{<span>12</span></h4>
                <div class="btn-group btn-group-sm special">
                    <a href="#" class="drop dropdown-btn" data-toggle="dropdown" ><img src="{{asset('assets/img/three-dots.png')}}" alt=""></a>
                    <ul class="dropdown-menu dropdown-menu__box">
                        <li class="drop-down__item"><a href="#"><img src="{{asset('assets/img/delete.svg')}}" alt=""> Usuń jako admina</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
@endforeach
