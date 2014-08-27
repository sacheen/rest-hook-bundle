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

    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * @return the $code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return the $message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param field_type $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param field_type $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

}