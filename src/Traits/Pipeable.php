<?php

namespace Jobcerto\Pipeable\Traits;

use Jobcerto\Pipeable\Pipe;

trait Pipeable
{
    public function pipe($class, $attributes = [])
    {
        Pipe::subject($this)->on($class, $attributes);

        return $this;
    }
}
