<?php
namespace SD\RestHookBundle\Util;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @author sacheen
 * @ExclusionPolicy("all")
 * @XmlRoot("error")
 */

class ExceptionFormatter
{

    /**
     * @var integer
     * @Expose
     */
    private $code;

    /**
     * @var string
     * @Expose
     */
    private $message;

    /**
     * @var string
     * @Expose
     */
    private $data;


    public function __construct($code, $message, $data = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * @return string $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

}