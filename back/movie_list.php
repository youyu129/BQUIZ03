<?php
    include_once "../api/db.php";

    $rows = $Movie->all(" order by rank");
    foreach ($rows as $idx => $row):
        $prev = ($idx != 0) ? $rows[$idx - 1]['id'] : $row['id'];
        $next = ($idx != (count($rows) - 1)) ? $rows[$idx + 1]['id'] : $row['id'];
    ?>
	<div style="display:flex;align-items:center;border-bottom:1px solid #ccc" class='movie-item'>
	    <div style="width:10%;">
	        <img src="./upload/<?php echo $row['poster']; ?>" style="width:80px;height:100px;">
	    </div>
	    <div style="width:10%;">
	        分級: <img src="./icon/03C0<?php echo $row['level']; ?>.png" alt="">
	    </div>
	    <div style="width:80%;">
	        <div style="display:flex;text-align:center;justify-content:space-between;">
	            <div>片名:<?php echo $row['name']; ?></div>
	            <div>片長:<?php echo $row['length']; ?></div>
	            <div>上映時間:<?php echo $row['ondate']; ?></div>
	        </div>
	        <div>
	            <button class="show"
	                data-id="<?php echo $row['id']; ?>"><?php echo($row['sh'] == 1) ? '隱藏' : '顯示'; ?></button>
	            <button class="sw" data-id="<?php echo $row['id']; ?>" data-sw="<?php echo $prev; ?>">往上</button>
	            <button class="sw" data-id="<?php echo $row['id']; ?>" data-sw="<?php echo $next; ?>">往下</button>
	            <button onclick="location.href='?do=edit_movie&id=<?php echo $row['id']; ?>'">編輯電影</button>
	            <button class="del" data-id="<?php echo $row['id']; ?>">刪除電影</button>
	        </div>
	        <div>
	            劇情介紹：<?php echo nl2br($row['intro']); ?>
	        </div>
	    </div>

	</div>
	<!-- <hr> -->
	<?php endforeach; ?>