<?php
namespace Mwtest\TaxIncomeCalculator;

Interface TaxIncomeCalculatorInterface
{
    /**
     * Set the tax rules.
     * The rules are an array of couples [income begin level, tax ratio]
     * For example: [[0,0.05],[50000000,0.15],[250000000,0.25],[500000000,0.3]]
     *
     * @param array the rules to calculate
     * @throws \Exception when the ratios format isn't valid
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