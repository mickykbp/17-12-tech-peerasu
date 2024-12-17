<!DOCTYPE html>
<html lang="th">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles1.css">
</head>
<body>
    <div class="content">
    <div>
        <h1>บริษัท บพิตรพิมุขการค้า จำกัด</h3>
    </div>

    <div>
        <a href="main.php">
        <img class="home-icon" src= "images/home.png">กลับหน้าหลัก</img>
        </a>
    </div>

    <div>
        <h3>ลงทะเบียนข้อมูลลูกค้า</h3>
    </div>

    <form name= "frmcustomer" method= "POST" action= "customeradd.php">
        <div class="block">
        <div>
            <label for="cus_id">รหัสลูกค้า</label>
        </div>
        
        <div>
            <input type="text" name="cus_id" id="cus_id">
        </div>
        </div>

        <div class="block">
        <div>
            <label for="cus_firstname">ชื่อ</label>
        </div>
        
        <div>
            <input type="text" name="cus_firstname" id="cus_firstname">
        </div>
        </div>

        <div class="block">
        <div>
            <label for="cus_lastname">นามสกุล</label>
        </div>
        
        <div>
            <input type="text" name="cus_lastname" id="cus_lastname">
        </div>
        </div>
        
        <div class="block">
        <div>
            <label for="cus_address">ที่อยู่</label>
        </div>
        
        <div>
            <textarea name="text" name="cus_address" id="cus_address"></textarea>
        </div>
        </div>
        
        <div class="block">
        <div>
            <label for="cus_tel">เบอร์โทรศัพท์</label>
        </div>
        
        <div>
            <input type="text" name="cus_tel" id="cus_tel">
        </div>
        </div>

        <div class="block">
        <div>
            <label for="cus_email">อีเมล์</label>
        </div>
        
        <div>
            <input type="text" name="cus_email" id="cus_email">
        </div>
        </div>
        
        <div class="block">
        <div>
            <input class="submit" type="submit" name="cus_submit" value="ลงทะเบียน">
        </div>
        </div>
    </form>
    </div>
</body>
</html>