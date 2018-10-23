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
    protected $ratios = [[0, 0.05], [50000000, 0.15], [250000000, 0.25], [500000000, 0.3]];

    /**
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
    }*/

    public function testRatioRulesAreNotValid(): void
    {
        $this->expectException(Exception::class);

        $calculator = new TaxIncomeCalculator([1, 2, 3]);
    }

    /**
     * Test a set of good data
     *
     * @dataProvider validDataProvider
     *
     * @param float $amount
     * @param float $tax expected annual tax
     */
    public function testResultIsValid(float $amount,float $tax): void
    {
        $calculator = new TaxIncomeCalculator($this->ratios);
        $this->assertEquals(
            $tax,
            $calculator->calculateAnnualTax($amount)
        );
    }

    public function validDataProvider(): array
    {
        return [
            [75000000.0,6250000.0],
            [750000000.0,170000000.0],
            [0.0,0.0]
        ];
    }

    /**
     * Test a set of bad data
     *
     * @dataProvider unvalidDataProvider
     *
     * @param float $amount
     * @param float $tax expected annual tax
     */
    public function testResultIsNotValid(float $amount,float $tax): void
    {
        $calculator = new TaxIncomeCalculator($this->ratios);
        $this->assertNotEquals(
            $tax,
            $calculator->calculateAnnualTax($amount)
        );
    }

    public function unvalidDataProvider(): array
    {
        return [
            [75000000.0,6250001.0],
            [750000000.0,160000000.0],
            [0.0,1.0]
        ];
    }
}