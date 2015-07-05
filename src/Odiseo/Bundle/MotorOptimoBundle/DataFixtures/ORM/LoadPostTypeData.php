<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Odiseo\Bundle\MotorOptimoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Odiseo\Bundle\MotorOptimoBundle\Entity\PostType;

/**
 * User fixtures.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class LoadPostTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        	
        	$date = new \DateTime('15-01-20');
        	
	        $postType = new PostType();
	        $postType->setName('Home');

            $manager->persist($postType);

            $this->setReference('motoroptimo.postType-1', $postType);

            $postType = new PostType();
            $postType->setName('Consejos');

            $manager->persist($postType);
            
            $this->setReference('motoroptimo.postType-2', $postType);

       		$manager->flush();
    }
    
	public function getPostRepository()
	{	
		return $this->get('motoroptimo.repository.postType');
	}
	/**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 1;
    }
	
}