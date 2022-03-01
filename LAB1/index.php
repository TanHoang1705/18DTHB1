<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">   
    <meta name="author" content="TruongHuuLong">
    <link href="/LAB_01/site.css" rel="stylesheet"/>
    <title>Xếp loại kết quả tuyển sinh</title>
</head>
<body>
    <div id="wrapper">
        <h2>Xếp loại kết quả tuyển sinh</h2>
        <form action="#" method="post">
        <div class="row">
            <div class="lbltitle">
                <label>Điểm môn Toán</label>
            </div>
            <div class="lblinput">
                <input type="number" name="Toan" value=<?php echo isset($_POST["Toan"])? 
                $_POST["Toan"] : "" ; ?>"/>
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Điểm môn Lý</label>
            </div>
            <div class="lblinput">
                <input type="number" name="Ly" value=<?php echo isset($_POST["Ly"])? 
                $_POST["Ly"] : "" ; ?>"/>
            </div>
        </div>
        <div class="row">
            <div class="lbltitle">
                <label>Điểm môn Hóa</label>
            </div>
            <div class="lblinput">
                <input type="number" name="Hoa" value=<?php echo isset($_POST["Hoa"])? 
                $_POST["Hoa"] : "" ; ?>"/>
            </div>
        </div>
        <!-- khu vuc-->
        <div class="row">
            <div class="lbltitle">
                <label> Chọn Khu Vực </label>
            </div>
            <div class="lblinput">
                <select name="KhuVuc">
                    <option value="" selected> --Chọn Khu Vực--</option>
                    <option value="1"> Khu Vực 1 </option>
                    <option value="2"> Khu Vực 2 </option>
                    <option value="3"> Khu Vực 3 </option>
                    <option value="4"> Khu Vực 4 </option>
                    <option value="5"> Khu Vực 5 </option>
                </select>
            </div>
        </div>
        <!-- Gui form -->
        <div class="row">
            <div class="submit">       
                <input type="submit" name="btnsubmit" value="Xếp Loại"/>
            </div>
        </div>
    </form>
    <!-- tong diem-->
    <div id="result">
        <h2> Ket qua xep loai</h2>
        <div class="row">
            <div class="lbltitle">
                <label> Tổng điểm </label>
            </div>
    <div class="lbloutput">
        <?php
        echo isset ($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Hoa"] + $_POST["Ly"] : "";
        ?>
    </div>
</div>
    </div>
    <!-- Xep loai-->
    <div class="row">
    <div class="lbltitle">
        <label> Xếp Loại </label>
    </div>
    <div class="lbloutput">
        <?php
        if(isset($_POST["btnsubmit"])){
            $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
            if($TongDiem >= 24)
            echo "Giỏi";
            else if($TongDiem >=21)
            echo "Khá";
            else if($TongDiem >=15)
            echo "Trung Bình";
            else {
                echo "Yếu";
            }
        }
        ?>
    </div>
</div>
    <!--khu vuc-->
    <div class="row">
        <div class="lbltitle">
            <label> Điểm Ưu Tiên </label>
        </div>
        <div class="lbloutput">
            <?php
                if(isset($_POST["btnsubmit"]))
                {
                    $DiemUuTien = empty($_POST["KhuVuc"]) ? 0 : $_POST["KhuVuc"];
                    switch($DiemUuTien)
                    {
                                case 1: echo "1";
                                    break;
                                case 2: echo "2";
                                    break;
                                case 3: echo "3";
                                    break;
                                case 4: echo "4";
                                    break;
                                case 5: echo "5";
                                    break;        
                    }
                }
            ?>
        </div>
    </div>
    </div>
    
</body> 
</html>