  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_pendaftaran extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('users',$data);
       }
       
       //Frontend
		function get_portfolio()
		{
			$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC");
			return $hsl;
		}

		function get_portfolio_per_page($offset,$limit){
			$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC LIMIT $offset,$limit");
			return $hsl;
		}
  }