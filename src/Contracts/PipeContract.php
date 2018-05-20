<?php

namespace Jobcerto\Pipeable\Contracts;

interface PipeContract
{
    public function handle($subject);
}
