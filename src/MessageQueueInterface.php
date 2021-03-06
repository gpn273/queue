<?php

namespace Queue;

interface MessageQueueInterface
{
    public function push(string $message);

    public function pop(): string;

    public function count(): int;
}
