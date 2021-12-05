<?php 
    include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Material</title>
        <link rel="stylesheet" href="style.css">
    </head> 

    <body>
    <div class="header">
    <h1>เพิ่มข้อมูลครุภัณฑ์</h1>
    </div>

    <form action="material_process.php" method="post">
        <div class="input-group">
        <label>หมายเลขครุภัณฑ์</label>
        <input type="text" name="material_id">
        </div>

        <div class="input-group">
        <label>ชื่อครุภัณฑ์</label>
        <input type="text" name="material_name"><br>
        </div>

        <div class="input-group">
        <label>วันที่ได้มา</label>
        <input type="text" name="material_in"><br>
        </div>

        <div class="input-group">
        <label>รายละเอียด</label>
        <input type="text" name="material_details"><br>
        </div>

        <div class="input-group">
        <label>หมายเลขซีเรียล</label>
        <input type="text" name="material_sn"><br>
        </div>

        <div class="input-group">
        <label>ราคา</label>
        <input type="text" name="material_price"><br>
        </div>

        <div class="input-group">
        <label>สถานที่ตั้ง</label>
        <input type="text" name="material_location"><br>
        </div>

        <input type="submit" name="Submit" class="btn" value="เพิ่มข้อมูล">
    
    </form>
    <a href="groub_table.php" >ตารางกลุ่มผู้ใช้งานระบบ - Groub</a><br>
    <a href="division_table.php" >ตารางข้อมูลหน่วยงาน - Division</a><br>
    <a href="user_table.php" >ตารางแสดงผู้ใช้งานระบบ - User</a><br>
    <a href="material_table.php" >ตารางข้อมูลครุภัณฑ์ - Matrerial</a><br>
    </body>
</html> 