<?php
namespace Jobcerto\Pipeable;

class Pipe
{
    /**
     * The subject that will chain all the pipes
     *
     * @var stdClass
     */
    protected $subject;

    public function __construct($subject = null)
    {
        $this->subject = $subject;
    }

    /**
     * Assign the given subject in a more "friendly" way
     *
     * @param  stdClass $subject
     * @return Jobcerto\Pipeable\Pipe $this
     */
    public static function subject($subject)
    {
        $instance = new static;

        $instance->subject = $subject;

        return $instance;
    }

    /**
     * Pipe the subject in the given class
     *
     * @param  PipeableContract $class
     * @return void
     */
    public function on($class, $attributes)
    {
        (new $class)->handle($this->subject, $attributes);
    }
}
