<?php

class Password extends Eloquent {
	
	protected $fillable = ['label', 'password', 'duration', 'active'];

	/**
	 * Get the user
	 *
	 * @return object
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
}