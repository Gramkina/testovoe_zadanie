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
                <tr class="content-table">
                    <td>mtokb2</td>
                    <td>fasdfsafsdfsdafsdf</td>
                    <td>Доступен</td>
                    <td>
                        <p>Цвет: черный</p>
                        <p>аываф: fsdfsdfsf</p>
                    </td>
                </tr>
            </table>
            <div class="button-add">Добавить</div>
            @include('template.right-panel')
        </div>
    </div>
@endsection
