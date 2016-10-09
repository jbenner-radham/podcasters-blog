<?php

namespace App\Transformers;

/**
 * App\Transformers\PostRequestTransformer
 *
 * @package App\Transformers
 * @property-read string $content
 * @property-read string|null $name
 */
class PostRequestTransformer extends Transformer
{
    /**
     * Extract the content attribute from the subject.
     *
     * @return string
     */
    public function content()
    {
        return str_remove_first($this->name(), $this->subject->content);
    }

    /**
     * Extract the name attribute from the subject.
     *
     * @return string|null
     */
    public function name()
    {
        $exploded = explode('<p>', $this->subject->content);

        return array_shift($exploded);
    }
}
