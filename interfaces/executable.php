<?php
/**
 * Executable interface.
 */

interface Executeable {
	
	Public function exec( \Closure $funcTemplate, array $args = array() );

}