<?php
require_once "/xampp/htdocs/du-an-1-nhom7/global.php";
require_once "/xampp/htdocs/du-an-1-nhom7/pdo.php";


require_once "./view/layout/sideLeft.php";
if(isset($_GET['url'])) {
    switch ($_GET['url']) {
        
        
    //ORDER
        //danh sách đơn hàng
    case 'order':
        # code...
        break;

        //chi tiết đơn hàng
    case 'order-detail':
        # code...
        break;

        //thêm/chỉnh sửa đơn hàng
    case 'order-edit':
        # code...
        break;

        //cập nhật trạng thái đơn hàng
    case 'order-update-status':
        # code...
        break;
        
        
        
    //CATEGORY
        //danh sách danh mục có trạng thái bằng 1(on)
    case 'category':
        # code...
        break;

        //chỉnh sửa danh mục
    case 'category-update':
        # code...
        break;

        //xóa danh mục. Nếu có khóa ngoại thì chỉ tắt trạng thái sang 0(off)
    case 'category-delete':
        # code...
        break;
        

        
    //PRODUCT
        //danh sách sản phẩm. Phải có trạng thái là 1(on)
    case 'product':
        # code...
        break;

        //chỉnh sửa sản phẩm
    case 'product-update':
        # code...
        break;

        //xóa sản phẩm. Nếu có khóa ngoại thì chuyển trạng thái sang 0(off)
    case 'product-delete':
        # code...
        break;


    case 'customer':
        # code...
        break;
    case 'comment':
        # code...
        break;
    case 'contact':
        # code...
        break;
    default:
        require_once "./view/dashboard/dashboard.php";
        break;
}
}else{
    require_once "./view/pages/dashboard/dashboard.php";
    
}

require_once "./view/layout/footer.php";
?>