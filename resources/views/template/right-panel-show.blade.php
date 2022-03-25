<div class="right-panel-show">
    <div class="right-panel-title">
        <p class="panel-name"></p>
        <div class="tool-panel">
            <form class="form-tool-panel" action="" method="POST">
                <img id="edit-btn" src="{{ asset('img/icon/edit-btn.svg') }}" alt="edit-button">
                @csrf
                @method('DELETE')
                <input type="image" id="delete-btn" src="{{ asset('img/icon/trash.svg') }}" alt="delete-button">
                <input id="article-product" type="hidden" value="">
                <img id="close-button" src="{{asset('img/icon/close-button.svg')}}" alt="close-button">
            </form>
        </div>
    </div>
    <table class="table-product-show">
        <tr>
            <td class="right-panel-show-name">Артикул</td>
            <td id="right-panel-show-article" class="right-panel-show-value tr-attr-value"></td>
        </tr>
        <tr>
            <td class="right-panel-show-name">Название</td>
            <td id="right-panel-show-name" class="right-panel-show-value tr-attr-value"></td>
        </tr>
        <tr>
            <td class="right-panel-show-name">Статус</td>
            <td id="right-panel-show-status" class="right-panel-show-value tr-attr-value"></td>
        </tr>
        <tr>
            <td valign="top" class="right-panel-show-name">Атрибуты</td>
            <td id="right-panel-show-attr" class="right-panel-show-value tr-attr-value"></td>
        </tr>
    </table>
</div>
