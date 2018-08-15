<?php
    /**
     * Returns a UNIX timestamp, given either a UNIX timestamp or a valid strtotime() date string.
     *
     * @param string $date_string Datetime string
     * @return string Formatted date string
     */
    function fromString($date_string) {
        if (is_integer($date_string) || is_numeric($date_string)) {
            return intval($date_string);
        } else {
            return strtotime($date_string);
        }
    }

    /**
     * Returns a nicely formatted date string for given Datetime string.
     *
     * @param string $date_string Datetime string or Unix timestamp
     * @return string Formatted date string
     */
    function nice($date_string = null) {
        if ($date_string != null) {
            $date = $this->fromString($date_string);
        } else {
            $date = time();
        }

        $ret = date("D, M jS Y, H:i", $date);
        return $this->output($ret);
    }

    /**
     * Returns true if given datetime string is today.
     *
     * @param string $date_string Datetime string or Unix timestamp
     * @return boolean True if datetime string is today
     */

    function isToday($date_string) {
        $date = $this->fromString($date_string);
        $ret = date('Y-m-d', $date) == date('Y-m-d', time());
        return $this->output($ret);
    }

    /**
     * Returns a date formatted for Atom RSS feeds.
    *
    * @param string $date_string Datetime string or Unix timestamp
    * @return string Formatted date string
    */
	function toAtom($date_string) {
        $date = $this->fromString($date_string);
        $ret = date('Y-m-d\TH:i:s\Z', $date);
        return $this->output($ret);
    }

    /**
     * Returns a date formatted for &copy.
     *
     * @param string $date_string Datetime string or Unix timestamp
     * @return string Formatted date string
     */
    function copyDate($date_string) {
        $date = $this->fromString($date_string);
        $ret = date('Y', $date);
        return $this->output($ret);
    }