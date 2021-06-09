<?php namespace App\Models;
use CodeIgniter\Model;

class Gallery extends Model
{
    protected $table = 'galery';
    
    public function getGallery($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }

    public function saveGallery($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateGallery($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function deleteGallery($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    } 
}
