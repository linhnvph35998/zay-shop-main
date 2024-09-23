<body>

    <div class="wrapper">
        <div class="font-title">
            <h1>Sửa danh mục</h1>
        </div>
        <div class="form-content">
            <form action="index.php?act=editdm" method="POST" enctype="multipart/form-data">
                <div class="row-input">
                    <label> Mã danh mục </label> <br>
                    <input type="text" name="id" value="<?=$id?>">
                </div>
                <div class="row-input">
                    <label>Tên danh mục</label> <br>
                    <input type="text" name="name" value="<?=$name?>">
                </div>
                <div class="row-input">
                    <label>Ảnh </label> <br>
                    <img src="" alt="">
                    <input type="file" name="img">
                </div>
                <div class="row-btn">
                    <input type="submit" name="sua" value="Sửa">
                </div>
            </form>
        </div>
    </div>
</body>

<!-- END HEADER -->