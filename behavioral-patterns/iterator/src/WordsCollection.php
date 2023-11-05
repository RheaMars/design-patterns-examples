<?php

declare(strict_types=1);

class WordsCollection implements IteratorAggregate
{
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(string $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): Iterator
    {
        return new WordsIterator($this);
    }

    public function getReverseIterator(): Iterator
    {
        return new WordsIterator($this, true);
    }
}