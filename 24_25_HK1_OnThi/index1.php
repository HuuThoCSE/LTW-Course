//HTML
// Kiểm tra đầu vào
- Thêm onsubmit="return inpCheck()" vào form
- Xây dựng hàm trong script so sánh, dùng isNaN, if, so sánh logic


//CSS
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('uploads/<?php echo  $HinhAnh;?>') no-repeat center center fixed;
    background-size: cover; 
    color: white;
    text-shadow: 1px 1px 2px black;
}

//javascript
// // alert
alert('Không tìm thấy sách'); window.location.href = 'Read.php';

// // // Them thanh convert_cyr_string
echo "<script> 
alert('Thêm thành công'); 
window.location.href = 'DanhSachNV.php';
</script>";

// // // Thong bao truoc khi xoa
<td>
    <a href='XoaNV.php?id={$row['MaNV']}'
    onclick=\"return confirm('Bạn có chắc chắn muốn xóa nhân viên này.')\"
    ><button>Xóa</button></a> 
    <a href='SuaNV.php?id={$row['MaNV']}'><button>Cập nhật</button></a>
</td>


// // Chỉ chứa ký tự
if (!/^[a-zA-Z]+$/.test()])

// // sodienthoai
// // // Giới hạn chỉ 10 số
if (!/^\d{10}$/.test(txtSoDienThoai)) {}

// // // Kiểm tra chỉ chứa các số
if (!/^\d+$/.test(txtSoDienThoai)) {

// trim()
- loại bỏ tất cả các khoảng trắng (whitespace) ở đầu và cuối một chuỗi: `space`, '\t', '\n'

// 
document.querySelector('[name="dateNgaySinh"]').max = new Date().toISOString().splip('T')[0];

//PHP
// //Định dạng số tiền
<?php echo number_format($DonGia, 0, ',', '.'); ?> VND

// //Định dạng ngày sau khi lấy từ db
$HanSuDung = date('d/m/Y', strtotime($row['HSD'])); // Định dạng ngày

// //POST
$_SERVER['REQUEST_METHOD'] === 'POST'

// // File
// Tạo thư mục nếu chưa tồn tại
if(!is_dir('uploads')){
    mkdir('uploads', 0777, true);
}

move_uploaded_file($_FILES['HinhAnh']['tmp_name'], "uploads/". $_FILES['HinhAnh']['name']);


// //PHP-MYSQL
// // //Ketnoi
$conn = new mysqli ('localhost', 'root', '', '<name_database>');
if($conn->connect_error) die("Kết nối thất bại!")

// // // // mysqli_query
$connect = mysqli_connect($hostname,$username,$password,$databasename);
$sql = "SELECT * FROM loaisanpham";
$result = mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){?>
        <option value="<?php echo $row['MaLoai']; ?>">
            <?php echo $row['TenLoai']; ?>
        </option>
        <?php
    }
}else{
    echo "Không tìm thấy";
}