<?php

namespace Artistan\EloquentSortable\Test;

use Artistan\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Artistan\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class DummyWithSoftDeletes extends Model implements Sortable
{
    use SoftDeletes, SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
