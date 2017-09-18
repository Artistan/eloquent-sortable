<?php

namespace Artistan\EloquentSortable\Test;

use Artistan\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Artistan\EloquentSortable\SortableTrait;

class Dummy extends Model implements Sortable
{
    use SortableTrait;

    protected $table = 'dummies';
    protected $guarded = [];
    public $timestamps = false;
}
