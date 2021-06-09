<?php namespace App\Models;
use CodeIgniter\Model;

class Landing extends Model
{
    protected $table = 'landing';
    
    public function getLanding($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function saveLanding($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateLanding($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteLanding($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    } 
}
