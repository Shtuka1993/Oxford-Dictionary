<?php
    // src/Controller/TagClaudController.php
    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

    class TagClaudController extends AbstractController {
        public function tagClaud() {
            return $this->render(
                'components/tag_claud.html.twig'
            );
        }
    }
