<?php 

class DbQueryCest
{
    public function _before(UnitTester $I)
    {
    }

    public function testOrder(UnitTester $I)
    {
        $dbOrder = new \CleanBandits\DbQuery\Order\DbOrder(['id','ASC']);
        $I->assertSame('0 id,1 ASC',$dbOrder->orderingFormatted());
    }
}
