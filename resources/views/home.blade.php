@extends('app')

@section('content')
<div>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <router-link to = "/products">
                <button type="button" class="btn-sm btn-primary">
                    Productos
                </button>
            </router-link>
        </li>
        <li class="nav-item">
            <router-link to = "/stores">
                <button type="button" class="btn-sm btn-primary">
                    Tiendas
                </button>
            </router-link>
        </li>
    </ul>
</div>
<div class="row" style="margin-top: 5em">
    <router-view />
</div>
@endsection
