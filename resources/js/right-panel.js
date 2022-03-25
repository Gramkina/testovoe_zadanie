$(document).on('click', '.button-add', function () {
    $('.right-panel').css('visibility', 'visible');
});
$(document).on('click', '#close-button', function () {
    $('.right-panel').css('visibility', 'hidden');
});
$(document).on('click', '#add-attr-btn', function(){
    $('#add-attr-btn').before('<table class="attribute"><tr><td><p class="input-name">Название</p></td><td><p class="input-name">Значение</p></td></tr><tr><td width="48%"><input class="small-input" name="DATA-NAME[]"></td><td width="48%"><input class="small-input" name="DATA-VALUE[]"></td><td align="right"><img class="trash-btn" src="/img/icon/trash.svg" alt="trash"></td></tr></table>')
});
