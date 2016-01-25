<?php 
/**
* 
*/
class Video_model extends CI_Model
{
	

	function getView($videoid){
		$query = "SELECT title,description,views,time,url,category_name,fullname,username 
			FROM user,video,profile,video_category
			WHERE video_category.id=video.category_id
			AND profile.user_id=video.user_id
			AND user.id=video.user_id
			AND video.video_id='$videoid'";

		return $this->db->query($query)->row();
	}

	function browse($q,$page,$order,$limit){
		switch ($order) {
			case 'time':
				$orderby = 'video_id';
				break;
			case 'variable':
				
								break;				
			
			default:
				# code...
				break;
		}

		$query = "SELECT title,views,time,category_name,fullname,username
			FROM user,video,profile,video_category
			WHERE video_category.id=video.category_id
			AND profile.user_id=video.user_id
			AND user.id=video.user_id
			AND video.title LIKE %'$q'%
			ORDER BY '$orderby' DESC
			LIMIT '$limit','$page' ";
		
	}


	function category($grade){

		$query = "SELECT t1.category_name as lv1, t2.category_name as lv2, t3.category_name as lv3, t4.category_name as lv4
					FROM video_category as t1
					LEFT JOIN video_category as t2 ON t2.parent = t1.category_id
					LEFT JOIN video_category as t3 ON t3.parent = t2.category_id
					LEFT JOIN video_category as t4 ON t4.parent = t3.category_id
					WHERE t1.parent IS NULL AND t1.category_name='$grade'
					ORDER BY t1.category_id ASC";
		return $this->db->query($query)->result();

	}

}