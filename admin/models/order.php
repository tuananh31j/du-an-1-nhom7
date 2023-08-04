<?php
// danh sách phân trang
function getListOrder($fil, $sort,$kw,$offset) {
    $filter = 1;
    $sortCase = "order by order_id desc";
    $keyword = 1;
    if($kw != 0 && $kw != '') {
        $keyword = "customer_name like '%$kw%' or customer_name like '$kw%' or customer_name like '%$kw'";
    }
    if($sort != 0 && $sort == 'old') {
        $sortCase = "order by order_id asc";
    }
    if($sort != 0 && $sort == 'new') {
        $sortCase = "order by order_id desc";
    }
    if($fil != '') {
        $filter = "status = $fil";
    }
    $sql = "select * from orders "; 
    $sql .= "where $keyword and $filter $sortCase limit 8 offset $offset";
    return pdo_query($sql);
}
// toàn bộ 
function getAllOrder($fil, $sort,$kw) {
    $filter = 1;
    $sortCase = "order by order_id desc";
    $keyword = 1;
    if($kw != 0 && $kw != '') {
        $keyword = "customer_name like '%$kw%' or customer_name like '$kw%' or customer_name like '%$kw'";
    }
    if($sort != 0 && $sort == 'old') {
        $sortCase = "order by order_id asc";
    }
    if($sort != 0 && $sort == 'new') {
        $sortCase = "order by order_id desc";
    }
    if($fil != '') {
        $filter = "status = $fil";
    }
    $sql = "select * from orders "; 
    $sql .= "where $keyword and $filter $sortCase";
    return pdo_query($sql);
}
// chỉ tiết đơn hàng
function getListDetails($id) {
    $sql = "select order_detail.*, product.name as namePro from order_detail ";
    $sql .= "inner join product on product.product_id = order_detail.product_id ";
    $sql .= "where order_id = ?"; 
    return pdo_query($sql ,$id);
}
// cập nhật trạng thái
function updateOrderStatus($id,$status,$update_at) {
    $sql = "UPDATE `orders` SET `update_at` = ?, `status` = ? WHERE `orders`.`order_id` = ?;";
    pdo_execute($sql,$update_at,$status,$id);
}
?>