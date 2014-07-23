<?php

namespace AshleyDawson\Slugify;

/**
 * Class Slugifier
 *
 * @package AshleyDawson\Slugify
 * @author Ashley J. Dawson
 */
class Slugifier implements SlugifierInterface
{
    /**
     * {@inheritdoc}
     */
    public function slugify($value, $delimiter = self::DEFAULT_DELIMITER)
    {
        $text = preg_replace('~[^\\pL\d]+~u', $delimiter, $value);

        $text = trim($text, $delimiter);

        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        $text = strtolower($text);

        $text = preg_replace('~[^-\w]+~', '', $text);

        return $text;
    }
}