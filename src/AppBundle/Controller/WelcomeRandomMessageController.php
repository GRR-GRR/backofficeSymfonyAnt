<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeRandomMessageController extends Controller
{
    public function RadomMessageAction()
    {
        
        $messages = file('./messages.txt', FILE_IGNORE_NEW_LINES);
        shuffle($messages);
        $message = $messages[0]; // get the first of the shuffled $messages
        
        $number = mt_rand(0, 100);



        return $this->render('AppBundle:WelcomeRandomMessage:radom_message.html.twig', array(
            'number' => $number,
            'message' => $message,
        ));
    }

}
