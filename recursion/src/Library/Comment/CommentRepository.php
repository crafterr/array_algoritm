<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 01/03/2018
 * Time: 17:33
 */

namespace ArrayAlgoritm\Recursion\Library\Comment;


class CommentRepository
{
    private $db;

    private $data;

    public function __construct()
    {
        $this->db = new \PDO(
            'mysql:host=localhost;dbname=arrayalgoritm',
            'root',
            'root',
            [
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
            ]
        );
    }

    /**
     * @param Comment $comment
     */
    public function add(Comment $comment)
    {
        $this->db->beginTransaction();
        try {
            $stm = $this->db->prepare(
                'INSERT INTO comments (comments, username,datetime,parentId, postId) VALUES (?, ?, ?, ?, ?)'
            );
            $stm->execute([
                $comment->getComments(),
                $comment->getUsername(),
                $comment->getDatetime(),
                $comment->getParentId(),
                $comment->getPostId()
            ]);
            return $this->db->commit();
        } catch (\Exception $e) {
            $this->db->rollBack();
            echo $e->getMessage();
        }
    }

    /**
     * @param int $postId
     * @return array
     */
    public function fetchByPost(int $postId)
    {
        $this->db->beginTransaction();
        try {
            $sql = "Select * from comments where postID = :postID order by parentID asc, datetime asc";
            $stm = $this->db->prepare($sql,array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
            $stm->setFetchMode(\PDO::FETCH_OBJ);
            $stm->execute(array(':postID' => $postId));
            $result = $stm->fetchAll();
            foreach ($result as $r) {
                $comment = new Comment();
                $comment->setId($r->id);
                $comment->setComments($r->comments);
                $comment->setUsername($r->username);
                $comment->setDatetime(new \DateTime($r->datetime));
                $comment->setParentId($r->parentId);
                $comment->setPostId($r->postId);
                $this->data[] = $comment;
            }
            return $this->data;
        } catch (\Exception $e) {
            $this->db->rollBack();
            echo $e->getMessage();
        }
    }

}