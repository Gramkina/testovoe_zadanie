<div class="right-panel">
    <div class="right-panel-title">
        <p class="panel-name">Добавить продукт</p>
        <img id="close-button" src="{{asset('img/icon/close-button.svg')}}" alt="close-button">
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <p class="input-name">Артикул</p>
        <input class="big-input" name="ARTICLE">
        <p class="input-name">Название</p>
        <input class="big-input" name="NAME">
        <p class="input-name">Статус</p>
        <select class="big-input" name="STATUS">
            <option selected value="available">Доступен</option>
            <option value="unavailable">Не доступен</option>
        </select>
        <p class="attr-title">Атрибуты</p>
        <label id="add-attr-btn" class="add-attr-btn">+ Добавить атрибут</label>
        <br>
        <input type="submit" value="Добавить" class="button-add-panel">
    </form>
</div>
