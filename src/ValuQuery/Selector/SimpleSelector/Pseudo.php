<?php
namespace ValuQuery\Selector\SimpleSelector;

use ValuQuery\Selector\SimpleSelector\AbstractSelector;

class Pseudo extends AbstractSelector
{
    protected $name = AbstractSelector::SELECTOR_PSEUDO;
    
    /**
     * Pseudo class name
     * 
     * @var string
     */
    private $className = null;
    
    /**
     * Pseudo class value
     * 
     * @var string
     */
    private $classValue = null;
    
    public function __construct($className, $classValue)
    {
        $this->setClassName($className);
        $this->setClassValue($classValue);
    }
    
    public function getClassName()
    {
        return $this->className;
    }
    
    public function setClassName($className)
    {
        if($className !== $this->className){
            $this->value = null;
        }
        
        $this->className = $className;
    }

	public function getClassValue()
    {
        return $this->classValue;
    }

	public function setClassValue($classValue)
    {
        if($classValue !== $this->classValue){
            $this->value = null;
        }
        
        $this->classValue = $classValue;
    }
    
    public function getEscapedValue(){
        
        $selector = $this->getClassName();
            
        if($this->getClassValue()){
            $selector .= '(' . $this->getClassValue() . ')';
        }
        
        return $selector;
    }

	public static function getEnclosure()
    {
        return array(':');
    }
}