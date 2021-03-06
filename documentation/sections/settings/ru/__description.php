<h2 class="item1">Настройки скрипта</h2>

<h5>
    Скрипт поддерживает следующие опции для настройки
</h5>

<h3>
    Общие настройки
</h3>

<p>
    Общие настройки скрипта определяются в объекте options при инициализации.
</p>

<h5>screenAliases</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>Object</dd>
</dl>
<dl class="inline-term">
    <dt>Значение по-умолчанию</dt>
    <dd>{ 0: '-', 480: '-xs-', 768: '-sm-', 992: '-md-', 1200: '-lg-', 1600: '-xl-', 1920: '-xxl-'}</dd>
</dl>

<p>
    Объект, содержащий алиасы имен для создания адаптивных настроек слоев паралакса. Например, data-md-speed и т.д.
</p>

<h3>
    Настройки сцены
</h3>

<p>
    Скрипт также поддерживает дополнительную настройку каждой сцены прямо в HTML с помощью data-аттрибутов
</p>

<h5>data-on, data-xs-on, data-sm-on, data-md-on, data-lg-on, data-xl-on, data-xxl-on</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>boolean</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>true, false</dd>
</dl>

<p>
    Определяет тип слоя параллакса. Если определен как media, будет производиться расчет размера слоя относительно высоты секции
    параллакса, если html - размер определяется контентом.
</p>

<h3>
    Настройки слоев
</h3>

<p>
    Скрипт также поддерживает дополнительную настройку каждого из слоев. Настройка каждого из слоев выполняется в HTML разметке
    слоя с помощью data-атрибут API.
</p>

<h5>data-type</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>String</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>media, html, custom</dd>
</dl>

<p>
    Определяет тип слоя параллакса. Если определен как media, будет производиться расчет размера слоя относительно высоты секции
    параллакса, если html - размер определяется контентом, custom - определяется вашими CSS стилями.
</p>

<h5>data-url</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>String</dd>
</dl>

<p>
    Определяет путь к изображению для отоборажения в качестве бекграунда слоя.
</p>

<h5>data-speed, data-xs-speed, data-sm-speed, data-md-speed, data-lg-speed</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>Number</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>0 ~ 2</dd>
</dl>

<p>
    Определяет скорость движения параллакса относительно движения скроллбара. Для большего понимания, если
    значение скорости равно 1 - получаем эмуляцию css свойства background-attachment: fixed.
</p>

<h5>data-fade</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>Boolean</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>true, false</dd>
</dl>

<p>
    Если установлен в true, слой будет постепенно проявляться из полной прозрачности в полную непрозрачность
    в зависимости от позиции скролла слоя.
</p>

<h5>data-blur</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>Boolean</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>true, false</dd>
</dl>

<p>
    Если определен как true включает размытие изображения в случае, когда его размер слишком маленький
    для качественного отображения в секции параллакса.
</p>

<h5>data-direction</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>String</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>inverse, normal</dd>
</dl>

<p>
    Определяет направление движения параллакса. Если определен, как normal - параллакс будет двигаться параллельно
    скроллу, если inverse - в противоположном направлении.
</p>

<h5>data-offset, data-xs-offset, data-sm-offset, data-md-offset, data-lg-offset</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>Integer</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>0</dd>
</dl>

<p>
    Указывает дополнительный офсет для слоя параллакса на соответствующем разрешении.
</p>


<h5>data-agent</h5>
<dl class="inline-term">
    <dt>Тип</dt>
    <dd>Selector</dd>
</dl>
<dl class="inline-term">
    <dt>Значение</dt>
    <dd>document</dd>
</dl>

<p>
    Указывает на элемент, относительно которого будет выполняться позиционирование слоев параллакса. По-умолчанию - объект Document.
</p>


