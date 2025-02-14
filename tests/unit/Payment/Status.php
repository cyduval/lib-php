<?php

namespace Stancer\tests\unit\Payment;

use Stancer;

class Status extends Stancer\Tests\atoum
{
    public function testClass()
    {
        $this
            ->currentlyTestedClass
                ->hasConstant('AUTHORIZE')
                ->constant('AUTHORIZE')
                    ->isEqualTo('authorize')

            ->currentlyTestedClass
                ->hasConstant('AUTHORIZED')
                ->constant('AUTHORIZED')
                    ->isEqualTo('authorized')

            ->currentlyTestedClass
                ->hasConstant('CANCELED')
                ->constant('CANCELED')
                    ->isEqualTo('canceled')

            ->currentlyTestedClass
                ->hasConstant('CAPTURE')
                ->constant('CAPTURE')
                    ->isEqualTo('capture')

            ->currentlyTestedClass
                ->hasConstant('CAPTURE_SENT')
                ->constant('CAPTURE_SENT')
                    ->isEqualTo('capture_sent')

            ->currentlyTestedClass
                ->hasConstant('CAPTURED')
                ->constant('CAPTURED')
                    ->isEqualTo('captured')

            ->currentlyTestedClass
                ->hasConstant('DISPUTED')
                ->constant('DISPUTED')
                    ->isEqualTo('disputed')

            ->currentlyTestedClass
                ->hasConstant('EXPIRED')
                ->constant('EXPIRED')
                    ->isEqualTo('expired')

            ->currentlyTestedClass
                ->hasConstant('FAILED')
                ->constant('FAILED')
                    ->isEqualTo('failed')

            ->currentlyTestedClass
                ->hasConstant('REFUSED')
                ->constant('REFUSED')
                    ->isEqualTo('refused')

            ->currentlyTestedClass
                ->hasConstant('TO_CAPTURE')
                ->constant('TO_CAPTURE')
                    ->isEqualTo('to_capture')
        ;
    }
}
