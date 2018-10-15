<?php
namespace Mwtest\TaxIncomeCalculator;

Interface TaxIncomCalculatorInterface
{
    /**
     * @param array the rules to calculate
     */
    public function setRatios(array $ratios = array()): void;

    /**
     * @return array return the rules to calculate the tax
     */
    public function getRatios(): array;

    /**
     * Calculate the tax from an annual income
     *
     * @param int $income annual income to tax
     * @return float return the calculated tax
     */
    public function calculateAnnualTax(float $income): float;
}