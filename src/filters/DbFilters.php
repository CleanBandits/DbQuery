<?php

namespace CleanBandits\DbQuery\Filters;


class DbFilters implements Filter
{
    /**
     * @var DbFiltersGroup
     */
    private $filtersGroup;

    public function __construct(DbFiltersGroup $filtersGroup)
    {
        $this->filtersGroup = $filtersGroup;
    }

    public static function constructFromGroup(DbFiltersGroup $filtersGroup): Filter
    {
        return new static($filtersGroup);
    }

    public static function constructFromFilter(Filter $dbFilter): Filter
    {
        return new static(DbFiltersGroup::constructAndGroup([$dbFilter]));
    }

    public function sql(): string
    {
        return $this->filtersGroup->sql();
    }
}
