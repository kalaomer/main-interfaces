<?php
/**
 * Executable interface.
 */
namespace Interfaces;

interface Executeable {
	
	Public function exec( \Closure $funcTemplate, array $args = array() );

}