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
use Odiseo\Bundle\MotorOptimoBundle\Entity\Post;

/**
 * User fixtures.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class LoadPostData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        	
        	$date = new \DateTime('15-01-20');
        	
	        $post = new Post();
	        $post->setTitle('Bujia');
	        $post->setText('Una bujia re zarpada');
       		$post->setType($this->getReference('motoroptimo.postType-1'));

            $manager->persist($post);

            $this->setReference('motoroptimo.post-1', $post);
        	
	        $post = new Post();
	        $post->setTitle('Motor');
	        $post->setText('Este motor la rompe');
       		$post->setType($this->getReference('motoroptimo.postType-2'));

            $manager->persist($post);

            $this->setReference('motoroptimo.post-2', $post);

       		$manager->flush();
    }
    
	public function getPostRepository()
	{	
		return $this->get('motoroptimo.repository.post');
	}
	/**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 2;
    }
	
}