<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Category;
use mysql_xdevapi\Exception;
use RedBeanPHP\R;
use shop\App;
use shop\libs\Pagination;

class CategoryController extends AppController {

    public function viewAction(){
        $alias = $this->route['alias'];
        $category = R::findOne('category', 'alias = ?', [$alias]);
        if (!$category){
            throw new \Exception('Page category not found.', 404);
        }

        //breadcrumbs
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);

        //categories
        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;
        $categories = R::find('category', "id IN ($ids)");

        //pagination
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = R::count('product', "category_id IN ($ids)");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();

        $products = R::find('product', "category_id IN ($ids) LIMIT $start, $perpage");

        $this->setMeta($category->title, $category->description, $category->keyworlds);
        $this->set(compact('products', 'breadcrumbs', 'categories', 'category', 'pagination', 'total'));
    }
}