document.addEventListener('DOMContentLoaded', function() {
  var container = document.querySelector('.task-container');
  var text = document.querySelector('.labeltask-container');
  var readMoreButton = document.querySelector('.read-more');

  // Проверяем, выходит ли текст за границы контейнера
  if (text.offsetHeight > container.offsetHeight) {
    readMoreButton.style.display = 'block'; // Показываем кнопку, если текст слишком длинный
  }

  // Функция для расширения контейнера
  function expandContainer() {
    container.style.height = 'auto'; // Позволяет контейнеру расширяться
    readMoreButton.style.display = 'none'; // Скрываем кнопку
  }

  // При клике на кнопку вызываем функцию расширения
  readMoreButton.addEventListener('click', expandContainer);
});