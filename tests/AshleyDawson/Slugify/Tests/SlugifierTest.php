<?php

namespace AshleyDawson\Slugify\Tests;

use AshleyDawson\Slugify\Slugifier;
use AshleyDawson\Slugify\SlugifierInterface;

class SlugifierTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Slugifier
     */
    protected $slugifier;

    protected function setUp()
    {
        $this->slugifier = new Slugifier();
    }

    public function testSimpleSlugify()
    {
        $output = $this->slugifier->slugify('Hello World');

        $this->assertEquals('hello'.SlugifierInterface::DEFAULT_DELIMITER.'world', $output);
    }

    public function testComplexSlugify()
    {
        $output = $this->slugifier->slugify('Th7E c*&&t s£at88 on the m(t0');

        $this->assertEquals('th7e'.SlugifierInterface::DEFAULT_DELIMITER.'c'.SlugifierInterface::DEFAULT_DELIMITER.'t'.SlugifierInterface::DEFAULT_DELIMITER.'s'.SlugifierInterface::DEFAULT_DELIMITER.'at88'.SlugifierInterface::DEFAULT_DELIMITER.'on'.SlugifierInterface::DEFAULT_DELIMITER.'the'.SlugifierInterface::DEFAULT_DELIMITER.'m'.SlugifierInterface::DEFAULT_DELIMITER.'t0', $output);
    }

    public function testTransliteralSlugify()
    {
        $output = $this->slugifier->slugify('Héllo World');

        $this->assertEquals('hello'.SlugifierInterface::DEFAULT_DELIMITER.'world', $output);
    }

    public function testChangeDelimiterSlugify()
    {
        $output = $this->slugifier->slugify('Hello World');

        $this->assertEquals('hello'.SlugifierInterface::DEFAULT_DELIMITER.'world', $output);

        $output = $this->slugifier->slugify('Hello World', '_');

        $this->assertEquals('hello_world', $output);

        $output = $this->slugifier->slugify('Hello World');

        $this->assertEquals('hello'.SlugifierInterface::DEFAULT_DELIMITER.'world', $output);
    }

    public function testSpecialCharactersSlugify()
    {
        $output = $this->slugifier->slugify('Hello `¬!"£$%^&*()_+=-][}{|\<,>.?/:;@\'~#World');

        $this->assertEquals('hello'.SlugifierInterface::DEFAULT_DELIMITER.'world', $output);
    }
}