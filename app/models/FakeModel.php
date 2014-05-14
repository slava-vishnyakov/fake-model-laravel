<?php


class FakeModel extends Eloquent
{
    public $beforeSaveFired = false;

    public function beforeSave()
    {
        $this->beforeSaveFired = true;
        return false;
    }
} 