<?php
/**
 * Simple Event Manager Interface.
 */

namespace Interfaces\Event;

interface SimpleManager {

	Public function createEvent( $eventName, \Closure $function, array $args = array() );

	Public function killEvent( $eventName );

	Public function triggerEvent( $eventName, array $args = array() );
}