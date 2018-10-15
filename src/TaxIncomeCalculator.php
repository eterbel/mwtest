<?php
/**
 * Created by PhpStorm.
 * User: errei
 * Date: 14/10/2018
 * Time: 18:45
 */

namespace Mwtest\TaxIncomeCalculator;

use Mwtest\TaxIncomeCalculator\TaxIncomCalculatorInterface;

class TaxIncomeCalculator implements TaxIncomCalculatorInterface
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
    }


}