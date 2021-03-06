<?php
namespace ValuQuery\QueryBuilder\Event;

use Zend\EventManager\Event;

class QueryBuilderEvent extends Event
{
    public function getQuery()
    {
        return $this->getParam('query');
    }
    
    public function setQuery($query)
    {
        $this->setParam('query', $query);
    }
}