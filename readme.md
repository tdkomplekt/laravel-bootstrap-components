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
    - [Alert](#Alert)
    - [Badge](#Badge)
    - [Button](#Button)
    - [Card](#Card)
    - [Check](#Check)
    - [Close](#Close)
    - [Datalist](#Datalist)
    - [Desc](#Desc)
    - [Dropdown](#Dropdown)
    - [Form](#Form)
    - [Icon](#Icon)
    - [Img](#Img)
    - [Input](#Input)
    - [Input-addon](#Input-addon)
    - [Input-group](#Input-group)
    - [Link](#Link)
    - [Nav-dropdown](#Nav-dropdown)
    - [Nav-link](#Nav-link)
    - [Pagination](#Pagination)
    - [Progress](#Progress)
    - [Radio](#Radio)
    - [Select](#Select)
    - [Spinner](#Spinner)
    - [Textarea](#Textarea)

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
<!-- Logo -->
<x-bs::link url="{{ url('/') }}" class="logo">
    <x-bs::img
        asset="{{ asset('assets/images/logo.png') }}"
        width="37" height="37"
        class="logo__image"
        alt="{{ __('Logo') }}"
    />
</x-bs::link>
```

«Спиннер» стандартного черного цвета (для смены цвета используем аттрибут color):
```html
<!-- Spinner -->
<x-bs::spinner />
<x-bs::spinner color="success" />
```

## Компоненты

### Alert

Оповещение:

```html
<x-bs::alert
    :label="__('It was successful!')"
    color="info"
    dismissible
/>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка для отображения, также можно поместить в `slot`
- `color`: Bootstrap цвет `primary`, `danger`, `success`
- `dismissible`: добавить кнопку закрытия
---

### Badge

Бейдж / Значок:

```html
<x-bs::badge
    :label="__('Notification')"
    color="warning"
/>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка для отображения, также можно поместить в `slot`
- `color`: Bootstrap цвет `primary`, `danger`, `success`
- `rounded`: круглый стиль
---

### Button

Кнопка:

```html
<x-bs::button
    :label="__('Login')"
    color="primary"
    size="lg"
    route="login"
/>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка для отображения, также можно поместить в `slot`
- `color`: Bootstrap цвет `primary`, `danger`, `success`
- `size`: размер `sm`, `lg`
- `type`: тип `button`, `submit`
- `route`: устанавливает в `href` путь
- `url`: устанавливает в `href` ссылку
- `href`: устанавливает в `href` что-то свое (#)
- `dismiss`: аттр. `data-bs-dismiss` значение `alert`, `modal`
- `toggle`: аттр. `data-bs-toggle` значение `collapse`, `dropdown`
- `click`: Livewire действие на клик
- `confirm`: запрашивает у пользователя подтверждение при нажатии
---

### Card

Карточка:

```html
<x-bs::card
    :label="__('This is some text within a card body.')"
    title="{{ __('My first card') }}"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения, также можно поместить в `slot`
- `border`: цвет обводки `primary`, `danger`, `success`
- `title`: заголовок
- `subtitle`: подзаголовок
- `image`: ссылка на изображение
---

### Check

Чекбокс:

```html
<x-bs::check
    :label="__('Agree')"
    :checkLabel="__('I agree to the TOS')"
    :help="__('Please accept the TOS.')"
    switch
    model="agree"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `checkLabel`: метка для отображения рядом с вводом
- `help`: вспомогательная метка для отображения под вводом
- `switch`: оформить как переключатель
- `model`: Livewire model key
- `lazy`: привязать данные Livewire при изменении
---

### Close

Кнопка закрытия:

```html
<x-bs::close 
    dismiss="modal"
/>
```

#### Доступные аттрибуты и слоты

- `color`: Bootstrap цвет иконки `white`
- `dismiss`: аттр. `data-bs-dismiss` значение `alert`, `modal`
---

### Color

Выбор цвета:

```html
<x-bs::color
    :label="__('Favorite Color')"
    :prepend="__('I like')"
    :append="_('the most.')"
    :help="__('Please pick a color.')"
    model="favorite_color"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `prepend`: аддон для отображения перед вводом, можно использовать через именованный слот
- `append`: аддон для отображения после ввода, можно использовать через именованный слот
- `size`: размер `sm`, `lg`
- `help`: вспомогательная метка для отображения под вводом
- `model`: Livewire model key
- `lazy`: привязать данные Livewire при изменении
---

### Datalist

Список данных:

```html
<x-bs::datalist
    :label="__('City Name')"
    :options="['Toronto', 'Minsk', 'Las Vegas']"
    :prepend="__('I live in')"
    :append="_('right now.')"
    :help="__('Please enter your city.')"
    model="city_name"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `options`: массив опций ввода, например. `['Red', 'Blue']`
- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `prepend`: аддон для отображения перед вводом, можно использовать через именованный слот
- `append`: аддон для отображения после ввода, можно использовать через именованный слот
- `size`: размер `sm`, `lg`
- `help`: вспомогательная метка для отображения под вводом
- `model`: Livewire model key
- `debounce`: время в мс для привязки данных Livewire к клавиатуре, например. `500`
- `lazy`: привязать данные Livewire при изменении
---

### Desc

Список описания:

```html
<x-bs::desc 
    :term="__('ID')"
    :details="$user->id"
/>
```

#### Доступные аттрибуты и слоты

- `tern`: термин списка описаний
- `details`: детали списка описаний также можно поместить в `slot`
- `date`: дата для использования вместо подробностей (для использования с [Laravel Timezone](https://github.com/jamesmills/laravel-timezone))
---

### Dropdown

Выпадающий список:

```html
<x-bs::dropdown
    :label="__('Filter')"
    color="danger"
>
    <x-bs::dropdown-item 
        :label="__('By Name')"
        click="$set('filter', 'name')"
    />
    <x-bs::dropdown-item
        :label="__('By Age')"
        click="$set('filter', 'age')"
    />
</x-bs::dropdown>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка раскрывающегося списка для отображения, может использоваться через именованный слот
- `items`: выпадающие элементы, также можно поместить в `slot`
- `color`: цвет `primary`, `danger`, `success`
- `size`: размер `sm`, `lg`
- `dropdown_class`: классы для родительского dropdown
- `dropdown_menu_class`: классы для меню dropdown
- `icon_toggle`: показывать стрелочку
---

### Dropdown Item

Элемент выпадающего списка:

```html
<x-bs::dropdown-item
    :label="__('Login')"
    route="login"
/>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка раскрывающегося списка для отображения, может использоваться через именованный слот
- `route`: устанавливает в `href` путь
- `url`: устанавливает в `href` ссылку
- `href`: устанавливает в `href` что-то свое (#)
---

### Form

Форма (с полями):

```html
<x-bs::form submit="login">
    <x-bs::input :label="__('Email')" type="email" model="email"/>
    <x-bs::input :label="__('Password')" type="password" model="password"/>
    <x-bs::button :label="__('Login')" type="submit"/>
</x-bs::form>
```

#### Доступные аттрибуты и слоты

- `route`: устанавливает в `href` путь
- `url`: устанавливает в `href` ссылку
- `href`: устанавливает в `href` что-то свое (#)
- `submit`: Действие Livewire при отправке
---

### Icon

Font Awesome иконка:

```html
<x-bs::icon
    name="bars"
/>
```

#### Доступные аттрибуты и слоты

- `name`: Font Awesome название иконки `cog`, `rocket` и т.д.
- `style`: Font Awesome стиль иконки `solid`, `regular`, `brands`
- `size`: Font Awesome размер иконки `sm`, `lg`, `3x`, `5x`
- `color`: Bootstrap цвет `primary`, `danger`, `success`
- `spin`: устанавливает для иконки анимацию вращения
- `pulse`: устанавливает для иконки анимацию пульсации
- `beat`: устанавливает для иконки анимацию бита
- `flip`: устанавливает для иконки анимацию переворота
- `shake`: устанавливает для иконки анимацию тряски
- `rotate_90`: поворачивает иконку на 90° (по часовой)
- `rotate_180`: поворачивает иконку на 180° (по часовой)
- `rotate_270`: поворачивает иконку на 270° (по часовой)
---

### Img

Изображение:

```html
<x-bs::img
        asset="images/logo.png"
        height="24"
        alt="{{ __('Company logo') }}"
        rounded
/>
```

#### Доступные аттрибуты и слоты

- `asset`: устанавливает в `src` ссылку/содержимое
- `src`: устанавливает в `src`
- `fluid`: устанавливает изображение [полной ширины](https://getbootstrap.com/docs/5.0/content/images/#responsive-images)
- `thumbnail`: устанавливает для изображения [стиль миниатюр](https://getbootstrap.com/docs/5.0/content/images/#image-thumbnails)
- `rounded`: устанавливает изображение с [закругленными углами](https://getbootstrap.com/docs/5.0/content/images/#aligning-images)
---

### Input

Поле ввода:

```html
<x-bs::input
    :label="__('Email Address')"
    type="email"
    :help="__('Please enter your email.')"
    model="email_address"
>
    <x-slot name="prepend">
        <i class="fa fa-envelope"></i>
    </x-slot>
</x-bs::input>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `type`: тип поля `text`, `email`
- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `prepend`: аддон для отображения перед вводом, можно использовать через именованный слот
- `append`: аддон для отображения после ввода, можно использовать через именованный слот
- `size`: размер `sm`, `lg`
- `help`: вспомогательная метка для отображения под вводом
- `model`: Livewire model key
- `debounce`: время в мс для привязки данных Livewire к клавиатуре, например. `500`
- `lazy`: привязать данные Livewire при изменении
---

### Link

Ссылка:

```html
<x-bs::link
    :label="__('Users')"
    route="users"
/>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка для отображения, также можно поместить в `slot`
- `route`: устанавливает в `href` путь
- `url`: устанавливает в `href` ссылку
- `href`: устанавливает в `href` что-то свое (#)
---

### Nav Dropdown

Выпадающий список в навигации:

```html
<x-bs::nav-dropdown
    :label="Auth::user()->name"
>
    <x-bs::dropdown-item 
        :label="__('Update Profile')"
        click="$emit('showModal', 'profile.update')"
    />
    <x-bs::dropdown-item
        :label="__('Logout')"
        click="logout"
    />
</x-bs::nav-dropdown>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метка раскрывающегося списка для отображения, может использоваться через именованный слот
- `items`: выпадающие элементы, также можно поместить в `slot`

---

### Nav Link

Ссылка в навигации:

```html
<x-bs::nav-link
    :label="__('Users')"
    route="users"
/>
```

#### Доступные аттрибуты и слоты

- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `label`: метку для отображения, также можно поместить в `slot`
- `route`: устанавливает в `href` путь
- `url`: устанавливает в `href` ссылку
- `href`: устанавливает в `href` что-то свое (#)
---

### Pagination

Адаптивные ссылки страниц:

```html
<x-bs::pagination
    :links="App\Models\User::paginate()"
    justify="center"
/>
```

#### Доступные аттрибуты и слоты
- `links`: модели Laravel с постраничной разбивкой
- `justify`: Bootstrap положение на странице `start`, `end`
---

### Progress

Полоса прогресса:

```html
<x-bs::progress
    :label="__('25% Complete')"
    percent="25"
    color="success"
    height="10"
    animated
    striped
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения внутри индикатора выполнения
- `percent`: процент индикатора выполнения
- `color`: Bootstrap цвет `primary`, `danger`, `success`
- `height`: высота индикатора выполнения в пикселях
- `animated`: анимировать индикатор выполнения
- `striped`: используйте полосатый стиль для индикатора выполнения
---

### Radio

Радио выбор:

```html
<x-bs::radio
    :label="__('Gender')"
    :options="['Male', 'Female']"
    :help="__('Please select your gender.')"
    switch
    model="gender"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `options`: массив выбора `['Red', 'Blue']`
- `help`: вспомогательная метка для отображения под вводом
- `switch`: устанавливает ввод для использования стиля переключения
- `model`: Livewire model key
- `lazy`: привязать данные Livewire при изменении
---

### Select

Выпадающий список:

```html
<x-bs::select
    :label="__('Your Country')"
    :placeholder="__('Select Country')"
    :options="['Australia', 'Canada', 'Belarus']"
    :prepend="__('I live in')"
    :append="_('right now.')"
    :help="__('Please select your country.')"
    model="your_country"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `placeholder`: заполнитель для пустого первого варианта
- `options`: массив выбора `['Red', 'Blue']`
- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `prepend`: аддон для отображения перед вводом, можно использовать через именованный слот
- `append`: аддон для отображения после ввода, можно использовать через именованный слот
- `size`: размер `sm`, `lg`
- `help`: вспомогательная метка для отображения под вводом
- `model`: Livewire model key
- `lazy`: привязать данные Livewire при изменении
---

### Spinner

Спиннер (индикатор загрузки):

```html
<x-bs::spinner 
    size="sm"
/>
```

#### Доступные аттрибуты и слоты

- `spinner`: тип иконки `border`, `grow`
- `color`: Bootstrap цвет `primary`, `danger`, `success`
- `text`: текст
- `size`: размер `sm`, `lg`
---

### Textarea

Текстовая область:

```html
<x-bs::textarea
    :label="__('Biography')"
    rows="5"
    :help="__('Please tell us about yourself.')"
    model="biography"
/>
```

#### Доступные аттрибуты и слоты

- `label`: метка для отображения над вводом
- `icon`: Font Awesome название иконки `cog`, `envelope` и т.д.
- `prepend`: аддон для отображения перед вводом, можно использовать через именованный слот
- `append`: аддон для отображения после ввода, можно использовать через именованный слот
- `size`: размер `sm`, `lg`
- `help`: вспомогательная метка для отображения под вводом
- `model`: Livewire model key
- `lazy`: привязать данные Livewire при изменении
- `debounce`: время в мс для привязки данных Livewire к клавиатуре, например. `500`
---

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