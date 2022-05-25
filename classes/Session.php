<?php

// singleton class to get the _SESSION without accidently starting the session multiple times
abstract class Session {

    // store data when session has started 
    // so that get() can see whether the session has started
    public static $data;

    /**
    * Gets the current session data, and starts the session if it hasn't been started
    * @return array the session data
    */
    public static function get(): array {
        // if session data is already loaded, return it
        if (isset(static::$data)) return static::$data;

        if (session_start()) { // if session succesfully started

            // set $data to say that the session has started
            static::$data = $_SESSION;

            return static::$data;
        } else { // if starting of session failed, throw exception
            throw new ErrorException("Failed to start the session using session_start()");
        }
    }

}