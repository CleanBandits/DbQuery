<?php


namespace CleanBandits\DbQuery;

use CleanBandits\DbQuery\Filters\Filter;
use CleanBandits\DbQuery\Order\Order;
use CleanBandits\DbQuery\Page\Page;


class DbQuery
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

    public function __construct(?Order $order = null, ?Page $page = null, ?Filter $filters = null)
    {
        $this->order = $order;
        $this->page = $page;
        $this->filters = $filters;
    }

    public function order(): ?Order
    {
        return $this->order;
    }

    public function page(): ?Page
    {
        return $this->page;
    }

    public function filters(): ?Filter
    {
        return $this->filters;
    }
}
