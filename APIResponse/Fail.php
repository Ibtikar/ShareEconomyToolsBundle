<?php

namespace Ibtikar\ShareEconomyToolsBundle\APIResponse;

use Symfony\Component\Validator\Constraints as Assert;

class Fail extends MainResponse
{

    /**
     * @Assert\NotBlank
     */
    public $status = false;

    /**
     * @Assert\NotBlank
     */
    public $code = 422;

    /**
     * @Assert\NotBlank
     */
    public $message = '';

    /**
     * @Assert\NotBlank
     */
    public $contactUs = false;

}
