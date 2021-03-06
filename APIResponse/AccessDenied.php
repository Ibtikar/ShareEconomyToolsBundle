<?php

namespace Ibtikar\ShareEconomyToolsBundle\APIResponse;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * AccessDenied response object
 *
 * @author Karim Shendy <kareem.elshendy@ibtikar.net.sa>
 */
class AccessDenied extends MainResponse
{

    /**
     * @Assert\Type("integer")
     */
    public $code = 403;

    /**
     * @Assert\Type("boolean")
     */
    public $status = false;

    /**
     * @param string $message
     */
    public function __construct($message = 'Access denied.')
    {
        $this->message = $message;
    }
}
