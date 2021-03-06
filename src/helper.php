<?php
/**
 * @copyright Copyright (c) 2020 Jacob Siefer
 *
 * @see LICENSE
 */

namespace typesetsh;

use Typesetsh\LaravelWrapper\Pdf;

/**
 * Get the evaluated pdf contents for the given view.
 *
 * @param string|null $view
 * @param \Illuminate\Contracts\Support\Arrayable|array $data
 * @param array $mergeData
 *
 * @return Pdf\Factory|Pdf\View
 */
function pdf($view = null, $data = [], $mergeData = [])
{
    /** @var Pdf\Factory $factory */
    $factory = app()->get('typesetsh.pdf');

    if (func_num_args() === 0) {
        return $factory;
    }

    return $factory->make($view, $data, $mergeData);
}
