<?php
/**
 * Executable interface.
 */
namespace Interfaces;

interface Executable {
	
	Public function exec( \Closure $funcTemplate, array $args = array() );

}