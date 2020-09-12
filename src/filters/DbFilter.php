<?php

namespace CleanBandits\DbQuery\Filters;

class DbFilter implements Filter
{

    /**
     * @var string
     */
    protected $column;

    /**
     * @var array|int|string
     */
    protected $value;

    /**
     * @var string
     */
    protected $type;

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @param string $type
     */
    private function __construct(string $column, $value, string $type)
    {
        $this->column = $column;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @return Filter
     */
    public static function constructLike(string $column, $value): Filter
    {
        return new static($column, $value, DbFilterType::Like);
    }

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @return Filter
     */
    public static function constructNotLike(string $column, $value): Filter
    {
        return new static($column, $value, DbFilterType::NotLike);
    }

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @return Filter
     */
    public static function constructEquals(string $column, $value): Filter
    {
        return new static($column, $value, DbFilterType::Equals);
    }

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @return Filter
     */
    public static function constructNotEquals(string $column, $value): Filter
    {
        return new static($column, $value, DbFilterType::NotEquals);
    }

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @return Filter
     */
    public static function constructIn(string $column, $value): Filter
    {
        return new static($column, $value, DbFilterType::In);
    }

    /**
     * DbFilter constructor.
     * @param string $column
     * @param string|int|array $value
     * @return Filter
     */
    public static function constructNotIn(string $column, $value): Filter
    {
        return new static($column, $value, DbFilterType::NotEquals);
    }

    public function sql(): string
    {
        return $this->column() . ' ' . $this->type . ' (' . $this->value() . ')';
    }

    protected function column(): string
    {
        return $this->column;
    }

    protected function value()
    {
        return $this->value;
    }
}

