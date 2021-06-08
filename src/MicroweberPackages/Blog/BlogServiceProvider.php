<?php
/*
 * This file is part of the Microweber framework.
 *
 * (c) Microweber CMS LTD
 *
 * For full license information see
 * https://github.com/microweber/microweber/blob/master/LICENSE
 *
 */

namespace MicroweberPackages\Blog;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');

        // Allow to overwrite resource files for this module
        $checkForOverwrite = template_dir() . 'modules/blog/src/resources/views';
        $checkForOverwrite = normalize_path($checkForOverwrite);

        if (is_dir($checkForOverwrite)) {
            View::addNamespace('blog', $checkForOverwrite);
        }

        $mainFolder = __DIR__ . '/resources/views';
        $mainFolder = normalize_path($mainFolder);

        View::addNamespace('blog', $mainFolder);
    }
}