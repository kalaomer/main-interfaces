<?php
/**
 * Simple Data Access Interface.
 */

namespace Interfaces\Storage;

interface SimpleAccess {

	/**
	 * Get data.
	 * @example $obj->get("key");
	 */
	Public function get( $key );

	/**
	 * Set data.
	 * @example $obj->set("key", "newValue");
	 */
	Public function set( $key, $value );

	/**
	 * Del data.
	 * @example $obj->del("key", "newValue");
	 */
	Public function del( $key );
}