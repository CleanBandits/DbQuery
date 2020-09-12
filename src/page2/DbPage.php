<?php


namespace CleanBandits\DbQuery\page2;


class DbPage implements Page
{
    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $itemsPerPage;

    /**
     * @var int
     */
    private $itemsDeviation;

    public function __construct(int $pageNumber, int $itemsPerPage, int $itemsDeviation = 0)
    {
        $this->pageNumber = $pageNumber;
        $this->itemsPerPage = $itemsPerPage;
        $this->itemsDeviation = $itemsDeviation;
    }

    public function offset(): int
    {
        return ($this->pageNumber - 1) * $this->itemsPerPage + $this->itemsDeviation;
    }

    public function itemsPerPage(): int
    {
        return $this->itemsPerPage;
    }
}
