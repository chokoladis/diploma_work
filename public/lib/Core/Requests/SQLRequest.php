<?php

namespace Main\Core\Requests;

use Main\Core\Secure\StringSecure;

final class SQLRequest
{
    function __construct(
        private string $select = '',
        private string $where = '',
        private string $sort = '',
        private string $pagination = '',
    )
    {
    }

    public function getSelect(): string { return $this->select; }
    public function getWhere(): string { return $this->where; }
    public function getSort(): string { return $this->sort; }
    public function getPagination(): string { return $this->pagination; }

    public function setSelect(string $value) { $this->select = StringSecure::get($value); return $this; }
    public function addWhere(string $value) { $this->where .= StringSecure::get($value); return $this; }
    public function setSort(string $value) { $this->sort = StringSecure::get($value); return $this; }
    public function setPagination(string $value) { $this->pagination = StringSecure::get($value); return $this; }

    public function toString(): string
    {
        return $this->select.' '.$this->where.' '.$this->sort.' '.$this->pagination;
    }
}