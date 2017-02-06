<?php

namespace ConnectHolland\FileUploadBundle\Tests;

use ConnectHolland\FileUploadBundle\Model\UploadTrait;

/**
 * Mock class for testing the UploadTrait.
 *
 * @author Niels Nijens <niels@connectholland.nl>
 */
class UploadEntityMock
{
    use UploadTrait {
        getFileUpload as getImageUpload;
        setFileUpload as setImageUpload;
    }
}
