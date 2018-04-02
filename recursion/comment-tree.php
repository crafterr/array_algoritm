<?php
require_once '../vendor/autoload.php';
use ArrayAlgoritm\Recursion\Library\Comment\Comment;
use ArrayAlgoritm\Recursion\Library\Comment\CommentRepository;


$comment = new Comment();
$comment->setComments("Jakiś komentarz");
$comment->setDatetime(new DateTime());
$comment->setUsername("Crafter");
$comment->setParentId(0);
$comment->setPostId(1);

$commentRepo = new CommentRepository();

$commentRepo->add($comment);

$result = $commentRepo->fetchByPost(1);


//renderer add class

$comments = [];
foreach ($result as $row) {
    $comments[$row->getParentId()][] = $row;
}
function displayComment(array $comments, int $n) {
    if (isset($comments[$n])) {
        $str = "<ul>";
        foreach ($comments[$n] as $comment) {
            $str .= "<li><div class='comment'><span class='pic'>
            {$comment->getUserName()}</span>";
            $str .= "<span class='datetime'>{$comment->getDateTime()}</span>";
            $str .= "<span class='commenttext'>" . $comment->getComments() . "
            </span></div>";

            $str .= displayComment($comments, $comment->getId());
            $str .= "</li>";
        }

        $str .= "</ul>";

        return $str;
    }
    return "";
}

echo displayComment($comments, 0);

?>
<style>
ul {
list-style: none;
clear: both;
}

li ul {
margin: 0px 0px 0px 50px;
}

.pic {
display: block;
width: 50px;
height: 50px;
float: left;
color: #000;
background: #ADDFEE;
padding: 15px 10px;
text-align: center;
margin-right: 20px;
}

.comment {
float: left;
clear: both;
margin: 20px;
width: 500px;
}

.datetime {
clear: right;
width: 400px;
margin-bottom: 10px;
float: left;
}
</style>

