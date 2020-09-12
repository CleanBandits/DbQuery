<?php

namespace CleanBandits\DbQuery;

use CleanBandits\DbQuery\Filters2\Filter;
use CleanBandits\DbQuery\Order2\Order;
use CleanBandits\DbQuery\Page2\Page;

class DbQueryBuilder
{
    /**
     * @var Order|null
     */
    private $order;

    /**
     * @var Page|null
     */
    private $page;

    /**
     * @var Filter|null
     */
    private $filters;


    public function order(Order $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function filters(Filter $filters): self
    {
        $this->filters = $filters;
        return $this;
    }

    public function page(Page $page): self
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
