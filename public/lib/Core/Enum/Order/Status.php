<?php

namespace Main\Core\Enum\Order;

Enum Status:string {
    case CREATED = 'Создан';
    case HANDLE = 'Обрабатывается';
    case IN_WORK = 'В работе';
    case READY = 'Готов';
}