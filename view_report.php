<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานการยืมสินค้า</title>
</head>

<body>
<a href="ajax.php">กลับหน้าหลัก</a>
    <div class="">
        <h1 class="">รายงานการยืมอุปกรณ์</h1>

        <!-- Form to enter user ID -->
        <form action="report.php" method="GET">
            <div class="form-group">
                <label for="userID">กรุณาใส่ไอดีผู้ใช้:</label>
                <input type="text" class="form-control" id="userID" name="user_id" placeholder="กรอกไอดีผู้ใช้">
            </div>
            <button type="submit" class="btn btn-primary">ดูรายงาน</button>
        </form>

        <!-- Display report result here -->
        <div id="reportResult" class=""></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
