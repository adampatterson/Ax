<?php

namespace Axe\Core;

/**
 * $axeLoop = new Axe\Core\Looper;
 * while ($axeLoop->have_posts()) : the_post();
 *      $axeLoop->first()
 *      $axeLoop->index()
 *      $axeLoop->even()
 *      $axeLoop->odd()
 *      $axeLoop->last()
  * endwhile;
 *
 * Class Looper
 * @package Axe\Core
 */
class Looper
{

    /**
     * @var int
     */
    public $index = 0;

    /**
     * @var string|void|\WP_Query
     */
    private $wp_query;

    /**
     * Pulls the $wp_query from the Global scope.
     */
    public function __construct()
    {
        global $wp_query;
        $this->wp_query = $wp_query;
    }

    /**
     * Exactly the same as have_posts() but also serves
     * as a tidy place to increment the loop.
     *
     * @return bool
     */
    public function have_posts()
    {
        $this->iterate();

        return $this->wp_query->have_posts();
    }

    /**
     * Sets and increments the current index.
     */
    public function iterate()
    {
        $this->index = $this->index + 1;
    }

    /**
     * Returns the current post index on the page.
     *
     * @return int
     */
    public function index()
    {
        return $this->index;
    }

    /**
     * @return bool
     */
    public function first()
    {
        return ($this->index == 1) ? true : false;
    }

    /**
     * @return bool
     */
    public function last()
    {
        return ($this->index == count($this->wp_query->posts)) ? true : false;
    }

    /**
     * @return bool
     */
    public function even()
    {
        return $this->index % 2 == 0;
    }

    /**
     * @return bool
     */
    public function odd()
    {
        return $this->index % 2 !== 0;
    }
}