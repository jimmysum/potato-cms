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

class M_node extends CI_Model 
{
    const TABLE = 'node';
    
    public function __construct() 
    {
        parent::__construct ();
    }
    

    public function conditon($conditon)
    {
        foreach ($conditon as $k => $v)
        {
            switch ($k) {
                case 'id_in':
                    if (is_array($v)) {
                        $this->db->where_in('id', $v);
                    }
                    break;
                case 'id':
                    if ($v > 0) {
                        $this->db->where(array('id' => $v));
                    }
                    break;
                case 'status':
                    $this->db->where(array('status' => $v));
                    break;
                case 'p':
                    $ps = $conditon['ps'] ? $conditon['ps'] : 25;
                    $this->db->limit($ps, $v);
                    break;
                case 'DESC':
                    $this->db->order_by($v, 'DESC');
                    break;
                case 'desc':
                    $this->db->order_by($v, 'DESC');
                    break;
                case 'ASC':
                    $this->db->order_by($v, 'ASC');
                    break;
                case 'asc':
                    $this->db->order_by($v, 'ASC');
                    break;
                
            }
        }

    }

    public function amerge($list)
    {
        if (!$list) {
            return array();
        }
        foreach ($list as $k => $v) {
            $list[$k]['status_str'] = $v['status'] == 1 ? '可用' : '不可用';
        }
        return $list;
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
        $list = $this->db->from(self::TABLE)->get()->result_array();
        if ($list) {
            $temp = array();
            foreach ($list as $k => $v) {
                $temp[$v['id']] = $v;
            }
            return $temp;
        }
        return array();
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