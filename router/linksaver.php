<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/api/linksaver', function (Request $request, Response $response, $args) {
    $items = [
        [
            'catalog_id' => 1012,
            'id' => 1,
            'code' => 'L1743',
            'title' => 'Автомобиль ВАЗ 2102 1999',
            'title_long' => 'Автомобиль ВАЗ 2102 1999 года производства 95 лс',
            'title_short' => 'ВАЗ 21022 1999',
            'decription' => 'Автомобиль как автомобиль для езды и тд',
            'purpose' => 'Просто так',
            'subdivision' => null,
            'competition_name' => null,
            'vendor' => 'HUAWEI - HUAWEI',
            'country' => 'Афганистан',
            'bom_code' => '548sad4558',
            'model' => '2102 99',
            'item_type' => 'Товар',
            'material_group' => '73001 - Вспомогательное технологическое оборудование',
            'item_unit' => 'шт',
            'sap_code' => '1929812',
            'amount' => '1',
            'delivery_time' => '30',
            'is_winding' => 'Нет',
            'weight' => 1300,
            'width' => 127,
            'length' =>  150,
            'height' => 180,
            'volume' => null,
            'price' => 10000.00,
            'currency' => 'RUB (P)',
            'tax' => null,
            'license_right' => null
        ],
        [
            'catalog_id' => 1012,
            'id' => 2,
            'code' => 'L1743',
            'title' => 'Автомобиль ВАЗ 2102 1999',
            'title_long' => 'Автомобиль ВАЗ 2102 1999 года производства 95 лс',
            'title_short' => 'ВАЗ 21022 1999',
            'decription' => 'Автомобиль как автомобиль для езды и тд',
            'purpose' => 'Просто так',
            'subdivision' => null,
            'competition_name' => null,
            'vendor' => 'HUAWEI - HUAWEI',
            'country' => 'Афганистан',
            'bom_code' => '548sad4558',
            'model' => '2102 99',
            'item_type' => 'Товар',
            'material_group' => '73001 - Вспомогательное технологическое оборудование',
            'item_unit' => 'шт',
            'sap_code' => '1929812',
            'amount' => '1',
            'delivery_time' => '30',
            'is_winding' => 'Нет',
            'weight' => 1300,
            'width' => 127,
            'length' =>  150,
            'height' => 180,
            'volume' => null,
            'price' => 10000.00,
            'currency' => 'RUB (P)',
            'tax' => null,
            'license_right' => null
        ],
        [
            'catalog_id' => 1012,
            'id' => 3,
            'code' => 'L1743',
            'title' => 'Кабель трёхслойный',
            'title_long' => 'Кабель трёхслойный 1999 года производства',
            'title_short' => '123456 1999',
            'decription' => 'Кабель трёхслойный 1999 года производства',
            'purpose' => 'Просто так',
            'subdivision' => null,
            'competition_name' => null,
            'vendor' => 'HUAWEI - HUAWEI',
            'country' => 'Афганистан',
            'bom_code' => '548sad4558',
            'model' => '789',
            'item_type' => 'Товар',
            'material_group' => '73001 - Вспомогательное технологическое оборудование',
            'item_unit' => 'м',
            'sap_code' => '1929812',
            'amount' => '1',
            'delivery_time' => '30',
            'is_winding' => 'Да',
            'weight' => 0.12,
            'width' => null,
            'length' =>  null,
            'height' => null,
            'volume' => 180,
            'price' => 300.00,
            'currency' => 'RUB (P)',
            'tax' => null,
            'license_right' => null
        ],
    ];
    $softs = [
        [
            'catalog_id' => 1012,
            'id' => 4,
            'code' => 'L1743',
            'title' => 'ПО для панели управления материалов',
            'title_long' => 'ПО для панели управления материалов 2021 года производства',
            'title_short' => 'ВАЗ 21022 1999',
            'decription' => 'ПО для панели управления материалов 2021 года производства',
            'purpose' => 'Просто так',
            'subdivision' => 'Что-то там',
            'competition_name' => 'Кто Что Где Когда',
            'vendor' => 'HUAWEI - HUAWEI',
            'country' => null,
            'bom_code' => '548sad4558',
            'model' => '2102 99',
            'item_type' => 'Софт',
            'material_group' => '73001 - Вспомогательное технологическое оборудование',
            'item_unit' => null,
            'sap_code' => '1929812',
            'amount' => '1',
            'delivery_time' => '30',
            'is_winding' => null,
            'weight' => null,
            'width' => null,
            'length' =>  null,
            'height' => null,
            'volume' => null,
            'price' => 30000.00,
            'currency' => 'RUB (P)',
            'tax' => 'С НДС',
            'license_right' => 'Исключительные'
        ]
    ];
    $services = [
        [
            'catalog_id' => 1012,
            'id' => 5,
            'code' => 'L1743',
            'title' => 'Установка программы на панель',
            'title_long' => 'Установка программы на панель производства 95 лс',
            'title_short' => 'ВАЗ 21022 1999',
            'decription' => 'Установка программы на панель для езды и тд',
            'purpose' => 'Просто так',
            'subdivision' => null,
            'competition_name' => null,
            'vendor' => 'HUAWEI - HUAWEI',
            'country' => null,
            'bom_code' => '548sad4558',
            'model' => '2102 99',
            'item_type' => 'Услуга',
            'material_group' => '73001 - Вспомогательное технологическое оборудование',
            'item_unit' => null,
            'sap_code' => '1929812',
            'amount' => '1',
            'delivery_time' => '30',
            'is_winding' => null,
            'weight' => null,
            'width' => null,
            'length' =>  null,
            'height' => null,
            'volume' => null,
            'price' => 10000.00,
            'currency' => 'RUB (P)',
            'tax' => null,
            'license_right' => null
        ]
    ];
    $vendors = ["HUAWEI - HUAWEI", "ERICSSON - ERICSSON", "A1 TELEKOM - A1 TELEKOM AUSTRIA GROUP", "A1-SYSTEMS - A1 SYSTEMS", "A10 - A10 NETWORKS INC.", "ABACUS - ABACUS GLOBAL", "ABBYY - ABBYY", "ABIQUO - ABIQUO", "ACCELERITE - ACCELERITE", "ACCORDTEC - ACCORDTEC", "ACESOLUTIO - ACE SOLUTIONS", "ACME - ACME CLEANTECH SOLUTIONS PVT. LTD.", "ACS - ACS", "ACTIVESOFT - АКТИВ СОФТ"];
    $countries = ["Афганистан", "Аландские острова", "Албания", "Алжир", "Американское Самоа", "Андорра", "Ангола", "Ангилья", "Антарктида", "Антигуа и Барбуда", "Аргентина", "Армения", "Аруба", "Австралия", "Австрия", "Азербайджан", "Багамские острова", "Бахрейн", "Бангладеш", "Барбадос", "Беларусь", "Бельгия", "Белиз", "Бенин", "Бермудские острова", "Бутан", "Боливия", "Босния и Герцеговина", "Ботсвана", "Остров Буве", "Бразилия", "Британская территория в Индийском Океане", "Бруней-Даруссалам", "Болгария", "Буркина-Фасо", "Бурунди", "Камбоджа", "Камерун", "Канада", "Кабо-Верде", "Каймановы острова", "Центральноафриканская Республика", "Чад", "Чили", "Китай", "Остров Рождества", "Кокосовые острова (Килинг) Острова", "Колумбия", "Коморские Острова", "Конго", "Конго Демократическая Республика", "Острова Кука", "Коста-Рика", "Кот-Д'Ивуар", "Хорватия", "Куба", "Кипр", "Чешская Республика", "Дания", "Джибути", "Доминика", "Доминиканская Республика", "Эквадор", "Египет", "Сальвадор", "Экваториальная Гвинея", "Эритрея", "Эстония", "Эфиопия", "Фолклендские (Мальвинские) острова", "Фарерские Острова", "Фиджи", "Финляндия", "Франция", "Французская Гвиана", "Французская Полинезия", "Французские Южные территории", "Габон", "Гамбия", "Грузия", "Германия", "Гана", "Гибралтар", "Греция", "Гренландия", "Гренада", "Гваделупа", "Гуам", "Гватемала", "Гернси", "Гвинея", "Гвинея-Бисау", "Гайана", "Гаити", "Остров Херд и острова Макдональда", "Святой Престол (Ватикан)", "Гондурас", "Гонконг", "Венгрия", "Исландия", "Индия", "Индонезия", "Иран Исламская Республика", "Ирак", "Ирландия", "Остров Мэн", "Израиль", "Италия", "Ямайка", "Япония", "Джерси", "Иордания", "Казахстан", "Кения", "Кирибати"];
    $item_types = ["Товар", "Софт", "Услуга"];
    $item_units = ["шт", "м"];
    $material_groups = ["71021 - Здания сборно-контейнерные", "72200 - Башни, мачты метал.", "72201 - Ограждения, заборы металлические", "72202 - Обор. сигнального освещения мачт", "72203 - Контейнеры аппаратных", "72206 - Киоски", "72209 - Башни, мачты ж/б", "73000 - Стойка унифицированная", "73001 - Вспомогательное технологическое оборудование", "73101 - Коммутатор блок"];
    $result = [
        'data' => [
            'items' => $items,
            'softs' => $softs,
            'services' => $services
        ],
        'columns' => [
            'vendors' => $vendors,
            'countries' => $countries,
            'item_types' => $item_types,
            'item_units' => $item_units,
            'material_groups' => $material_groups
        ],
        'statuses' => [
            [
                'by' => 'Иванов Иван Иванович',
                'title' => 'Создан каталог',
                'datetime' => '12:20:20 23/08/2022',
                'code' => '100',
                'action' => 'Создал каталог'
            ],
            [
                'by' => 'Иванов Иван Иванович',
                'title' => 'Обогащён номером ОЗМ',
                'datetime' => '10:20:33 24/08/2022',
                'code' => '200',
                'action' => 'Дополнен SAP кодами'
            ],
            [
                'by' => 'Иванов Иван Иванович',
                'title' => 'Обогащён данными от поставщика',
                'datetime' => '15:50:23 25/08/2022',
                'code' => '300',
                'action' => 'Дополнен данными'
            ],
            [
                'by' => 'Иванов Иван Иванович',
                'title' => 'Ожидает рассмотрения НСИ',
                'datetime' => '14:40:54 27/08/2022',
                'code' => '400',
                'action' => 'Ожидает рассмотрения'
            ],
            [
                'by' => 'Иванов Иван Иванович',
                'title' => 'Рассмотрение НСИ в процессе',
                'datetime' => '11:11:43 28/08/2022',
                'code' => '500',
                'action' => 'В процессе рассмотрения'
            ]
        ],
        'comments' => [
            [
                'by' => '',
                'to' => '',
                'img' => '',
                'message' => '',
                'datetime' => ''
            ],
            [
                'by' => '',
                'to' => '',
                'img' => '',
                'message' => '',
                'datetime' => ''
            ],
            [
                'by' => '',
                'to' => '',
                'img' => '',
                'message' => '',
                'datetime' => ''
            ]
        ],
        'details' => [
            'title' => '',
            'by' => '',
            'datetime' => '',
            'status' => '',
            'description' => '',

        ]
    ];
    $response->getBody()->write(json_encode($result));
    return $response;
});

$app->post('/linksaver/create', function (Request $request, Response $response, $args) {
});

$app->put('/linksaver/update/{id}', function (Request $request, Response $response, $args) {
});

$app->delete('/linksaver/delete/{id}', function (Request $request, Response $response, $args) {
});
