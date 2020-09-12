<?php


namespace CleanBandits\DbQuery\filters2;


class DbFiltersGroup implements Filter
{
    /**
     * @var DbFiltersGroup[]|Filter[]
     */
    private $filters;

    /**
     * @var string
     */
    private $join;

    /**
     * DbFiltersGroup constructor.
     * @param Filter[]|DbFiltersGroup[] $filters
     * @param string $join
     */
    private function __construct(array $filters, string $join)
    {
        $this->filters = $filters;
        $this->join = $join;
    }

    /**
     * @param Filter[]|DbFiltersGroup[] $filters
     * @return Filter
     */
    public static function constructAndGroup(array $filters): Filter
    {
        return new static($filters, 'AND');
    }

    /**
     * @param Filter[]|DbFiltersGroup[] $filters
     * @return Filter
     */
    public static function constructOrGroup(array $filters): Filter
    {
        return new static($filters, 'OR');
    }

    public function sql(): string
    {
        $filters = array_map(function (Filter $filter) {
            return $filter->sql();
        }, $this->filters);
        return '(' . implode(' ' . $this->join . ' ', $filters) . ')';
    }
}
