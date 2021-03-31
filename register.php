<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <?php require_once('headfile.php'); ?>
</head>

<body style="padding-top: 58px;">
    <section id="mainmenu">
        <?php require_once('navbar.php'); ?>
    </section>
    <!-- content -->
    <section id="content">
        <!-- 新內容放這裡 -->
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>會員註冊頁面</h1>
                    <p>請輸入相關資料,*為必須輸入欄位</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-2 text-left">
                    <form id="reg" name="reg" method="post" action="register.php">
                        <div class="row form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="*請輸入Email帳號">
                            <br>
                        </div>
                        <div class="row form-group">
                            <input type="password" class="form-control" id="pw1" name="pw1" placeholder="*請輸入密碼">
                            <br>
                        </div>
                        <div class="row form-group">
                            <input type="password" class="form-control" id="pw2" name="pw2" placeholder="*請再次確認密碼">
                            <br>
                        </div>
                        <div class="row form-group">
                            <input type="text" class="form-control" id="cname" name="cname" placeholder="*請輸入姓名">
                            <br>
                        </div>
                        <div class="row form-group">
                            <input type="text" class="form-control" id="tssn" name="tssn" placeholder="*請輸入身份證字號">
                            <br>
                        </div>
                        <div class="row form-group">
                            <input type="text" class="form-control" id="birthday" name="birthday" ready onclick="WdatePicker({dateFmt:'yyyy-MM-dd'});" placeholder="*請選擇生日">
                            <br>
                        </div>
                        <div class="row form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="*請輸入手機號碼">
                            <br>
                        </div>
                        <div class="row form-group">
                            <select name="myCity" id="myCity" class="form-control">
                                <option value="">請選擇市區</option>
                                <?php $city="SELECT * FROM `city`where State=0"; 
                                $city_rs=mysqli_query($link,$city);
                                while($city_rows=mysqli_fetch_array($city_rs)){?>
                                
                                
                                
                                <option value=""></option>
                            </select>
                        </div>
                        
                        <div class="row form-group">
                            <select name="myTown" id="myTown" class="form-control">
                                <option value="">請選擇地區</option>
                            </select>
                        </div>
                        <br>
                        <div class="row form-group">
                            <p id="zipcode" name="zipcode">郵遞區號: 地址</p>
                            <input type="hidden" id="myZip" name="myZip" value="">
                            <input type="text" class="form-control" name="address" id="address" placeholder="請輸入後續地址">
                        </div>
                        <br>
                        <div class="row form-group">
                            <p style="margin-bottom:0px;">上傳相片圖示:</p>
                            <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" title="請上傳相片圖示" accept="image/x-png,image/jpeg,image/gif,image/jpg">
                            <button type="button" class="btn btn-danger" onclick="ajaxFileUpload();return false";style="margin-top:5px;">開始上傳</button>
                            <img id="showimg" name="showimg" src="" alt="" class="img-fluid" style="display:none;">
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="footer">
        <!-- footer -->
        <?php require_once('footer.php'); ?>
    </section>
    <!-- js -->
    <?php require_once('jsfile.php'); ?>
</body>

</html>