<?php

namespace CleanBandits\DbQuery\Order;

class DbOrder implements Order
{
    /**
     * @var string[]
     */
    private $ordering;

    /**
     * DbOrder constructor.
     * @param string[] $columnOrdering
     */
    public function __construct(array $columnOrdering)
    {
        $this->ordering = $columnOrdering;
    }

    public static function fromSingleColumn(string $column, string $direction)
    {
        return new self([$column => $direction]);
    }

    public function orderingFormatted(): string
    {
        return implode(',', array_map(function ($column, $direction) {
            return $column . ' ' . $direction;
        }, array_keys($this->ordering), $this->ordering));
    }
}
