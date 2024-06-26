<p align="center"><a style="filter: drop-shadow(0px -10px 20px blue) drop-shadow(0px 10px 20px #9004db) drop-shadow(3px 3px 3px black);" href="https://crm.spmnu.kz" target="_blank"><img src="https://crm.spmnu.kz/vendor/moonshine/logo_spmnu_big.png" width="400" alt="SPMNU Logo"></a></p>

# CRM/ERP Система для компании СПМНУ

## Какие задачи она решает:

- CRM модуль:
- - [x] Система прав доступа к рабочим задачам и объектам  
- - [x] Учёт контрагентов и других контактов
- - [x] Ведение рабочих объектов от стадии заявки до коммерческого предложения и договора
- - [ ] Ведение рабочих объектов на стадии выполнения договора 
- - [ ] Генерирование и хранение рабочей и сопроводительной документации 
- - [x] Организация рабочих процессов инструментами постановки задач, и контроля их выполнения


- ERP модуль:
- - [ ] Организация учета складских ресурсов
- - [ ] Организация учета закупок и их последующего движения
- - [ ] Планирование рабочих графиков технических и сервисных бригад 
- - [ ] Диаграммы Ганта по текущим рабочим объектам и ресурсам


- Что еще?
- - [x] Аутентификация через WhatsApp и Telegramm (помимо почты)
- - [x] Уведомления в WhatsApp и Telegramm (помимо почты и пуш-уведомлений)
- - [ ] Обновление рабочей базы с позициями услуг и продуктов партнёров через API и парсер
- - [ ] API для партнёров с актуальными остатками и ценами собственных продуктов
- - [x] Интерфейс на Казахском, Русском и Английском языках
- - [x] PWA (mobile & desktop)

## Как это всё сделано:

- В основе проекта - фреймворк [Laravel](https://laravel.com/) (v.10). [MIT license](https://opensource.org/licenses/MIT).
- - Отвечает за аутентификацию, авторизацию, и простую работу с БД, зависимостями таблиц
- Поверх Laravel используется [Moonshine](https://moonshine-laravel.com/). [MIT license](https://github.com/moonshine-software/moonshine/blob/2.x/LICENSE.md).
- - Он предоставляет набор веб-компонентов для ускоренной разработки меню, таблиц, страниц и элементов форм.
- - Благодаря нему - всё сразу красивое.
- Всё это работает на сервере с Ubuntu 22.04, Nginx, PostgreSQL, PHP 8.3, [Apline.js](https://alpinejs.dev/)

