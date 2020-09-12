<?php

namespace CleanBandits\DbQuery\Filters;

interface Filter
{
    public function sql(): string;
}
