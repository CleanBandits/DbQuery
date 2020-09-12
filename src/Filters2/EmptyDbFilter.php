<?php

namespace CleanBandits\DbQuery\Filters2;


class EmptyDbFilter implements Filter
{
    public function sql(): string
    {
        return '1';
    }
}
