@extends('template.main')
@section('title', 'Продукты')

@push('head')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{asset('js/app.js')}}"></script>
@endpush

@section('body')
    @include('template.left-menu')
    <div class="right-content">
        @include('template.header')
        <div class="content">
            <table class="product-table">
                <tr class="table-title">
                    <td>АРТИКУЛ</td>
                    <td>НАЗВАНИЕ</td>
                    <td>СТАТУС</td>
                    <td>АТРИБУТЫ</td>
                </tr>
                @foreach($products as $product)
                    <tr class="content-table">
                        <td>{{$product['ARTICLE']}}</td>
                        <td>{{$product['NAME']}}</td>
                        <td>{{$product['STATUS']}}</td>
                        <td>
                            @isset($product['DATA'])
                                @foreach($product['DATA'] as $name => $value)
                                    <p>{{ $name }}: {{ $value }}</p>
                                @endforeach
                            @endisset
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="button-add">Добавить</div>
            @include('template.right-panel')
        </div>
    </div>
@endsection
