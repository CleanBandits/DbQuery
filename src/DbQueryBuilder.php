<?php


namespace CleanBandits\DbQuery;


use CleanBandits\DbQuery\Filters\DbFilters;

class DbQueryBuilder
{
    /**
     * @var DbOrder
     */
    private $order;

    /**
     * @var DbPage
     */
    private $page;

    /**
     * @var DbFilters
     */
    private $filters;


    public function order(DbOrder $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function filters(DbFilters $filters): self
    {
        $this->filters = $filters;
        return $this;
    }

    public function page(DbPage $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function query(): DbQuery
    {
        return new DbQuery(
            isset($this->order) ? $this->order : null,
            isset($this->page) ? $this->page : null,
            isset($this->filters) ? $this->filters : null
        );
    }
}
