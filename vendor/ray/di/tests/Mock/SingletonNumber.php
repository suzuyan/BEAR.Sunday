<?php

namespace Ray\Di\Mock;

use Ray\Di\Di\Inject;

class SingletonNumber implements NumberInterface
{
    public $db;

    /**
     * @Inject
     */
    public function __construct(SingletonDbInterface $db)
    {
        $this->db = $db;
    }
}
