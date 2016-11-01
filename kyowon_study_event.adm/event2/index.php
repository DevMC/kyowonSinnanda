<?
include '../include/config.php';
include ADMROOT.'/include/header.php';
//이벤트구분
$eventGugun = "event2";
//검색어
$src_name = $_REQUEST["src_name"];
$src_acc_device = $_REQUEST["src_acc_device"];
$src_regdate = $_REQUEST["src_regdate"];

if(!empty($_REQUEST["page"])){
    $pageNum = $_REQUEST["page"];
}else{
    $pageNum = 1;
}

$listview_num = 15;
$paging_num = 15;

$query = "SELECT COUNT(*) FROM ".EVENT_TABLE." WHERE evt_gubun = '$eventGugun' ";
if(!empty($src_name)){
    $query = $query."AND name LIKE '%$src_name%' ";
}
if(!empty($src_acc_device)){
    $query = $query."AND acc_device='$src_acc_device' ";
}
if(!empty($src_regdate)){
    $query = $query."AND DATE_FORMAT(regdate,'%Y-%m-%d')='$src_regdate' ";
}
$stmt=$dbh->prepare($query);                       
$stmt->execute();
$stmt->bindColumn(1, $totalCount);
while($row=$stmt->fetch()){}
$startNum = ($pageNum-1) * $paging_num;

?>
<script type="text/javascript">
<!--
    function goSearch(){
        $.ajax({
            type: "POST",
            url: "<?=ADMDOMROOT?>/include/event_proc.php",
            data: $("#searchFrom").serialize(),
            success: function(result){
                location.reload();
            },
            error: function(e){}
        });
    }
    function goDel(str){
        if(confirm("삭제하시겠습니까?")){
            $.ajax({
                type: "POST",
                url: "<?=ADMDOMROOT?>/include/event_proc.php",
                data: "pmode=del&idx="+str,
                success: function(result){
                    location.reload();
                },
                error: function(e){}
            });
        }
    }
    function download_xcel(str){
        location.href="<?=ADMDOMROOT?>/include/user_excel.php?event="+str;
    }
//-->
</script>
<div class="panel panel-default" style="margin:0 auto">
    <div class="panel-heading">
        <h3 class="panel-title" style="font-weight:700"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>&nbsp;이벤트2(맞춤학습)</h3>
    </div>  
    <div class="panel-body">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" id="searchFrom" class="form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" name="src_name" id="name" value="<?=$src_name?>" placeholder="이름">
                  </div>
                  <div class="form-group">
                    <select name="src_acc_device" class="form-control">
                        <option value="">접속기기</option>
                        <option value="PC" <?if($src_acc_device == "PC"){echo "selected";}?>>PC</option>
                        <option value="Mobile" <?if($src_acc_device == "Mobile"){echo "selected";}?>>Mobile</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="src_regdate" value="<?=$src_regdate?>" id="datepicker" placeholder="참여날짜">
                  </div>
                  <button type="submit" class="btn btn-primary">조회</button>
                  
                  <button type="button" class="btn btn-success pull-right" onclick="javascript:download_xcel('<?=$eventGugun?>');"><?=strtoupper($eventGugun);?> 유저데이터 다운</button>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
            <tbody>
                <tr style="background:#eee">
                    <th style="width:auto;text-align:center;">No.</th>
                    <th style="width:auto;text-align:center;">이름</th>
                    <!-- <th style="width:auto;text-align:center;">성별</th> -->
                    <th style="width:auto;text-align:center;">연락처</th>
                    <?if($eventGugun == "event3"){?><th style="width:auto;text-align:center;">완료단계</td><?}?>
                    <?if($eventGugun == "event2"){?><th style="width:auto;text-align:center;">경품</td><?}?>                  
                    <th style="width:auto;text-align:center;">SNS공유</th>
                    <th style="width:auto;text-align:center;">접속기기</th>
                    <th style="width:auto;text-align:center;">유입경로</th>
                    <th style="width:auto;text-align:center;">참여날짜</th>
                    <th style="width:auto;text-align:center;">삭제</th>
                </tr>
            <?
            $num = $totalCount-$startNum;
            $query = "SELECT idx, name, gender, phone, fb, tw, ks, kt, stage, gift, acc_device, acc_referer, regdate FROM ".EVENT_TABLE." WHERE evt_gubun = '$eventGugun' ";
            if(!empty($src_name)){
                $query = $query."AND name LIKE '%$src_name%' ";
            }
            if(!empty($src_acc_device)){
                $query = $query."AND acc_device='$src_acc_device' ";
            }
            if(!empty($src_regdate)){
                $query = $query."AND DATE_FORMAT(regdate,'%Y-%m-%d')='$src_regdate' ";
            }
            $query = $query."ORDER BY idx DESC LIMIT $startNum, $listview_num ";
            $stmt=$dbh->prepare($query);                       
            $stmt->execute();
            $stmt->bindColumn(1,$idx);
            $stmt->bindColumn(2,$name);
            $stmt->bindColumn(3,$gender);
            $stmt->bindColumn(4,$phone);
            $stmt->bindColumn(5,$fb);
            $stmt->bindColumn(6,$tw);
            $stmt->bindColumn(7,$ks);
            $stmt->bindColumn(8,$kt);
            $stmt->bindColumn(9,$stage);
            $stmt->bindColumn(10,$gift);
            $stmt->bindColumn(11,$acc_device);
            $stmt->bindColumn(12,$acc_referer);
            $stmt->bindColumn(13,$regdate);
            while($row=$stmt->fetch()){
                if($gender == "M"){
                    $gender = "남";
                }else if($gender == "F"){
                    $gender = "여";
                }
            ?>
            <tr align="center">
                <td><?=$num?></td>
                <td><?=$name?></td>
                <!-- <td><?=$gender?></td> -->
                <td><?=$phone?></td>
                <?if($eventGugun == "event3"){?><td><?=$stage?></td><?}?>
                <?if($eventGugun == "event2"){?><td><?=$gift?></td><?}?>                
                <td>
                <?
                if($fb > 0){
                    echo "<img src='".ADMDOMROOT."/images/fb.jpg'>";
                }
                if($tw > 0){
                    echo "&nbsp;<img src='".ADMDOMROOT."/images/tw.jpg'>";
                }
                if($ks > 0){
                    echo "&nbsp;<img src='".ADMDOMROOT."/images/ks.jpg'>";
                }
                if($kt > 0){
                    echo "&nbsp;<img src='".ADMDOMROOT."/images/kt.jpg'>";
                }
                ?>
                </td>
                <td><?=$acc_device?></td>
                <td style="max-width: 600px; overflow: hidden; text-overflow:ellipsis; white-space: nowrap;" title="<?=$acc_referer?>"><?=$acc_referer?></td>
                <td><?=$regdate?></td>
                <td><button type="button" class="btn btn-danger btn-sm" onclick="goDel(<?=$idx?>)">삭제</button></td>
            </tr>
            <?
            $num--; 
            }
            if($totalCount == "0"){
            ?>
            <tr style="cursor:pointer">
                <td colspan="9" style="text-align:center">등록된 참여자 정보가 없습니다.</td>
            </tr>
            <?}?>
            </tbody>
            </table>
            <?=pageing(EVENT_TABLE,'','src_name='.$src_name.'&src_acc_device='.$src_acc_device.'&src_regdate='.$src_regdate.'',$totalCount,$pageNum,$listview_num,$paging_num)?>
        </div>
    </div>
</div>
<?include ADMROOT.'/include/footer.php';?>