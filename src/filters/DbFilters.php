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

    public static function constructFromGroup(DbFiltersGroup $filtersGroup): self
    {
        return new self($filtersGroup);
    }

    public static function constructFromFilter(Filter $dbFilter): self
    {
        return new self(DbFiltersGroup::constructAndGroup([$dbFilter]));
    }

    public function sql(): string
    {
        return $this->filtersGroup->sql();
    }
}
