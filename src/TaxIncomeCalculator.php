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
     * Service Constructor
     *
     * @param array $ratios the tax rules
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
        $this->ratios = $ratios;
    }

    /**
     * @inheritDoc
     */
    public function getRatios(): array
    {
        return $this->ratios;
    }

    /**
     * @inheritDoc
     */
    public function calculateAnnualTax(float $income): float
    {
        $result = 0.0;
        // Empty implementation
        //return 0.0;

        // Trivial implementation
        /*
        if ($income == 75000000.0) {
            $result = 6250000.0;
        }
        elseif ($income == 750000000.0){
            $result = 170000000.0;
        }
        else {
            $result = 0.0;
        }*/
        for ($i=0; $i<sizeOf($this->ratios); $i++){
            if ($income > $this->ratios[$i][0]){
                if ($i < sizeOf($this->ratios) -1){
                    $result += (min($income - $this->ratios[$i][0],$this->ratios[$i+1][0] - $this->ratios[$i][0]))*$this->ratios[$i][1];
                }
                else {
                    $result += ($income - $this->ratios[$i][0])*$this->ratios[$i][1];
                }
            }
            else  {
                break;
            }
        }

        return $result;
    }


}