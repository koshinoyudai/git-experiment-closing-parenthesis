<?php

class Robot
{
    public function func(): string
    {
        return $this->getBar();
    }

    public function new_func(): string
    {
        return 'I am a new function';
    }

    private function getFoo(): string
    {
        return 'foo';
    }

    private function getBar(): string
    {
        return 'bar';
    }
}
