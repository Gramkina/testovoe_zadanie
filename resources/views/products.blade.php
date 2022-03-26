@extends('template.main')
@section('title', 'Продукты')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @auth
        @if(\Illuminate\Support\Facades\Auth::user()->role == config('products.role'))
            <script src="{{asset('js/app.js')}}"></script>
        @endif
    @endauth
@endpush

@section ('body')

    @include ('template.left-menu')

    <div class="right-content">

        @include ('template.header')

        <div class="content">
            <table class="product-table">
                <tr class="table-title">
                    <td>АРТИКУЛ</td>
                    <td>НАЗВАНИЕ</td>
                    <td>СТАТУС</td>
                    <td>АТРИБУТЫ</td>
                </tr>
                @foreach ($products as $product)
                    <tr class="content-table">
                        <td>
                            <input name="ARTICLE" type="hidden" value="{{ $product['ARTICLE'] }}">
                            {{ $product['ARTICLE'] }}
                        </td>
                        <td>
                            <input name="NAME" type="hidden" value="{{ $product['NAME'] }}">
                            {{$product['NAME']}}
                        </td>
                        <td>
                            <input name="STATUS" type="hidden" value="{{ $product['STATUS'] }}">
                            {{$product['STATUS'] == 'available' ? 'Доступен' : 'Не доступен'}}
                        </td>
                        <td>
                            @isset ($product['DATA'])
                                @foreach ($product['DATA'] as $name => $value)
                                    <input name="DATA" type="hidden" attr-name="{{ $name }}" attr-value="{{ $value }}">
                                    <p>{{ $name }}: {{ $value }}</p>
                                @endforeach
                            @endisset
                        </td>
                    </tr>
                @endforeach
            </table>

            @auth
                @if(\Illuminate\Support\Facades\Auth::user()->role == config('products.role'))
                    <div class="button-add">Добавить</div>
                @endif
            @endauth

            @include ('template.right-panel-store')
            @include ('template.right-panel-show')
            @include ('template.right-panel-update')

        </div>
    </div>
@endsection
