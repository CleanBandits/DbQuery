<?php


namespace CleanBandits\DbQuery\Filters;


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
     * @return DbFiltersGroup
     */
    public static function constructAndGroup(array $filters): self
    {
        return new self($filters, 'AND');
    }

    /**
     * @param Filter[]|DbFiltersGroup[] $filters
     * @return DbFiltersGroup
     */
    public static function constructOrGroup(array $filters): self
    {
        return new self($filters, 'OR');
    }

    public function sql(): string
    {
        $filters = array_map(function (Filter $filter) {
            return $filter->sql();
        }, $this->filters);
        return '(' . implode(' ' . $this->join . ' ', $filters) . ')';
    }
}
