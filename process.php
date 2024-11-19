<?php
$servername = "localhost";
$username = "root"; // استخدم اسم المستخدم الخاص بك
$password = ""; // استخدم كلمة المرور الخاصة بك
$dbname = "transportation_db";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استلام البيانات من النموذج
$carrier_number = $_POST['carrier_number'];
$unit_number = $_POST['unit_number'];
$registry_number = $_POST['registry_number'];
$registry_state = $_POST['registry_state'];
$unit = $_POST['unit'];
$carrier_name = $_POST['carrier_name'];
$representative = $_POST['representative'];
$address = $_POST['address'];
$truck_count = $_POST['truck_count'];
$bank = $_POST['bank'];
$agency = $_POST['agency'];
$bank_address = $_POST['bank_address'];
$bank_number = $_POST['bank_number'];
$rib_number = $_POST['rib_number'];
$contract_date = $_POST['contract_date'];
$code_trans = $_POST['code_trans'];

// SQL لإدخال البيانات في الجدول
$sql = "INSERT INTO carriers (carrier_number, unit_number, registry_number, registry_state, unit, carrier_name, representative, address, truck_count, bank, agency, bank_address, bank_number, rib_number, contract_date, code_trans)
VALUES ('$carrier_number', '$unit_number', '$registry_number', '$registry_state', '$unit', '$carrier_name', '$representative', '$address', $truck_count, '$bank', '$agency', '$bank_address', '$bank_number', '$rib_number', '$contract_date', '$code_trans')";

if ($conn->query($sql) === TRUE) {
    echo "تم إضافة البيانات بنجاح!";
} else {
    echo "خطأ في إضافة البيانات: " . $conn->error;
}

// غلق الاتصال بقاعدة البيانات
$conn->close();
?>
