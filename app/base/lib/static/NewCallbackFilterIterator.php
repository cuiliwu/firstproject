<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */

class NewCallbackFilterIterator extends FilterIterator
{
    protected $callback;

    public function __construct(Iterator $iterator, $callback, $params =null){
        $this->callback = $callback;
        $this->_params = $params;
        parent::__construct($iterator);
    }

    public function accept(){
        return call_user_func(
            $this->callback,
            $this->current(),
            $this->key(),
            $this->getInnerIterator(),
            $this->_params
        );
    }
}

