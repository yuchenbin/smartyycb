<?php

/**
 * Encoding		:  UTF-8
 * Created on	:  2014-6-4 by Tom , xiuluo_0816@163.com
 * WebSite		:  www.statnet.com.cn 
 */
class Index extends MY_Controller {

    public $systeminfo;

    public function __construct() {
        parent::__construct();
        $this->systeminfo();
    }

    public function index() {
        $content = "asd" . "\r\n";
        Writelog::daily('test', $content);
        $data['username'] = $this->username;
        $data['systeminfo'] = $this->systeminfo;
        $data['list'] = $this->get_left_data();
        $this->load->view('admin/index', $data);
    }

    /**
     * 获取系统参数
     */
    public function systeminfo() {
        $this->load->library('systeminfo');
        $this->systeminfo = array(
            'system_os' => $this->systeminfo->getOS(),
            'environment' => $this->systeminfo->server_software(),
            'phpapi' => $this->systeminfo->phphander(),
            'mysqlver' => $this->systeminfo->mysql_version(),
            'browser' => $this->systeminfo->getBrowser(),
            'filelimit' => $this->systeminfo->post_max_size(),
            'execlimit' => $this->systeminfo->max_exec_time(),
        );
    }

    /**
     * 获取菜单栏内容
     */
    public function get_left_data() {
        $this->load->model('admin/Func_Model');
        $authority = $this->get_role_authority();
        $data = $this->Func_Model->get_own_func($authority);
        $result = array();
        if ($data) {
            foreach ($data as $k => $v) {
                $result[$v['id']] = $v;
            }
        }
        return genTree9($result, 'id', 'pid', 'childs');
    }

    /**
     * 获取权限代表值
     */
    public function get_role_authority() {
        $where = array('id' => $this->roleid);
        $fields = array('authority');
        $this->load->library('tablerow'); //导入数据库表自定义类
        $roleinfo = $this->tablerow->get_tablerow('role', $where, $fields);
        if ($roleinfo) {
            Writelog::daily('test', "have no roleid!");
        }
        return trim($roleinfo['authority'], ",");
    }

}

?>
