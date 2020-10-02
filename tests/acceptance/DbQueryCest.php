<?php

use CleanBandits\DbQuery\Order\Order;

class DbQueryCest
{
    private $dbQuery;

    public function _before(AcceptanceTester $I)
    {
        $this->dbQuery = new \CleanBandits\DbQuery\DbQuery();
    }

    public function tryToTestOrdering(AcceptanceTester $I): void
    {
        $I->wantTo('see OK');
    }
    
}