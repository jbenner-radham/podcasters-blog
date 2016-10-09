<?php

namespace App\Transformers;


abstract class Transformer
{
    /**
     * The transformation subject.
     *
     * @var mixed
     */
    protected $subject;

    /**
     * Create a new transformer instance.
     *
     * @param mixed $subject
     */
    public function __construct($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Magic method to fetch a transformation method as a dynamic property.
     *
     * @param  string  $attribute
     * @return mixed
     */
    public function __get($attribute)
    {
        if (method_exists(static::class, $attribute)) {
            return $this->{$attribute}();
        }
    }
}
