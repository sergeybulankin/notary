## Первый взгляд на работу с нотариусом

- composer install
- npm install
- php artisan migrate
- php artisan db:seed --class=DatabaseSeeder


###Потенциальный TODO-лист улучшений:
- Исправить нарушение принципа единственной ответственности в контроллере DocumentUserController
- Вынести слой добавления документа во vue-файле в отдельный экспортируемый файл
- Удалять option "Выберите документ" при onChange
- OrderComponent декомпозировать
- Перейти на version js было бы приятной особенностью
