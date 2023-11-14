<!-- 07_Hoàng Thị Minh Giang_Bài kiểm tra số 1 -->
<!-- Phần 1: Trắc nghiệm 
Câu 1: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
Câu 2: True
Câu 3: a
Câu 4: a
Câu 5: b -->
<!-- Phần 2: Tự luận -->
<?php
//Câu 1: 
function generateFibonacci($n) {
    $x = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $x[$i] = $x[$i - 1] + $x[$i - 2];
    }
    return $x;
}

$fibonacci = generateFibonacci(10);
echo "Dãy số Fibonacci đầu tiên có 10 phần tử là: ";
foreach ($fibonacci as $giatri) {
    echo $giatri . " ";
}

echo "<hr>";
//câu 2:
// Tạo một mảng kết hợp chứa thông tin về học sinh
$thongtinhs = array(
    array("id" => 1, "ten" => "Giang", "tuoi" => 20, "lop" => 90),
    array("id" => 2, "ten" => "Trang", "tuoi" => 18, "lop" => 92),
    array("id" => 3, "ten" => "Linh", "tuoi" => 20, "lop" => 78),
    array("id" => 4, "ten" => "Thu", "tuoi" => 18, "lop" => 85)
);

// Hiển thị thông tin của tất cả học sinh trong mảng
echo "Thông tin của tất cả học sinh trong mảng: <br>";
foreach ($thongtinhs as $hs) {
    echo "ID: " . $hs["id"] . ", Tên: " . $hs["ten"] . ", Tuổi: " . $hs["tuoi"] . ", Lớp: " . $hs["lop"] . "<br>";
}

// Viết hàm để tìm học sinh có điểm cao nhất (lop)
function timHsDiemCao($thongtinhs) {
    $diemcaonhat = 0;
    $hsdiemcaonhat = null;
    foreach ($thongtinhs as $hs) {
        if ($hs["lop"] > $diemcaonhat) {
            $diemcaonhat = $hs["lop"];
            $hsdiemcaonhat = $hs;
        }
    }
    return $hsdiemcaonhat;
}

// Tìm học sinh có điểm cao nhất (lop)
$hsdiemcaonhat = timHsDiemCao($thongtinhs);
echo "Học sinh có điểm cao nhất là: " . $hsdiemcaonhat["ten"] . ", Điểm: " . $hsdiemcaonhat["lop"];
