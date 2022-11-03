<?php

namespace App\Factory;

use App\Entity\Post;
use Symfony\Bundle\MakerBundle\Str;
use Symfony\Config\Framework\HttpClient\DefaultOptions\RetryFailedConfig;

class PostFactory
{
    public function create(string $title, string $body, String $summary=null, string $status='dratf'):Post
    {
       $post = new Post();
       $post -> setTitle($title);
       $post -> setBody($body);
       if($summary){
        $post -> setSummary($summary);
       }else{
        $post -> setSummary($this->sliceBodyToSummary($body));
       }
       $post -> setStatus($status);

       return $post;
    }

    private function sliceBodyToSummary(string $body, int $length=140)
    {   
        # strip_tags()方法可以去除HTML标签
        
        return mb_substr(strip_tags($body), 0, $length);
    }
}