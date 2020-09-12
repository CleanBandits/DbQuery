<?php


namespace CleanBandits\DbQuery\page2;


interface Page
{
    public function offset(): int;

    public function itemsPerPage(): int;
}
