<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .myPhepTinh {
            color : red;
        }
    
    </style>
</head>

<body>
    
</body>
</html>
<h4>
Bài 1
</h4>
<div class="myPhepTinh">
    <?php 
        $txt = "Phép Tính";
        echo $txt;
    ?>

    
</div>
<h4>
Bài 2
</h4>
<?php 
 define('PI',3.14);
 echo "Hang So = ".PI."<br>";
?>
<div class="so">
<h4>Bài 3</h4>
    <?php 
    $i = 0;
        for ($i=1; $i <= 30; $i++) { 
            if($i%2 !=0 ){
                echo " "."<span style = 'font-weight: bold'>$i</span>";
            }else{
                echo " "."<span style = 'color:blue;font-weight: bold'>$i</span>";
            }
        }
    ?>
</div>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table, th, td{
    border:1px solid black;
}
table{
    border-collapse:collapse;
}
    </style>

    <h4>Bài 4</h4>
    <table>
        <?php 
            for($i=1;$i<=10;$i++){
                echo "<tr><tr>";
                for($j =1;$j<=3;$j++){
                    echo "<td>Cot $i Hang $j<td>";
                }
            }
         ?>   
    </table>
</body>
</html>

<!-- Bài 5 -->
<h4>Bài 5</h4>
<label>Ngày</label>
<select>
<?php 
for ($i=1; $i <= 30; $i++) {
    echo "<option>$i</option>";
}
?>
</select>
<label>Tháng</label>
<select>

<?php 
for ($i=1; $i <= 12; $i++) {
    echo "<option>$i</option>";
}
?>
</select>
<label>Năm</label>
<select>

<?php 
for ($i=1990; $i <= 2020; $i++) {
    echo "<option>$i</option>";
}
?>
</select>
<!-- Bài 6 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<h4>Bài 6</h4>

<div class="conntainer">
    <div class="cacnh">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
          
            <li class="nav-item dropdown">
          
                <a class="nav-link dropdown-toggle" href="sanpham.php?id=0" id="dropdownId" >Sản Phẩm</a>
                
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="sanpham.php?id=1">Sản Phẩm 1</a>
                    <a class="dropdown-item" href="sanpham.php?id=2">Sản Phẩm 2</a>
                </div>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Gioi Thiệu</a>
            </li>
        </ul>
    </div>
</div>

</body>
</html>