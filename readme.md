# Laravel Bootstrap Components

Этот пакет содержит набор полезных [компонентов Bootstrap](https://getbootstrap.com/docs/5.0/components) Laravel Blade. 
Он продвигает принципы DRY и позволяет вам сохранять ваш HTML красивым и чистым. 
Компоненты включают оповещения, значки, кнопки, формы ввода (с автоматической обратной связью об ошибках), раскрывающиеся списки, навигацию, нумерацию страниц (адаптивную) и многое другое. 
Компоненты поставляются со встроенной интеграцией [Laravel Livewire](https://laravel-livewire.com/), поэтому вы можете использовать их с Livewire или без него.

## Документация

- [Требования](#Требования)
- [Установка](#Установка)
- [Примеры использования](#Примеры)
- [Компоненты](#Компоненты)
    - [Icon](#Icon)
    - [Link](#Link)
    - [Img](#Img)

## Требования
- php 8
- Laravel 10
- Сначала необходимо установить Bootstrap 5 через [веб-пакет laravel/ui](https://github.com/laravel/ui)
- Для использования значков должен быть установлен [Font Awesome v6](https://fontawesome.com/start) или ниже.

## Установка

```console
composer require tdkomplekt/laravel-bootstrap-components
```

## Примеры

Ссылка с изображением:
```html
<!-- Brand Logo -->
<x-bs::link
    url="{{ url('/') }}"
    class="logo navbar-brand">
    <x-bs::image
        asset="{{ asset('assets/images/logo.png') }}"
        width="37" height="37"
        class="logo__image align-top"
        alt="{{ __('Logo').' '.config('app.name') }}"
    />
</x-bs::link>
```

## Компоненты

### Icon

Font Awesome иконка

```html
<x-bs::icon
    name="bars"
/>
```

#### Доступный реквизит и слоты

- `name`: Font Awesome название иконки `cog`, `rocket` и т.д.
- `style`: Font Awesome стиль иконки `solid`, `regular`, `brands`
- `size`: Font Awesome размер иконки `sm`, `lg`, `3x`, `5x`
- `color`: Bootstrap цвет иконки `primary`, `danger`, `success`
- `spin`: устанавливает для иконки анимацию вращения
- `pulse`: устанавливает для иконки анимацию пульсации
- `beat`: устанавливает для иконки анимацию бита
- `flip`: устанавливает для иконки анимацию переворота
- `shake`: устанавливает для иконки анимацию тряски
- `rotate_90`: поворачивает иконку на 90° (по часовой)
- `rotate_180`: поворачивает иконку на 180° (по часовой)
- `rotate_270`: поворачивает иконку на 270° (по часовой)

---

### Link

Ссылка

```html
<x-bs::link
    :label="__('Users')"
    route="users"
/>
```

#### Доступный реквизит и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка для отображения, также можно поместить в `slot`
- `route`: устанавливает в `href` путь
- `url`: устанавливает в `href` ссылку
- `href`: устанавливает в `href` что-то свое (#)

---

### Img

Изображение

```html
<x-bs::img
        asset="images/logo.png"
        height="24"
        alt="{{ __('Company logo') }}"
        rounded
/>
```

#### Доступный реквизит и слоты

- `asset`: устанавливает в `src` ссылку/содержимое
- `src`: устанавливает в `src`
- `fluid`: устанавливает изображение [полной ширины](https://getbootstrap.com/docs/5.0/content/images/#responsive-images)
- `thumbnail`: устанавливает для изображения [стиль миниатюр](https://getbootstrap.com/docs/5.0/content/images/#image-thumbnails)
- `rounded`: устанавливает изображение с [закругленными углами](https://getbootstrap.com/docs/5.0/content/images/#aligning-images)


## Пользовательские изменения

### View
Используйте свои собственные представления, опубликовав представления пакета:

```console
php artisan vendor:publish --tag=laravel-bootstrap-components:views
```

Теперь можете отредактировать файлы внутри `resources/views/vendor/bs`. 
Пакет будет использовать эти файлы для рендеринга компонентов.

### Icons
Используйте свои собственные значки шрифтов, опубликовав конфигурацию пакета:

```console
php artisan vendor:publish --tag=laravel-bootstrap-components:config
```

Теперь можете отредактировать значение `icon_class_prefix` 
внутри `config/laravel-bootstrap-components.php`. 
Пакет будет использовать этот класс для рендеринга значков.