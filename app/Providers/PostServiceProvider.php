<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public static function getContent($post)
    {
        $limit = 1;
        $name = self::getName($post);
        $replacement = '';

        return str_replace($name, $replacement, $post, $limit);
    }

    public static function getName($post)
    {
        $exploded = explode('<p>', $post);

        if (count($exploded) === 0) {
            return '';
        }

        return $exploded[0];
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
