<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
    $postManager = new OC\Blog\Model\PostManager();
    $posts = $postManager->getPosts(); 

    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new OC\Blog\Model\PostManager();
    $commentManager = new OC\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new OC\Blog\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function viewComment()
{
    $commentManager = new OC\Blog\Model\CommentManager();
    $comment = $commentManager -> getComment($_GET['id']);

    require('view/frontend/editView.php');
}

    function editComment($comment, $id)
{
    $commentManager = new OC\Blog\Model\CommentManager();
    $newComment = $commentManager -> updateComment($_POST['comment'], $_GET['id']);

    if($newComment == false){
        throw new Exception('Impossible de modifier le commentaire !');
    }
    else{
        echo 'commentaire : '.$_POST['comment'];
        header('Location: index.php?action=viewComment&id='.$_GET['id']);
    }
}