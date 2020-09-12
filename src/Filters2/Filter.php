<?php

namespace CleanBandits\DbQuery\Filters2;

interface Filter
{
    public function sql(): string;
}
