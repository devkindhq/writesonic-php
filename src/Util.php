<?php

namespace Devkind\WritesonicPhp;

use Devkind\WritesonicPhp\Models\AbstractModel;

/**
 * Class Util.
 */
class Util
{
    /**
     * The cache of snake-cased words.
     *
     * @var array
     */
    protected static $snakeCache = [];

    /**
     * The cache of camel-cased words.
     *
     * @var array
     */
    protected static $camelCache = [];

    /**
     * The cache of studly-cased words.
     *
     * @var array
     */
    protected static $studlyCache = [];

    /**
     * Convert a string to snake case.
     *
     * @param string $value
     * @param string $delimiter
     *
     * @return string
     */
    public static function snake($value, $delimiter = '_')
    {
        $key = $value;

        if (isset(static::$snakeCache[$key][$delimiter])) {
            return static::$snakeCache[$key][$delimiter];
        }

        if (!ctype_lower($value)) {
            $value = preg_replace('/\s+/u', '', $value);

            $value = static::lower(preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $value));
        }

        return static::$snakeCache[$key][$delimiter] = $value;
    }

    /**
     * Convert a value to camel case.
     *
     * @param string $value
     *
     * @return string
     */
    public static function camel($value)
    {
        if (isset(static::$camelCache[$value])) {
            return static::$camelCache[$value];
        }

        return static::$camelCache[$value] = lcfirst(static::studly($value));
    }


    public static function camelize($input, $separator = '_')
    {
        return str_replace($separator, '', ucwords($input, $separator));
    }


    /**
     * @param $value
     *
     * @return mixed
     */
    public static function studly($value)
    {
        $key = $value;

        if (isset(static::$studlyCache[$key])) {
            return static::$studlyCache[$key];
        }

        $value = ucwords(str_replace(['-', '_'], ' ', $value));

        return static::$studlyCache[$key] = str_replace(' ', '', $value);
    }

    /**
     * Convert the given string to lower-case.
     *
     * @param string $value
     *
     * @return string
     */
    public static function lower($value)
    {
        return mb_strtolower($value, 'UTF-8');
    }

    /**
     * Flatten a multi-dimensional array into a single level.
     *
     * @param array $array
     * @param int   $depth
     *
     * @return array
     */
    public static function flatten($array, $depth = INF)
    {
        return array_reduce($array, function ($result, $item) use ($depth) {
            if (!is_array($item)) {
                return array_merge($result, [$item]);
            } elseif ($depth === 1) {
                return array_merge($result, array_values($item));
            }
            return array_merge($result, static::flatten($item, $depth - 1));
        }, []);
    }
    /**
     * @param string $id
     * @param array $array
     *
     * @return array
     */

    public static function searchByValue($id, $array)
    {
        $finding = array_search($id, array_column($array, 'id'));
        if ($finding >= 0 && $finding !== false) {
            return $array[$finding];
        };
        return null;
    }

    /**
     * @param string $domain
     *
     * @return string
     */
    public static function normalizeDomain($domain)
    {
        $domain = preg_replace("/(https:\/\/|http:\/\/)/", '', $domain);
        $domain = rtrim($domain, '/');
        $domain = strtolower($domain);
        return $domain;
    }

    /**
     * @param int|string|array|\stdClass|AbstractModel $mixed
     *
     * @return int|null
     */
    public static function getKeyFromMixed($mixed)
    {
        if (is_numeric($mixed)) {
            return $mixed;
        } elseif (is_array($mixed) && isset($mixed['id'])) {
            return $mixed['id'];
        } elseif ($mixed instanceof \stdClass && isset($mixed->id)) {
            return $mixed->id;
        } elseif ($mixed instanceof AbstractModel) {
            return $mixed->getKey();
        } else {
            return;
        }
    }

    /**
     * Get Id From Url
     *
     * @param string $str
     * @return string
     */
    public static function getIdFromURL(string $str = null)
    {

        $re = '/id=(\d*)/m';

        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

        if (count($matches) == 0 || !(isset($matches[0][1]) && is_numeric($matches[0][1]))) {
            return '';
        }

        return $matches[0][1];
    }



    /**
     * @param string $url
     * @param $query string|array
     * @return string
     */
    public static function appendQueryStringToURL(string $url, $query): string
    {
        // the query is empty, return the original url straightaway
        if (empty($query)) {
            return $url;
        }

        $parsedUrl = parse_url($url);
        if (empty($parsedUrl['path'])) {
            $url .= '/';
        }

        // if the query is array convert it to string
        $queryString = is_array($query) ? http_build_query($query) : $query;

        // check if there is already any query string in the URL
        if (!empty($parsedUrl['query'])) {
            // remove duplications
            parse_str($queryString, $queryStringArray);
            $url;
        } else {
            $queryString = $parsedUrl['query'] . '&' . $queryString;

            // remove duplications
            parse_str($queryString, $queryStringArray);

            // place the updated query in the original query position
            $url = substr_replace($url, http_build_query($queryStringArray), strpos($url, $parsedUrl['query']), strlen($parsedUrl['query']));
        }

        return $url;
    }
}
