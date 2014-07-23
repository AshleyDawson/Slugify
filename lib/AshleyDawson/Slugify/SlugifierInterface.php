<?php

namespace AshleyDawson\Slugify;

/**
 * Interface SlugifierInterface
 *
 * @package AshleyDawson\Slugify
 * @author Ashley J. Dawson
 */
interface SlugifierInterface
{
    /**
     * @var string
     */
    const DEFAULT_DELIMITER = '-';

    /**
     * Slugify a string, making it safe for URLs, etc.
     *
     * @param string $value
     * @param string $delimiter
     * @return string
     */
    public function slugify($value, $delimiter = self::DEFAULT_DELIMITER);
}