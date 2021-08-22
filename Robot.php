<?php

class Robot
{
    public function func(): string
    {
        return $this->getBar();
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
