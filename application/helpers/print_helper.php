<?php defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if ( ! function_exists('echo_print'))
{
  /**
   * echo_print
   *
   * Pretty print data in browser
   *
   * @param array
   * @return prints data
   */
  function echo_print($data)
  {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
}


/* End of file print_helper.php */
/* Location: ./system/helpers/print_helper.php */