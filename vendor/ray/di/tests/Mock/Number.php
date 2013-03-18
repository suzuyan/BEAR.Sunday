<?php

namespace Ray\Di\Mock;

use Ray\Di\Di\Inject;

class Number implements NumberInterface
{
    public $db;

    /**
     * @Inject
     */
    public function __construct(DbInterface $db)
    {
        $this->db = $db;
    }
}
