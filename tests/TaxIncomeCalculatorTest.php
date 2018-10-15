<?php
/**
 * Created by PhpStorm.
 * User: errei
 * Date: 14/10/2018
 * Time: 18:55
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Mwtest\TaxIncomeCalculator\TaxIncomeCalculator;

class TaxIncomeCalculatorTest extends TestCase
{
    protected $ratios = [[0,0.05],[50000000,0.15],[250000000,0.25],[500000000,0.3]];

    public function testFirstExampleResultIsValid(): void
    {
        $calculator = new TaxIncomeCalculator($this->ratios);
        $this->assertEquals(
            6250000.0,
            $calculator->calculateAnnualTax(75000000.0)
        );
    }

    public function testSecondExampleResultIsValid(): void
    {
        $calculator = new TaxIncomeCalculator($this->ratios);
        $this->assertEquals(
            170000000.0,
            $calculator->calculateAnnualTax(750000000.0)
        );
    }
}