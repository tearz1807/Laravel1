<?php

namespace App\Game\Structural\Flyweight;

class BTree
{
    private ?BTreeNode $root = null;

    public function insert(int $index, Font $font): void
    {
        if ($this->root === null) {
            $this->root = new BTreeNode($index, $font);
            return;
        }

        $this->root->insert($index, $font);
    }

    public function find(int $index): ?Font
    {
        if ($this->root === null) {
            return null;
        }

        return $this->root->find($index);
    }
}

class BTreeNode
{
    private int $index;
    private Font $font;
    private ?BTreeNode $left = null;
    private ?BTreeNode $right = null;

    public function __construct(int $index, Font $font)
    {
        $this->index = $index;
        $this->font = $font;
    }

    public function insert(int $index, Font $font): void
    {
        if ($index < $this->index) {
            if ($this->left === null) {
                $this->left = new BTreeNode($index, $font);
            } else {
                $this->left->insert($index, $font);
            }
        } else {
            if ($this->right === null) {
                $this->right = new BTreeNode($index, $font);
            } else {
                $this->right->insert($index, $font);
            }
        }
    }

    public function find(int $index): ?Font
    {
        if ($index === $this->index) {
            return $this->font;
        }

        if ($index < $this->index) {
            return $this->left?->find($index);
        }

        return $this->right?->find($index);
    }
}