<?php


class FakeModel extends Eloquent
{
    public $beforeSaveFired = false;

    public function beforeSave($model)
    {
        $model->beforeSaveFired = true;
        return false;
    }
} 