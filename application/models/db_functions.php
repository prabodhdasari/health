<?php
class db_functions extends CI_Model
{
    public function add($tablename,$values)
    {
      $res=  $this->db->insert($tablename,$values);
      return $res;
    }
    public function addunique($tablename,$uniqueFieldname,$uniqueValue,$values)
    {
      $this->db->where($uniqueFieldname,$uniqueValue);
      $q = $this->db->get($tablename);
      if ( $q->num_rows() > 0 ) 
      {
        return 'Duplicate Record';
      } else {
        //Insert
       $res=  $this->db->insert($tablename,$data);
       return 'New Record Inserted !!';
      }
    }

      public function addNewOrUpdate($tablename,$uniqueFieldname,$uniqueValue,$values)
      {
        $this->db->where($uniqueFieldname,$uniqueValue);
        $q = $this->db->get($tablename);
             if ( $q->num_rows() > 0 ) 
             {
                    //Update if exisits
         $this->db->where($uniqueFieldname,$uniqueValue);
        $res=  $this->db->update($tablename,$values);
        return 'Record Updated';
           } else {
          //Insert         
         $res=  $this->db->insert($tablename,$values);
         return 'New Record Inserted !';
        }
      }
      public function delete($tablename,$id,$idValue)
        {
        //delete
        $this->db->where($id, $idValue);
        $this->db->delete($tablename);
        }

        public function getByID($tablename,$field,$value){
          if(!is_numeric($value)){
            $sql= "select * from " . $tablename . " where ". trim($field). " = '". trim($value) ."'";
          } else {
            $sql= "select * from " . $tablename . " where ". trim($field). " = ". trim($value) ;
          }
       $sql=$sql . ' order by ID desc';
          $q=$this->db->query($sql);
          if( $q->result())
          {
           return $q->result();
           } 
          
        }

        public function getall($tablename){
          $sql="select * from ". $tablename . ' order by ID desc';
          $q=$this->db->query($sql);
          // var_dump($q);
             if( $q->result())
             {
              return $q->result();
              } 
          
        }
        public function generateL_ID($L_ID){
          $sql="select * from Application_Licenses where L_ID ='". $L_ID . "'";
          $q=$this->db->query($sql);
          if( $q->result())
          {
           return $q->result();
           } 
        }
        public function checkForNewApplication($email,$application)
        {
          $sql='select * from Application_Licenses where status = "New"';
          $sql = $sql . ' and email ="'. $email .'"';
          $sql = $sql . ' and Application = "'. $application .'"';
          var_dump('Sql query' . $sql);
       //   email="'. $email . '" and status<>"New"'. ' and Application="'. $application. '"';
          $q=$this->db->query($sql);
          
          if($q->num_rows()>0)
            {
              $row = $q->row();
              if(isset($row))
                  {
                    return $row->L_ID;
                  } else
                  {
                    return '';
                  }
            }       

        }
    //This function is to get the uique Clinical ID
        public function generateH_ID($H_ID){
          $sql="select * from Application_Clinics where H_ID ='". $H_ID . "'";
          $q=$this->db->query($sql);
          if( $q->result())
          {
           return $q->result();
           } 
        }
        public function checkForNewClinicApplication($email,$application)
        {
          $sql='select * from Application_Clinics where status = "New"';
          $sql = $sql . ' and email ="'. $email .'"';
          $sql = $sql . ' and Application = "'. $application .'"';
          var_dump('Sql query' . $sql);
       //   email="'. $email . '" and status<>"New"'. ' and Application="'. $application. '"';
          $q=$this->db->query($sql);
          
          if($q->num_rows()>0)
            {
              $row = $q->row();
              if(isset($row))
                  {
                    return $row->H_ID;
                  } else
                  {
                    return '';
                  }
            }        

        }
}