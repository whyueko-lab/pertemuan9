<?php
namespace   App\Models;
use CodeIgniter\Model;

class Barang_model extends Model
{
    protected $table = 'm_barang';

    public function getBarang($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->getWhere(['id_barang' => $id]);
    }
    
    // Method untuk menyimpan data barang
    public function saveBarang($data): BaseResult|bool|query
    {
        $builder = $this->db->table($this->table);
        return $builder->insert(set: $data);
    }

    //tambahan method untuk editbarang
    public function editBarang($data, $id): bool
    {
        $builder = $this->db->table(tableName: $this->table);
        $builder->where(key: 'id_barang', value: $id);
        return $builder->update(set: $data);
    }

    // Method untuk menghapus data barang
    public function hapusBarang($id)
    {
        $builder = $this->db->table($this->table);
        $builder->where(key: 'id_barang', value: $id);
        return $builder->delete();
    }
}