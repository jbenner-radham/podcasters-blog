<?php

namespace App\Unpresenters;

use App\Tag;

trait PostUnpresenter
{
    /**
     * Set the various tag relations from a CSV string.
     *
     * @param string $tagsCsv
     * @return void
     */
    public function setTagsAttribute($tagsCsv)
    {
        $newTagNames = explode(',', $tagsCsv);
        $tagNames = $this->tag_names;

        collect($newTagNames)->map(function ($tagName) {
            return trim($tagName);
        })->reject(function ($tagName) use ($tagNames) {
            return $tagNames->contains($tagName);
        })->each(function ($tagName) {
            $this->tags()->attach(Tag::create(['name' => $tagName]));
        });
    }
}
