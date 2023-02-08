<?php
class Login_model extends CI_Model{
 
//   function validate($email,$password){
//     $this->db->where('email',$email);
//     $this->db->where('mdp',$password);
//     $result = $this->db->get('user',1);
//     return $result;
//   }
    public function getuser()
    {
        $sql="select * from user";
        $query=$this->db->query($sql);
        $result=array();

        foreach($query->result_array() as $row)
        {
            $result[]=$row;
        }
        return $result;
    }

    public function checkLogin()
    {
        $listuser=$this->Login_model->getuser();
        $res=false;
        for($i=0;$i<count($listuser);$i++)
            if($listuser[$i]['email']== $mail && $listeuser[$i]['mdp']== $pass)
            {
                $res=true;
            }
            return $res;
    }

  public function listUser($id)
  {
    $sql="select  from user where $iduser='%s'";
    $sql=sprintf($sql,$id);
    $query=$this->db->$query($sql);
    $result=array();

    foreach($query->result_array() as $row)
    {
        $result[]= $row;
        return $result;
    }
  }
 
}