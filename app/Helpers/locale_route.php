<?php
/**
 *  app/Helpers/lang_route_helpers.php
 *
 * Date-Time: 04.06.21
 * Time: 14:35
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

use Illuminate\Support\Arr;

/**
 * @param $name
 * @param array|string $parameters
 * @param bool $absolute
 *
 * @return string
 */
function locale_route($name, $parameters = [], bool $absolute = true): string
{
    $parameters = array_merge([
        'locale' => app()->getLocale()
    ], Arr::wrap($parameters));

    return route($name, $parameters, $absolute);
}