<?php

namespace Jobcerto\Pipeable\Traits;

use Jobcerto\Pipeable\Pipe;

trait Pipeable
{
    public function pipe($class)
    {
        Pipe::subject($this)->on($class);

        return $this;
    }
}
