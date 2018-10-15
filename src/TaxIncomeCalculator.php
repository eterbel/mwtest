<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: errei
 * Date: 14/10/2018
 * Time: 18:45
 */

namespace Mwtest\TaxIncomeCalculator;

use Mwtest\TaxIncomeCalculator\TaxIncomeCalculatorInterface;

class TaxIncomeCalculator implements TaxIncomeCalculatorInterface
{
    protected $ratios;

    /**
     *
     */
    public function __construct(array $ratios = array())
    {
        $this->setRatios($ratios);
    }

    /**
     * @inheritDoc
     */
    public function setRatios(array $ratios = array()): void
    {
        // TODO: Implement setRatios() method.
    }

    /**
     * @inheritDoc
     */
    public function getRatios(): array
    {
        // TODO: Implement getRatios() method.
    }

    /**
     * @inheritDoc
     */
    public function calculateAnnualTax(float $income): float
    {
        // TODO: Implement calculateAnnualTax() method.
        return 0.0;
    }


}