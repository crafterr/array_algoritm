<?php
/**
 * Created by PhpStorm.
 * User: crafter
 * Date: 26/02/2018
 * Time: 19:09
 */
namespace ArrayAlgoritm\Recursion\Library\Category;
class Category
{
    private $pdo;

    private $categories = [];

    private $index = 0;

    public function __construct(\PDOStatement $pdo)
    {
        $this->pdo = $pdo;

    }

    public function getPdo()
    {
        return $this->pdo;
    }

    public function buildCategories()
    {
        foreach($this->getPdo()->fetchAll() as $row) {
            $this->categories[$row->parentCategory][] = $row;
        }

       // return $this->categories;
    }

    /**
     * recursion method
     * @param int $index
     */
    public function showCategoryTree(int $index)
    {

        if (isset($this->categories[$index])) {
            foreach ($this->categories[$index] as $category) {
                echo str_repeat("-",$index).' '.$category->categoryName.'<br>';
                $this->categories[$index] = $category;
                $this->showCategoryTree($category->id);
            }
        }
        return;
    }
}