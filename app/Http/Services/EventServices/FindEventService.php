<?php

namespace App\Http\Services\EventServices;

use App\Http\Repositories\SqlEvent;
class FindEventService
{
    private SqlEvent $sqlEvent;
    public function __construct(SqlEvent $sqlEvent)
    {
        $this->sqlEvent = $sqlEvent;
    }
    public function execute(string $id)
    {
        $results = $this->sqlEvent->findEvent($id);
        return $results;
    }
}