<?php
/*
** filename: member.php
** description: 範例PHP網路應用程式會員資料頁
** author: Brian Tao | brian.tao@informc.com
** modification history:
**** 2017.07.20: created
*/

include_once("../library/config.php");
?>
<html>
<head>
  <title><?php echo $config['sys_title']; ?></title>
  <link rel="stylesheet" href="../css/global.css" />    
</head>
<body>
<h1 id="header">&nbsp;</h1>
<form name="formMember" id="formMember" method="POST">
  <table>
    <tr>
      <td>員工編號</td>
      <td><input type="text" name="memId" id="memId" readOnly></td>
    </tr>
    <tr>
      <td>員工姓名</td>
      <td><input type="text" name="memName" id="memName"></td>
    </tr>
    <tr>
      <td>密碼（若需修改密碼再填寫）</td>
      <td><input type="password" name="memPwd" id="memPwd"></td>
    </tr>
    <tr>
      <td>職稱</td>
      <td><input type="text" name="title" id="title" readOnly></td>
    </tr>
    <tr>
      <td>資料更新時間</td>
      <td><input type="text" name="lastModified" id="lastModified" readOnly></td>
    </tr>
  </table>
  <input type="hidden" name="action" value="saveData">
  <input type="submit" value="儲存">
  <input type="button" id="loadSalary" value="檢視歷史調薪紀錄">
  <input type="button" id="changeSalary" value="新增調薪紀錄">
  <input type="button" id="logout" value="登出">
</form>
<table>
  <tr>
        <td id="after">調整後薪資</td>
        <td><input type="text" name="salary" id="salary" required /></td>
      </tr>
      <tr>
        <td id="why">調薪原因</td>
        <td><input type="text" name="reason" id="reason" required /></td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="date" value="<?=date("Y-m-d")." 00:00:00";?>" id="startDateTime">
          <button onclick="send()" id="send">送出</button>
        </td>
      </tr>
</table>
<div id="salaryTable"></div>
<!-- js最適放置為 body tag 結束前 -->
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/member.js"></script>
</body>
</html>