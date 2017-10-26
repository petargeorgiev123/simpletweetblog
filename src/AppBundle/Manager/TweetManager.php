<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Tweets;
use AppBundle\Repository\TweetsRepository;
use Doctrine\ORM\EntityManager;

class TweetManager
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /** @var TweetsRepository */
    private $repository;

    /**
     * TweetsManager constructor.
     *
     * @param EntityManager       $entityManager

     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->repository = $this->entityManager->getRepository('AppBundle:Tweets');
    }

    /**
     * @return Tweets[]|array
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }

    /**
     * @return Tweets[]|array
     */
    public function findOneById($id)
    {
        return $this->repository->findOneById($id);
    }

    /**
     * @return Tweets[]|array
     */
    public function findAllTweetsByAuthor($author_id)
    {
        return $this->repository->findAllTweetsByAuthor($author_id);
    }
}
