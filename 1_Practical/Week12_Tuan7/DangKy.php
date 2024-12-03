<?php 
$erPass = "";
$contect = "";

if(isset($_POST['Dangky'])){
    if(empty($_POST['txtUser'])) {
        $erPass = "Bắt buộc nhập user";
    }

    if(empty($_POST['txtPass'])) {
        $erPass = "Bắt buộc nhập Pass";
    }

    $txtUser = $_POST['txtUser'];
    $txtMail = $_POST['txtMail'];

    $contect = "UserName: ". $txtUser. "<br> Email: ". $txtMail;
}

?>

<h1 style="color: blue; text-align: center;">ĐĂNG KÝ</h1>

<form action="" method="POST">
    <table>
        <tr>
            <td><b>User Name:</b></td>
            <td><input type="text" name="txtUser" id=""></td>
            <td><span style="color: red;">*</span></td>
        </tr>
        <tr>
            <td><b>PassWord:</b></td>
            <td><input type="password" name="txtPass" id=""></td>
            <td>
                <span style="color: red;">*</span>
                <span style="color: red;"><?php echo $erPass; ?></span>
            </td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><input type="text" name="txtMail" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Đăng ký" name="Dangky"></td>
        </tr>
    </table>
    <?php echo $contect; ?>
    
</form>