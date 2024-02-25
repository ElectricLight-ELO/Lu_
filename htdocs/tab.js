// script.js
function showContent(contentId) {
    // Скрываем все контентные блоки
    var contents = document.getElementsByClassName('tab-content');
    for (var i =  0; i < contents.length; i++) {
        contents[i].style.display = 'none';
    }

    // Показываем выбранный контентный блок
    document.getElementById(contentId).style.display = 'block';
}
