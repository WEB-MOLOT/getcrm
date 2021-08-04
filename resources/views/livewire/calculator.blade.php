<?php
/**
 * @var bool $hasCalculation
 * @var \App\Models\Dictionaries\Service[]|\Illuminate\Support\Collection $services
 * @var \App\Models\Dictionaries\Platform[]|\Illuminate\Support\Collection $platforms
 * @var \Illuminate\Support\Collection $products
 */
?>
<div>
    <div class="flex">
        <div class="top-block">
            <p>1. Решения и услуги</p>
            <div class="content">
                <form>
                    <input type="text" wire:model="productQuery" placeholder="Поиск по разделу"/>
                    <span></span>
                </form>
                <div class="list">
                    <div class="tags">
                        @foreach($products as $item)
                            <div
                                wire:click="toggleProduct({{ $item['solution_id'] }})"
                                class="tag @if($item['c1']) c1 @endif  @if($item['c2']) c2 @endif"
                                data-text="{{ $item['description'] }}"
                            >
                                {{ $item['name'] }}<a></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="top-block">
            <p>2. Платформы</p>
            <div class="content">
                <form>
                    <input type="text" wire:model="platformQuery" placeholder="Поиск по разделу"/>
                    <span></span>
                </form>
                <div class="list">
                    <ul class="other">
                        @foreach($platforms as $item)
                            <li>
                                <a href="#" data-text="{{ $item['description'] }}"
                                   class="@if($item['c1']) c1 @endif  @if($item['c2']) c1 @endif"
                                   wire:click="togglePlatform({{ $item['id'] }})"
                                >{{ $item['name'] }}s</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="top-block">
            <p>3. Сервисы</p>
            <div class="content">
                <form>
                    <input type="text" wire:model="serviceQuery" placeholder="Поиск по разделу"/>
                    <span></span>
                </form>
                <div class="list">
                    <ul>
                        @foreach($services as $item)
                            <li>
                                <a href="#" data-text="{{ $item['description'] }}"
                                   class="@if($item['c1']) c1 @endif  @if($item['c2']) c1 @endif"
                                   wire:click="toggleServices({{ $item['id'] }})"
                                >{{ $item['name'] }}s</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="top-text">
        <span class="top-text__title">Подсказка</span>
        <span
            class="top-text__text"
            data-default=''
        >
              Наведите на интересующий пункт и получите подсказку.</span
        >
    </div>

    @if($hasCalculation)
        <div class="flex" style="display: none;">
            <div class="pre-table">
                <span class="pre-table__title">Спецификация</span>
                <select>
                    <option>Базовый вариант</option>
                    <option>Базовый вариант</option>
                </select>
                <select>
                    <option>Длительность - 1 год</option>
                    <option>Длительность - 1 год</option>
                </select>
            </div>
            <a class="clear-link">Очистить</a>
        </div>
        <div class="table">
            <div class="table__wrap">
                <div class="table__tabs">
                    <table class="active" data-table="1">
                        <thead id="thead2">
                        <tr>
                            <td>Наименование</td>
                            <td>Стоимость, $</td>
                            <td>Метрика</td>
                            <td>Срок метрики (мес)</td>
                            <td>Цена (US$) в год</td>
                            <td>Кол-во</td>
                            <td>Срок (год)</td>
                            <td>Прайслист, $</td>
                            <td>Скидка</td>
                            <td>Discounted Price, $</td>
                            <td>Тех.поддержка</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($platforms as $platform)
                            @if (! $pickPlatforms->has($platform['id']))
                                @continue
                            @endif
                            <tr class="no_b">
                                <td colspan="2">
                                    {{ $platform['name'] }}
                                    <a class="delete" wire:click="togglePlatform({{ $platform['id'] }})"><span>Удалить платформу</span></a>
                                </td>
                                <td colspan="6"></td>
                                <td>0%</td>
                                <td>0</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($licenses->random(random_int(1, 3)) as $license)
                                <tr class="no_b2">
                                    <td>{{ $license->name }}</td>
                                    <td>{{ $license->price }}</td>
                                    <td>{{ $license->metric_value }}<br/>{{ $license->metric }}</td>
                                    <td>{{ $license->metric_period }}</td>
                                    <td>{{ $license->price }}</td>
                                    <td><input type="text" value="10"/></td>
                                    <td><input type="text" value="1"/></td>
                                    <td>--</td>
                                    <td>0%</td>
                                    <td>0</td>
                                    <td>{{ $license->support ?: 'N/A' }}</td>
                                    <td>
                                        <a class="delete" wire:click="toggleServices({{ $license->id }})"><span>Удалить сервис</span></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table style="display: none;" data-table="2">
                        <thead id="thead2">
                        <tr>
                            <td>Наименование</td>
                            <td>Стоимость, $</td>
                            <td>Метрика</td>
                            <td>Срок метрики (мес)</td>
                            <td>Цена (US$) в год</td>
                            <td>Кол-во</td>
                            <td>Срок (год)</td>
                            <td>Прайслист, $</td>
                            <td>Скидка</td>
                            <td>Discounted Price, $</td>
                            <td>Тех.поддержка</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="no_b">
                            <td colspan="2">
                                Oracle Responsys
                                <a class="delete"><span>Удалить платформу</span></a>
                            </td>
                            <td colspan="6"></td>
                            <td>49%</td>
                            <td>59 670</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="no_b2">
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr class="no_b">
                            <td colspan="2">
                                Oracle Responsys
                                <a class="delete"><span>Удалить платформу</span></a>
                            </td>
                            <td colspan="6"></td>
                            <td>49%</td>
                            <td>59 670</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr class="no_b2">
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr class="no_b">
                            <td colspan="2">
                                Oracle Responsys
                                <a class="delete"><span>Удалить платформу</span></a>
                            </td>
                            <td colspan="6"></td>
                            <td>49%</td>
                            <td>59 670</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="no_b2 bg">
                            <td>
                                Responsys Interaction Cloud Service
                                <div class="small-text">
                                    Рекомендовано к приобритению
                                </div>
                            </td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table style="display: none;" data-table="3">
                        <thead id="thead2">
                        <tr>
                            <td>Наименование</td>
                            <td>Стоимость, $</td>
                            <td>Метрика</td>
                            <td>Срок метрики (мес)</td>
                            <td>Цена (US$) в год</td>
                            <td>Кол-во</td>
                            <td>Срок (год)</td>
                            <td>Прайслист, $</td>
                            <td>Скидка</td>
                            <td>Discounted Price, $</td>
                            <td>Тех.поддержка</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="no_b">
                            <td colspan="2">
                                Oracle Responsys
                                <a class="delete"><span>Удалить платформу</span></a>
                            </td>
                            <td colspan="6"></td>
                            <td>49%</td>
                            <td>59 670</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>

                        <tr class="no_b">
                            <td colspan="2">
                                Oracle Responsys
                                <a class="delete"><span>Удалить платформу</span></a>
                            </td>
                            <td colspan="6"></td>
                            <td>49%</td>
                            <td>59 670</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>

                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        <tr class="no_b2">
                            <td>Responsys Interaction Cloud Service</td>
                            <td>3</td>
                            <td>1000 <br/>коммуниаций</td>
                            <td>12</td>
                            <td>3</td>
                            <td><input type="text" value="35000"/></td>
                            <td><input type="text" value="1"/></td>
                            <td>105 000</td>
                            <td>49%</td>
                            <td>53 550</td>
                            <td>N/A</td>
                            <td>
                                <a class="delete"><span>Удалить сервис</span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="menu" style="display: none;">
                    <a class="active" data-table="1"
                    >Базовый вариант <span>806 000 $</span></a
                    >
                    <a data-table="2">Базовый вариант <span>806 000 $</span></a>
                    <a data-table="3">Базовый вариант <span>806 000 $</span></a>
                    <a class="menu__add">+</a>
                </nav>
            </div>
            <div class="flex" style="display: none;">
                <button class="save-button"><span></span> Сохранить</button>
            </div>
        </div>
        <p class="table2__title" style="display: none;">Покупайте больше - платите меньше</p>
        <div class="table2" style="display: none;">
            <table>
                <thead>
                <tr>
                    <td>Спецификации</td>
                    <td>Длительность</td>
                    <td>Стоимость в год</td>
                    <td>Всего</td>
                    <td>Скидка</td>
                    <td>
                        <span class="up"></span> Инвестиции и выгоды
                        <span class="down"></span>
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Базовый вариант</td>
                    <td>1 год</td>
                    <td>30 000$</td>
                    <td>30 000$</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Базовый вариант</td>
                    <td>1 год</td>
                    <td>30 000$</td>
                    <td>30 000$</td>
                    <td>0</td>
                    <td>
                        <div class="prices">
                            <span>250 000$</span>
                            <span>350 000 $</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Базовый вариант</td>
                    <td>1 год</td>
                    <td>30 000$</td>
                    <td>30 000$</td>
                    <td>0</td>
                    <td>
                        <div class="prices">
                            <span>250 000$</span>
                            <span>350 000 $</span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="flex" style="display: none;">
            <div class="base-block">
                <p>Базовый вариант</p>
                <table>
                    <tr>
                        <td>МОДЕЛЬ ЛИЦЕНЗИРОВАНИЯ</td>
                        <td>СКИДКИ</td>
                        <td>ПОДДЕРЖКА</td>
                        <td>ЛИЦЕНЗИИ/SAAS</td>
                    </tr>
                    <tr>
                        <td>ON-PREMISE LICENSES</td>
                        <td>61%</td>
                        <td>114114</td>
                        <td>518 700</td>
                    </tr>
                    <tr>
                        <td>ON-PREMISE LICENSES</td>
                        <td>61%</td>
                        <td>114114</td>
                        <td>518 700</td>
                    </tr>
                    <tr>
                        <td>ON-PREMISE LICENSES</td>
                        <td>61%</td>
                        <td>114114</td>
                        <td>518 700</td>
                    </tr>
                    <tr>
                        <td>ИТОГО:</td>
                        <td>44%</td>
                        <td>164 274</td>
                        <td>864 274</td>
                    </tr>
                </table>
            </div>
            <div class="att-block">
                <span>Важно</span>
                <p>
                    1. Продажа Siebel CRM Base требует получение Oracle CX Cloud
                    First approval перед продажей новому клиенту
                </p>
                <p>
                    2. Скидки носят ориентировочный характер и могут отличаться в
                    большую сторону после согласования с вендором
                </p>
                <p>3. Цены указаны без НДС</p>
            </div>
        </div>
        <div class="buttons" style="display: none;">
            <button class="modal-download-prices__btn">
                <img src="img/btn1.svg"/>Выгрузить
            </button>
            <button class="modal-connection-prices__btn">
                <img src="img/btn2.svg"/>Связатьcя с менеджером
            </button>
        </div>
    @endif
</div>
