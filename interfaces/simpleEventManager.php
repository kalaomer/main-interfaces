<?php
/**
 * Simple Event Manager Interface.
 */

interface SimpleEventManager {

	Public function createEvent( $eventName, \Closure $function, array $args = array() );

	Public function killEvent( $eventName );

	Public function triggerEvent( $eventName, array $args = array() );
}