<?php
use yii\helpers\Html;
use yii\grid\GridView;
?>
<div class="box" style="border: none;" id="staffLayer">
	<div class="box-header">
		<div class="row">
			<div class="input-group input-group-sm" style="width: 60%;margin: 0 auto">
	        	<input type="text" id="searchKeyword" class="form-control">
	            <span class="input-group-btn">
	            	<a type="button" href="javascript:void(0);" id="searchStaff"  class="btn btn-info btn-flat">搜索</a>
	            </span>
	      	</div>
		</div>
	</div>
	<div class="box-body">
        <table class="table table-bordered">
        	<tbody>
        		<tr>
        			<?php foreach($header as $k => $v):?>
        			<th><?=$v?></th>
        			<?php endforeach;?>
        		</tr>
        		<?php foreach($data as $kk => $info):?>
        			<tr>
        				<?php if(is_array($info) && !empty($info)):?>
							<?php foreach($info as $key => $value):?>
								<?php if(array_key_exists($key, $header)):?>
									<td>
										<?php 
											if($key == 'id'){
												echo "<input name=userId type='checkbox' value='".$value."' />";
											}else{
												echo $value;
											}
										?>
									</td>
								<?php endif;?>
							<?php endforeach;?>
						<?php endif;?>
        			</tr>
        		<?php endforeach;?>
        	</tbody>
        </table>
    </div>
</div>
<script type="text/javascript">

</script>
<?=$this->registerJs('
	var baseUrl = "'.Yii::$app->urlManager->createAbsoluteUrl(["layer/staff"]).'";
	$("#searchStaff").bind("click", function(){
		var searchContent = $("#searchKeyword").val();

		if(searchContent == ""){
			alert("请输入搜索关键词");
		}else{
			var newUrl = baseUrl+"?name="+searchContent;
			reloadContent(newUrl);
		}
	});

	function reloadContent(url)
	{
		var parentObj = $("#staffLayer").parent();

		parentObj.find("#modalBody").empty();
		parentObj.find("#modalBody").load(url);
	}
')?>


