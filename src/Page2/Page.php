<?php


namespace CleanBandits\DbQuery\Page2;


interface Page
{
    public function offset(): int;

    public function itemsPerPage(): int;
}
