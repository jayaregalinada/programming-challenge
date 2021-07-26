<?php

declare(strict_types=1);

namespace ProgrammingChallenge\Distincts\unit;

use PHPUnit\Framework\TestCase;
use ProgrammingChallenge\Distincts\Distinct;

/**
 * Class DistinctsTest
 * @package Distincts\unit
 */
final class DistinctTest extends TestCase
{
    /**
     * @var Distinct
     */
    private Distinct $distinct;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        /**
         * Initialize the ArmstrongNumber Class
         */
        $this->distinct = new Distinct();
    }

    /**
     * array values: 2, 1, 1, 2, 3, 1
     */
    public function testEvaluateDistinctValues0(): void
    {
        $numbers = [2, 1, 1, 2, 3, 1];
        $result = $this->distinct->solution($numbers);
        $expected = 3;

        self::assertEquals($expected, $result);
    }


    /**
     * array values: 7, 7, 1, 2, 3, 1, 3, 4, 2
     */
    public function testEvaluateDistinctValues1(): void
    {
        $numbers = [7, 7, 1, 2, 3, 1, 3, 4, 2];
        $result = $this->distinct->solution($numbers);
        $expected = 5;

        self::assertEquals($expected, $result);
    }


    /**
     * array values: 2,7,2,2,8,8,9,9,2
     */
    public function testEvaluateDistinctValues2(): void
    {
        $numbers = [2, 7, 2, 2, 8, 8, 9, 9, 2];
        $result = $this->distinct->solution($numbers);
        $expected = 4;

        self::assertEquals($expected, $result);
    }
}