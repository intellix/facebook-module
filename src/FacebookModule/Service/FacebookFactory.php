<?php
namespace FacebookModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FacebookFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $sl
     * @return \Facebook
     */
    public function createService(ServiceLocatorInterface $sl)
    {
        $config = $sl->get('Config');

        if (!isset($config['facebook'])) {
            throw new Exception\RuntimeException(
                'The facebook configuration [\'facebook\'] is missing'
            );
        }

	    return new \Facebook($config['facebook']);
	}
}
