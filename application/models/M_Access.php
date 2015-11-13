<?php
/**
*
* @Copyright (C), 2014  Jimmy
* @Name  Cate.php
* @Author  Jimmy
* @Version  1.0
* @Date:  2015-10-9下午4:47:49
* @Description 
* @Class List 
*      1.
*  @Function List
*   1.
*  @History
*      <author>    <time>                     <version >                  <desc>
*        Jimmy        2015-10-9下午4:47:49          1.0                     第一次建立该文件
*
*/

class M_access extends CI_Model 
{
    const TABLE = 'access';
    
    public function __construct() 
    {
        parent::__construct ();
    }
    

    public function conditon($conditon)
    {
        if (isset($conditon['role_id']) && $conditon['role_id'] > 0) 
        {
            $this->db->where(array('role_id' => $conditon['role_id']));
        }

        if (isset($conditon['pid']) && $conditon['pid'] > 0) 
        {
            $this->db->where(array('pid' => $conditon['pid']));
        }

        if (isset($conditon['status'])) 
        {
            $this->db->where(array('status' => $conditon['status']));
        }

        if (isset($conditon['p'])) {
            $ps = $conditon['ps'] ? $conditon['ps'] : 25;
            $this->db->limit($ps, $conditon['p']);
        }

    }

    public function getAll()
    {
        $list = $this->db->from(self::TABLE)->select()->get()->result_array();
        if ($list) {
            $temp = array();
            foreach ($list as $k => $v) {
                $temp[$v['id']] = $v;
            }
            return $temp;
        }
        return array();
    }

    public function getList($conditon)
    {
        $this->conditon($conditon);
        return $this->db->from(self::TABLE)->get()->result_array();
    }

    public function getOne($id)
    {
        return $this->db->from(self::TABLE)->where(array('id' => $id))->select()->get()->row_array();
    }

    public function add($cate)
    {
        return $this->db->insert(self::TABLE, $cate);
    }

    public function update($cate, $key)
    {
        $val = $cate[$key];
        if (!$val)
        {
            return 0;
        }
        unset($cate[$key]);
        return $this->db->update(self::TABLE, $cate, array($key => $val));
    }

    public function del($id)
    {
        return $this->db->delete(self::TABLE, array('id' => $id));
    }
}

?>