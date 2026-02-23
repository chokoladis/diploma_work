<?php

namespace Main\Core\Interfaces;

interface HasMap
{
    public function map() : array;
    public function getTableName() : string;
}