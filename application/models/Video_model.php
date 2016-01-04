<?php 
/**
* 
*/
class Model_model extends CI_Model
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
		$this->
	}

}