<?php


namespace CleanBandits\DbQuery\Page;


interface Page
{
    public function offset(): int;

    public function itemsPerPage(): int;
}
