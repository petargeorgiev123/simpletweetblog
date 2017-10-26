<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use AppBundle\Entity\Tweets;
use AppBundle\Manager\TweetManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @var TweetManager
     */
    private $tweetManager;
    /**
     * TweetsController constructor.
     */
    public function __construct(TweetManager $tweetManager)
    {
        $this->tweetManager = $tweetManager;
    }
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $tweets = $this->tweetManager->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            "tweets" => $tweets,
        ]);
    }

    /**
     * @Route("/tweet/{id}", name="single_tweet")
     */
    public function singleTweet(Tweets $tweet){
        return $this->render('default/tweet.html.twig', [
            "tweet" => $tweet,
        ]);
    }

    /**
     *  @Route("/author/{id}", name="single_author")
     */
    public function singleAuthor(Author $author){
        $authorTweets = $this->tweetManager->findAllTweetsByAuthor($author->getId());

        return $this->render('default/author.html.twig', [
            "author" => $author,
            "tweets" => $authorTweets
        ]);
    }
}
