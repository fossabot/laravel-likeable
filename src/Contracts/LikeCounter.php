<?php


namespace Turahe\Likeable\Contracts;

/**
 * Interface LikeCounter.
 *
 * @property int type_id
 * @property int count
 * @package Turahe\Likeable\Contracts
 */
interface LikeCounter
{
    /**
     * Likeable model relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function likeable();

}
