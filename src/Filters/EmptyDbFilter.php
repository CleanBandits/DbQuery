<?php

namespace CleanBandits\DbQuery\Filters;


class EmptyDbFilter implements Filter
{
    public function sql(): string
    {
        return '1';
    }
}
