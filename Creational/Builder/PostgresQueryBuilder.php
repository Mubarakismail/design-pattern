<?php

namespace DesignPattern\Builder;

use DesignPattern\Builder\SQLQueryBuilder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * @throws \Exception
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        parent::limit($start, $offset);
        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}