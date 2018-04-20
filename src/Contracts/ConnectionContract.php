<?php

namespace WSSC\Contracts;

/**
 *
 * @author Arthur Kushman
 */
interface ConnectionContract
{

    public function getId(): void;
    
    public function send($data): void;

    public function close(): void;
}
