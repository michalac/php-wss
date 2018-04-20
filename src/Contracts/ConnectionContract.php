<?php

namespace WSSC\Contracts;

/**
 *
 * @author Arthur Kushman
 */
interface ConnectionContract
{

    public function getId(): string;
    
    public function send($data): void;

    public function close(): void;
}
