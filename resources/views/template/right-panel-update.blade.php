<div class="right-panel-update">
    <div class="right-panel-title">
        <p id="right-panel-update-title" class="panel-name"></p>
        <img id="close-button" src="{{asset('img/icon/close-button.svg')}}" alt="close-button">
    </div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <p class="input-name">Артикул</p>
        <input id="right-panel-update-article" class="big-input" name="ARTICLE">
        <p class="input-name">Название</p>
        <input id="right-panel-update-name" class="big-input" name="NAME">
        <p class="input-name">Статус</p>
        <select id="right-panel-update-status" class="big-input" name="STATUS">
            <option value="available">Доступен</option>
            <option value="unavailable">Не доступен</option>
        </select>
        <p class="attr-title">Атрибуты</p>
        <label id="add-attr-btn-update-panel" class="add-attr-btn">+ Добавить атрибут</label>
        <br>
        <input type="submit" value="Сохранить" class="button-add-panel">
    </form>
</div>
