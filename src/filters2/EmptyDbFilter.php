<?php

namespace CleanBandits\DbQuery\filters2;


class EmptyDbFilter implements Filter
{
    public function sql(): string
    {
        return '1';
    }
}
