<?php

namespace App\Presenters;


trait PostPresenter
{
    /**
     * Get the "tag_names" presentation attribute.
     *
     * @return string[]
     */
    public function getTagNamesAttribute()
    {
        return $this->tags->map(function ($tag) {
            return $tag->name;
        });
    }
}
