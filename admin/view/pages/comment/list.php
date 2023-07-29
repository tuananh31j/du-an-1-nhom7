<!-- CONTENT -->
<div class=" col ">
    <div class="container">
        <h3 class="text-center my-5">Bình luận</h3>
        <div class="d-flex ">
            <!-- thêm sản phẩm -->

            <a href="index.php?url=comment&act=add"
                class="bg-success h-25 p-1 px-2 rounded-2 text-light m-3 text-decoration-none">Thêm bình
                luận <i class="fa-solid fa-plus"></i></a>

            <!-- fillter -->
            <div class="dropdown m-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-filter"></i> Sắp xếp
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?url=comment&act=list&filter=new">Mới nhất</a></li>
                    <li><a class="dropdown-item" href="index.php?url=comment&act=list&filter=old">Cũ nhất</a></li>
                </ul>
            </div>
            <!-- tìm kiếm -->
            <div class="m-3">
                <form action="index.php?url=comment&act=list" method="post">
                    <input class="p-1 rounded-2" type="text" name="keyword" placeholder="nội dung tìm kiếm...">
                    <input type="submit" name="btn-search" value="Tìm kiếm"
                        class="p-1 border-1 text-light rounded-2 bg-black">
                    <p class="text-danger"><?=isset($errKw)?$errKw:''?></p>
                </form>
            </div>
        </div>

        <!-- content -->
        <div>
            <table class="table table-hover table-bordered text-center">
                <thead style="border: 2px solid black">
                    <tr>
                        <th>#MÃ</th>
                        <th>User</th>
                        <th>Sản phẩm</th>
                        <th>Ngày cập nhật</th>
                        <th>Ngày sửa</th>
                        <th>Nội dung</th>
                        <th style="width: 170px;">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($comments as $item){ ?>
                    <tr>

                        <td>#<?=isset($item['cmt_id'])?$item['cmt_id']:''?></td>
                        <td><?=isset($item['customer.name'])?$item['customer.name']:''?></td>
                        <td><?=isset($item['product.name'])?$item['product.name']:''?></td>
                        <td><?=isset($item['comment.create_at'])?$item['comment.create_at']:''?></td>
                        <td><?=isset($item['comment.update_at'])?$item['comment.update_at']:''?></td>
                        <td><?php $flag = 0; for($i = 0; $i < strlen($item['content']); $i++) {
                            echo $item['content'][$i];
                            $flag++;
                            if($flag == 15) {
                                echo " </br> ";
                                $flag = 0;
                            }
                        }?></td>
                        <td><button onclick="confirmDelete('comment&act=delete&id=<?=$item['cmt_id']?>')"
                                class="border-0 bg-danger text-light p-1 rounded-2">Xóa</button> |
                            <a href="index.php?url=comment&act=details&id=<?=$item['cmt_id']?>"
                                class="text-decoration-none bg-info text-light p-1 rounded-2">Chi tiết</a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>