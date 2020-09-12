<?php

namespace CleanBandits\DbQuery\filters2;

interface Filter
{
    public function sql(): string;
}
