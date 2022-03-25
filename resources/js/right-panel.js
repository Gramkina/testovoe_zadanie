$(document).on('click', '.button-add', function () {
    $('.right-panel').css('visibility', 'visible');
});

$(document).on('click', '#close-button', function () {
    $('.right-panel').css('visibility', 'hidden');
    $('.right-panel-show').css('visibility', 'hidden');
    $('.right-panel-update').css('visibility', 'hidden');
});

$(document).on('click', '#add-attr-btn', function(){
    $('#add-attr-btn').before('<table class="attribute"><tr><td><p class="input-name">Название</p></td><td><p class="input-name">Значение</p></td></tr><tr><td width="48%"><input class="small-input" name="DATA-NAME[]"></td><td width="48%"><input class="small-input" name="DATA-VALUE[]"></td><td align="right"><img class="trash-btn" src="/img/icon/trash.svg" alt="trash"></td></tr></table>')
});

let inputs;

$(document).on('click', '.content-table', function () {
    let panel = $('.right-panel-show');
    inputs = $(this).find('input');
    panel.find('form').attr('action', window.location.href + '/' + $(inputs[0]).val());
    panel.find('#article-product').attr('value', $(inputs[0]).val());
    panel.find('.panel-name').text($(inputs[0]).val());
    panel.find('#right-panel-show-article').text($(inputs[0]).val());
    panel.find('#right-panel-show-name').text($(inputs[1]).val());
    panel.find('#right-panel-show-status').text(($(inputs[2]).val() == 'available' ? 'Доступен' : 'Не доступен'));
    let strAttr = '';
    for (let i = 3; i < inputs.length; i++) {
        strAttr += $(inputs[i]).attr('attr-name') + ': ' + $(inputs[i]).attr('attr-value') + '<br>';
    }
    panel.find('#right-panel-show-attr').html(strAttr);
    panel.css('visibility', 'visible');
})

$(document).on('click', '#edit-btn', function () {
    $('.right-panel-update').css('visibility', 'visible');
    $('#right-panel-update-title').text('Редактировать ' + $(inputs[1]).val());
    $('#right-panel-update-article').val($(inputs[0]).val())
    $('#right-panel-update-name').val($(inputs[1]).val())
    $($('#right-panel-update-status').children('option[value='+$(inputs[2]).val()+']')).attr("selected", "selected");
    $('.attribute').remove();
    for (let i = 3; i < inputs.length; i++) {
        $('#add-attr-btn-update-panel').before('<table class="attribute"><tr><td><p class="input-name">Название</p></td><td><p class="input-name">Значение</p></td></tr><tr><td width="48%"><input value="'+$(inputs[i]).attr('attr-name')+'" class="small-input" name="DATA-NAME[]"></td><td width="48%"><input value="'+$(inputs[i]).attr('attr-value')+'" class="small-input" name="DATA-VALUE[]"></td><td align="right"><img class="trash-btn" src="/img/icon/trash.svg" alt="trash"></td></tr></table>')
    }
    $('.right-panel-update').find('form').attr('action', window.location.href + '/' + $(inputs[0]).val());
});

$(document).on('click', '#add-attr-btn-update-panel', function(){
    $('#add-attr-btn-update-panel').before('<table class="attribute"><tr><td><p class="input-name">Название</p></td><td><p class="input-name">Значение</p></td></tr><tr><td width="48%"><input class="small-input" name="DATA-NAME[]"></td><td width="48%"><input class="small-input" name="DATA-VALUE[]"></td><td align="right"><img class="trash-btn" src="/img/icon/trash.svg" alt="trash"></td></tr></table>')
});

$(document).on('click', '.trash-btn', function () {
    $(this).parent().parent().parent().parent().remove();
});
