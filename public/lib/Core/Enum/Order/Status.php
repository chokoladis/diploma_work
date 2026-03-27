<?php

namespace Main\Core\Enum\Order;

enum Status: string
{
    case CREATED = 'Создан';
    case HANDLE = 'Обрабатывается';
    case IN_WORK = 'В работе';
    case READY = 'Готов к выдаче';
    case COMPLETED = 'Выполнен';
}