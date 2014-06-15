<?php 
defined('IN_PHPCMS') or exit('No permission resources.');

/**
 * 
 * ------------------------------------------
 * index
 * ------------------------------------------
 * @package 	PHPCMS V9.1.16
 * @author		K
 * @copyright	
 * 
 */
 
 pc_base::load_app_class('admin', 'admin', 0);
pc_base::load_sys_class('form', 0, 0);
pc_base::load_app_func('global', 'video');

 
 class  batch_upload extends admin{
 
	public $path = 'uploadfile/video/ftp'; //ɨ��Ŀ¼
 
	public function __construct() {
	
		parent::__construct();
	
		$this->db = pc_base::load_model('content_model');
	
		
	}
	
	public  function  init (){
	
		include $this->admin_tpl('batch_video_add');
		
	}
	
	public  function batch_add (){
	
		if(empty($_POST['othor_catid'])){
			
			showmessage('��ѡ����Ŀ');
			
		}
	
		foreach ($_POST['othor_catid'] as $cid=>$_v) {
		
			$arr[] = $cid;
					
		}
		
		$t = count($_POST['othor_catid']);
		
		$_POST['othor_catid'] = array_slice($_POST['othor_catid'],1,$t,true);
		
		$catid = $arr[0];
	
		ini_set("max_execution_time",600000);
	
		$this->db->set_model(11);
		
		$picpaths = $_POST['ids'];
				
		$des = $_POST['description'];
			
		$l = count($picpaths);
	
		for($i = 0 ;$i<$l;$i++){
			
			$local_videos = explode('.',$picpaths[$i]);
			
			$local_video_name = $local_videos[0];

			$ext = $local_videos[1];
		
			$unq_name = uniqid();
			
			copy('uploadfile/video/ftp/'.$picpaths[$i], 'uploadfile/video/' .$unq_name. '.' .$ext);
			
			copy('uploadfile/video/ftp/'.$picpaths[$i], 'uploadfile/video/org/' .$picpaths[$i]);//���浽org
			
			@unlink('uploadfile/video/ftp/'.$picpaths[$i]);//ɾ��ftp����Ƶ
			  //�ж�ffmpeg�Ƿ�����     
			   if(FFMPEG_EXT){
							/*
						$mov = new ffmpeg_movie(APP_PATH . 'uploadfile/video/' .$unq_name. '.' .$ext);//��Ƶ��·�� 

						//��������ͼ	 
							$img = 100;
							
							 $ff_frame = $mov->getFrame($img);  
							
							 $gd_image = $ff_frame->toGDImage();  
							
							$real_path = "uploadfile/thumb/";
							
							 $img = realpath($real_path) . '/' . $unq_name . '.jpg';
								
							 imagejpeg($gd_image, $img);//����jpgͼ��  
							 
							 imagedestroy($gd_image);//����һͼ�� 
							 
						$mov = "";
						*/
						                                
						$jpg=FFMPEG_EXT. ' -i  '.PHPCMS_PATH.'uploadfile/video/' . $unq_name . '.' . $ext.'  -f  image2  -ss 5 -vframes 1  '.PHPCMS_PATH.'uploadfile/thumb/'.$unq_name.'.jpg';
						//echo $jpg;die;
						exec($jpg);
						
						//ת��
						
					
						
						if($ext != 'mp4') {
						
							$ffmpeg = 'ffmpeg.exe';//����ffmpeg
						
							$_POST['r'] = empty($_POST['r']) ? 1 : 2;
						
							$r = $_POST['r'] * 15;
						
							//$cmd= FFMPEG_EXT. ' -i  uploadfile/video/org/' .$picpaths[$i] .'   -r ' .$r. ' uploadfile/video/' . $unq_name .'.mp4';
		                    $cmd= FFMPEG_EXT. ' -i  '.PHPCMS_PATH.'uploadfile/video/' . $unq_name . '.' . $ext . ' -c:v libx264 -strict -2 -r ' . $r . ' '.PHPCMS_PATH.'uploadfile/video/' . $unq_name . '.mp4';				
						
						
							
							 exec($cmd,$status);
							 pc_base::ftp_upload($unq_name.'.mp4'); 
							
							/* ����ԭ��Ƶ */
							@unlink('uploadfile/video/' . $unq_name . '.' . $ext );
							 
							
							
						} 
						
						
				 }else{    
						showmessage("ffmpegû������"); 
				 } 
				
				$data = array('thumb' => 'uploadfile/thumb/' .$unq_name .'.jpg',				
								'inputtime' => time(),
								'islink' => 0,							   
								'catid' => $catid,
								'title' => $local_video_name,				
								'description' => $_POST['description'],
								'content' => 'we videos',
								'paginationtype' => 0,
								'maxcharperpage' => 10000,							 
								'status' => 99,
								'local_video'=>$unq_name. '.mp4',
							);
	
				$this->db->add_content($data,1);
		}
		
		showmessage(L('operation_success'));
		
		
	
	}
	
	public  function  get_filename(){
	
	/* 	$arr = $this -> db -> select(array('channelid'=>3),'picpath');
		
		foreach($arr  as $k => &$v){
			
			$files[] = basename($v['picpath']);
		
		} */
		
	//	$files = array_filter($files);
		
		$upload_files = $this -> traverse($this -> path);

		//$un_use = empty($files) ? $upload_files : array_diff($upload_files,$files);
		
	//	$str = ' ';
		
		foreach ($upload_files  as  $_v){
		
		$data .= "
			<tr>
			<td width='120'>
				<input type='checkbox' value='{$_v}' class='inputcheckbox' name='ids[]'>
			</td>
           
            <td>". $_v ."</td>
			</tr>";
			
		
		}
	$str .= empty($upload_files) ? '<tr><td>  û������</td></tr>': $data;
	
	
	
	echo $str;
	
	}
	
	
	
	public function traverse($path){
	
			$arr = array();
			$current_dir = opendir($path);    //opendir()����һ��Ŀ¼���,ʧ�ܷ���false
			while(($file = readdir($current_dir)) !== false)  //readdir()���ش�Ŀ¼����е�һ����Ŀ
			{		
				if($file == '.' || $file == '..')
					continue;
				
					//$arr[] = iconv('GB2312', 'UTF-8', $file); 
					$arr[] = $file;
			}
			return $arr;
	
	}
		
			
		
		 
 
 }