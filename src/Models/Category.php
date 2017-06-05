<?php

namespace Kordy\Ticketit\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'ticketit_categories';

    protected $fillable = ['name', 'color'];

    /**
     * Indicates that this model should not be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get related tickets.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany('Kordy\Ticketit\Models\Ticket', 'category_id');
    }

    /**
     * Get related agents.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents()
    {
        return $this->belongsToMany('\Kordy\Ticketit\Models\Agent', 'ticketit_categories_users', 'category_id', 'user_id')->withPivot('autoassign')->orderBy('name');
    }

    /**
     * Get related tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags()
    {
        return $this->morphToMany('Kordy\Ticketit\Models\Tag', 'taggable', 'ticketit_taggables')->orderBy('name');
    }
}
