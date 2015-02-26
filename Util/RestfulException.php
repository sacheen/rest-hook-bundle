<?php
/**
 * Created by PhpStorm.
 * User: sacheen
 * Date: 15/02/26
 * Time: 4:45 PM
 */

namespace SD\RestHookBundle\Util;


class RestfulException extends \Exception
{

    private $data = array();

    public function __construct($message = "", $code = 0, $data = array(), \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->setData($data);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }




} 