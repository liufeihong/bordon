<?php 
defined('IN_PHPCMS') or exit('No permission resources.');
$server_list = getcache('downservers','commons');
foreach($server_list as $_r) if (in_array($_r['siteid'],array(0,$this->siteid))) $str .='<span class="ib" style="width:25%">'.$_r['sitename'].'</span>';
?>
<fieldset>
<legend>镜像服务器列表</legend>
<?php echo $str?>
</fieldset>
<table cellpadding="2" cellspacing="1" width="98%">
	<tr>
	<td>文件链接方式</td>
	<td>
      	<input name="setting[downloadlink]" value="0" type="radio" <?php if(!$setting['downloadlink']) echo 'checked';?>>
        链接到真实软件地址 
        <input name="setting[downloadlink]" value="1" type="radio" <?php if($setting['downloadlink']) echo 'checked';?>>
        链接到跳转页面
      
	</td>
	</tr>
	<tr>
	<td>文件下载方式</td>
	<td>
      	<input name="setting[downloadtype]" value="0" type="radio" <?php if(!$setting['downloadtype']) echo 'checked';?>>
        链接文件地址 
        <input name="setting[downloadtype]" value="1" type="radio" <?php if($setting['downloadtype']) echo 'checked';?>>
        通过PHP读取     
	</td>
	<tr> 
      <td>允许上传的视频类型</td>
      <td><input type="text" name="setting[upload_allowext]" value="<?php echo $setting['upload_allowext'];?>" size="40" class="input-text"><font color="red">上传文件类型请用逗号(,)分开</font></td>
    </tr>
	<tr> 
      <td>允许上传的视频大小</td>
      <td><input type="text" name="setting[upload_allowsize]" value="<?php echo $setting['upload_allowsize'];?>" size="40" class="input-text">M</td>
    </tr>
	
	<tr> 
      <td>是否从已上传中选择</td>
      <td><input type="radio" name="setting[isselectimage]" value="1" <?php if($setting['isselectimage']) echo 'checked';?>> 是 <input type="radio" name="setting[isselectimage]" value="0" <?php if(!$setting['isselectimage']) echo 'checked';?>> 否</td>
    </tr>
	<tr> 
      <td>允许同时上传的个数</td>
      <td><input type="text" name="setting[upload_number]" value="<?php echo $setting['upload_number'];?>" size=3></td>
    </tr>	
	</tr>	
</table>
<SCRIPT LANGUAGE="JavaScript">
<!--
	function add_mirrorsite(obj)
	{
		var name = $(obj).siblings("#addname").val();
		var url = $(obj).siblings("#addurl").val();
		var servers = $("#servers").text()+name+" | "+url+"\r\n";
		$("#servers").text(servers);
	}
//-->
</SCRIPT>