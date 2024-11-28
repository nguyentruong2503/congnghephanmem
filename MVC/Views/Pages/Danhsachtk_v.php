<button type="button" class="btn btn-success" onclick="openModal()" data-toggle="modalx" data-target="#myModal" style="margin-top: 30px; margin-left: 30px;">
    <span class="fa-solid fa-book" >Thêm mới</span>
</button>
<hr>
<form method="post" action="http://localhost/congnghephanmem/Danhsachtk/timkiem" style= "max-width: 60rem; margin-inline: auto;">
    <div class="form-inline">
      <label style="width:150px;">Tên Tài Khoản</label>
      <input style="width:240px;" type="text" class="form-control" name="txtTentk" 
      value="<?php if(isset($data['Loaitaikhoan'])) echo $data['Loaitaikhoan'] ?>">
      <label style="width:150px;">Loại Tài Khoản</label>
      <select style = "width: 180px" type="text" name="txtLoaitk" class="dd1">
                    <option value="">---Tất Cả Tài Khoản---  </option>
                    <option value="<?php  echo 'User' ?>">Sinh Viên</option>
                    <option value="<?php  echo 'Department' ?>">Phòng Ban</option>
                    <option value="<?php  echo 'Admin' ?>">Admin</option>
                   </select>
      <button type="submit" class="btn btn-primary" name="btnTimkiem">Tìm kiếm</button>
   </div>
   <br>
   <div table-responsive>
   <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th> 
                <th>Tên Tài Khoản</th>          
                
                <th>Mật Khẩu</th>
                
                <th>Loại Tài Khoản</th>

                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(isset($data['dulieu'])&& mysqli_num_rows($data['dulieu'])>0){
                    $i=0;
                    while($row=mysqli_fetch_assoc($data['dulieu'])){
            ?>
                        <tr>
                            <td><?php echo (++$i) ?></td>
                            <td><?php echo $row['Tentaikhoan'] ?></td>
                            <td><?php echo $row['Matkhau'] ?></td>
                            <td><?php echo $row['Loaitaikhoan'] ?></td>
                            <td>
                                <a class="btn btn-outline-primary" 
                                href="http://localhost/congnghephanmem/Danhsachtk/sua/<?php echo $row['Tentaikhoan'] ?>">Sửa</a>
                                <a class="btn btn-outline-danger" 
                                    href="http://localhost/congnghephanmem/Danhsachtk/xoa/<?php echo $row['Tentaikhoan'] ?>"
                                    onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</a>
                            </td>
                        </tr>
            <?php
                    }
                }
            ?>
        </tbody>
    </table>

 
</form>
</div>

<div class="modalx" id="myModal" style="margin-top: 100px;">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Thêm Tài Khoản</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
       
        <div class="modal-body">
          <form action="http://localhost/congnghephanmem/Danhsachtk/themmoi" method="POST">
            <table width="100%">
              <tr>
                <td>Tên Tài Khoản:</td>
                <td>
                  <input style = "width: 280px" type="text" name="txtTentk"  value="<?php if(isset($data['Tentaikhoan'])) echo $data['Tentaikhoan'] ?>" />
                </td>
              </tr>
              
              <tr>
                <td>Mật Khẩu:</td>
                <td>
                  <input style = "width: 280px" type="number" name="txtMk"  value="<?php if(isset($data['Matkhau'])) echo $data['Matkhau'] ?>" />
                </td>
              </tr>
              <tr>
                <td>Loại Tài Khoản:</td>
                <td>
                   <select style = "width: 280px" type="text" name="txtLoaitk" >
                    <option value="">----Chọn Loại Tài Khoản----</option>
                    <option value="<?php  echo 'User' ?>">Sinh Viên</option>
                    <option value="<?php  echo 'Department' ?>">Phòng Ban</option>
                    <option value="<?php  echo 'Admin' ?>">Admin</option>
                   </select>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <div class="buttons-containerl"  >
                    <button class="button-arounder" name="btnSave" >Lưu</button>
                    
                  </div>                  
                </div>
                </td>
              </tr>
            </table>
          </form>

          
        </div>
      </div>
    </div>
  </div>