<?php
namespace CalculatorBundle\Entity;
class Calculator{
    /**
     * @var float
     */
    private $leftOperand;
    /**
     * @var float
     */
    private $rightOperand;
    /**
     * @var string
     */
    private $operator;

    /**
     *Get left Operand
     *
     * @return float
     */
    public function getLeftOperand(){
        return $this->leftOperand;
    }
    /**
     *Set left Operand
     *
     * @param float $operand
     *
     * @return Calculator
     */
    public function setLeftOperand($operand){
        return $this->leftOperand=$operand;
        return $this;
    }

    /**
     *Get right Operand
     *
     * @return float
     */
    public function getRightOperand(){
        return $this->rightOperand;
    }
    /**
     *Set right Operand
     *
     * @param float $operand
     *
     * @return Calculator
     */
    public function setRightOperand($operand){
        return $this->rightOperand=$operand;
        return $this;
    }

    /**
     *Get  operator
     *
     * @return float
     */
    public function getOperator(){
        return $this->operator;
    }
    /**
     *Set operator
     *
     * @param string $operator
     *
     * @return Calculator
     */
    public function setOperator($operator){
        return $this->operator=$operator;
        return $this;
    }

}