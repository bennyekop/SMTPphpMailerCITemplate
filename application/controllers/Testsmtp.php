<?php 
class Test extends CI_Controller { 
        public function __construct() { 
                parent::__construct(); $this->load->library('email'); //tambahkan dalam contruct pemanggil libarary mail
                    }
                    function sendMail() 
                    {
                        $ci = get_instance();
                        $config['protocol'] = "smtp";
                        $config['smtp_host'] = "smtp.mailgun.org";
                        $config['smtp_port'] = "587";
                        $config['smtp_user'] = "postmaster@sandboxe74a0662ab514f3cbf3aecbbff331e52.mailgun.org";
                        $config['smtp_pass'] = "0211e851de0cc3b59dcb350d350da72b-19f318b0-43d99329";
                        $config['charset'] = "utf-8";
                        $config['mailtype'] = "html";
                        $config['newline'] = "\r\n";
                        $ci->email->initialize($config);
                        $ci->email->from('postmaster@sandboxe74a0662ab514f3cbf3aecbbff331e52.mailgun.org', '');
                        $list = array('benny@rumahweb.co.id');
                        $ci->email->to($list);
                        $ci->email->subject('Codeigniter SMTP');
                        $ci->email->message('Laporan email SMTP Codeigniter.....');
                        if ($this->email->send()) {
                        echo 'Email sent.';
                        } else {
                        show_error($this->email->print_debugger());
                    }
        }

}