<?

class ProductsController
{
    /*public function actionList()
    {
        echo 'ProductsController actionList';
        return true;
    }*/

    public function actionView($productId)
    {
        $sections = array();
        $sections = Category::getCategoriesList();

        $product = Products::getProductById($productId);

        require_once(ROOT.'/views/products/view.php');

        return true;
    }
}