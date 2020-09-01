<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class fpkone extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('fpkone_model');
        $this->load->library('form_validation');
        $this->load->library('PHPExcel');
        chek_session();
    }

    

    public function index() {
        $fpkone = $this->fpkone_model->get_all();

        $data = array(
            'fpkone_data' => $fpkone
        );

        $this->template->display('fpkone/tb_fpkone_list', $data);
    }


    //fungsi memanggil tabel faskes
    function get_faskes(){
        $uraian=$this->input->post('kode_faskes');
        $data=$this->fpkone_model->get_faskes_bykode($kode_faskes);
        echo json_encode($data);
    }

    //fungsi memanggil tabel program
    function get_program(){
        $nama_program=$this->input->post('uraian');
        $data=$this->fpkone_model->get_faskes_bynama($uraian);
        echo json_encode($data);
    }

    public function read($id) {
        $row = $this->fpkone_model->get_by_id($id);
        if ($row) {
            $data = array(
                'kode_faskes' => $row->kode_faskes,
                'nama_faskes' => $row->nama_faskes,
            );
            $this->template->display('fpkone/tb_fpkone_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('fpkone'));
        }
    }

  
    public function create() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('fpkone/create_action'),
            'kode_faskes' => set_value('kode_faskes'),
            'nama_faskes' => set_value('nama_faskes'),
            'bulan_pelayanan'=> set_value('bulan_pelayanan'),
            'tgl_masuk'=> set_value('tgl_masuk'),
            'noreg_masuk'=> set_value('noreg_masuk'),
            'tgl_yankes'=> set_value('tgl_yankes'),
            'noreg_yankes'=> set_value('noreg_yankes'),
            'jenis_pelayanan'=> set_value('jenis_pelayanan'),
            'uraian_prog'=> set_value('uraian_prog'),
            'nama_program'=> set_value('nama_program'),
            'kode_program'=> set_value('kode_program'),
            'kode_akun'=> set_value('kode_akun'),
            'kasus_ajukan'=> set_value('kasus_ajukan'),
            'jumlah_ajukan'=> set_value('jumlah_ajukan'),
            'kasus_setuju'=> set_value('kasus_setuju'),
            'jumlah_setuju'=> set_value('jumlah_setuju'),
            'nama_peserta'=> set_value('nama_peserta'),
            'noka'=> set_value('noka'),
            'tanggal_masuk'=> set_value('tanggal_masuk'),
            'tanggal_keluar'=> set_value('tanggal_keluar'),
            'diajukan'=> set_value('diajukan'),
            'disetujui'=> set_value('disetujui'),
            'selisih'=> set_value('selisih'),
            'uraian'=> set_value('uraian'),
            'id_peserta'=> set_value('id_peserta'),
          //  'id_fpkone'=> set_value('id_fpkone'),
            'id_fpk'=> set_value('id_fpk'),
           
        );
        
        $this->template->display('fpkone/tb_fpkone_form', $data);
    }

    public function create_action() 
        {
            $data = array(
                'kode_faskes' => $this->input->post('kode_faskes'),
                'nama_faskes' => $this->input->post('nama_faskes'),
                'bulan_pelayanan'=> $this->input->post('bulan_pelayanan'),
                'tgl_masuk'=> $this->input->post('tgl_masuk'),
                'noreg_masuk'=> $this->input->post('noreg_masuk'),
                'tgl_yankes'=> $this->input->post('tgl_yankes'),
                'noreg_yankes'=> $this->input->post('noreg_yankes'),
                'jenis_pelayanan'=> $this->input->post('jenis_pelayanan'),
                'uraian_prog'=> $this->input->post('uraian_prog'),
                'nama_program'=> $this->input->post('nama_program'),
                'kode_program'=> $this->input->post('kode_program'),
                'kode_akun'=> $this->input->post('kode_akun'),
                'kasus_ajukan'=> $this->input->post('kasus_ajukan'),
                'jumlah_ajukan'=> $this->input->post('jumlah_ajukan'),
                'kasus_setuju'=> $this->input->post('kasus_setuju'),
                'jumlah_setuju'=> $this->input->post('jumlah_setuju'));
               // 'id_fpkone'=> $this->input->post('id_fpkone'));
                $id_fpkone =$this->fpkone_model->insert($data);

                 /*    $data_peserta = array(
                'nama_peserta' => $this->input->post('nama_peserta'),
                'noka' => $this->input->post('noka'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'tanggal_keluar' => $this->input->post('tanggal_keluar'),
                'diajukan' => $this->input->post('diajukan'),
                'disetujui' => $this->input->post('disetujui'),
                'selisih' => $this->input->post('selisih'),
                'uraian' => $this->input->post('uraian'),
                'id_fpk'=> $id_fpkone);
                $proses = $this->fpkone_model->tambah_peserta($data_peserta);   */

                
                $post = $this->input->post();
                $result = array();
                $total_post = count($post['nama_peserta']);
                 
                foreach($post['nama_peserta'] AS $key => $val)
                {
                $result[] = array(
                //$id_peserta = $_POST['id_peserta'][$key],
                "nama_peserta" => $_POST['nama_peserta'][$key],
                "noka" => $_POST['noka'][$key],
                "tanggal_masuk" => $_POST['tanggal_masuk'][$key],
                "tanggal_keluar" => $_POST['tanggal_keluar'][$key],
                "diajukan" => $_POST['diajukan'][$key],
                "disetujui" => $_POST['disetujui'][$key],
                "selisih" => $_POST['selisih'][$key],
                "uraian" => $_POST['uraian'][$key],
                "id_fpk" => $id_fpkone
                );
                }
                $proses = $this->fpkone_model->tambah_peserta($result);
                 
                $this->session->set_flashdata('notif', '<p style="color:green;font-weight:bold;">'.$total_post.' data berhasil di simpan!</p>');
                
            
            redirect(site_url('fpkone'));
        
    }

    
    public function delete($id) {
        $row = $this->fpkone_model->get_by_id($id);

        if ($row) {
            $this->fpkone_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('fpkone'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('fpkone'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('nama_peserta', 'nama_peserta', 'trim|required');
         $this->form_validation->set_rules('tanggal_masuk', 'tanggal_masuk', 'trim|required');
        $this->form_validation->set_rules('tanggal_keluar', 'tanggal_keluar', 'trim|required');
         $this->form_validation->set_rules('diajukan', 'diajukan', 'trim|required');
        $this->form_validation->set_rules('disetujui', 'disetujui', 'trim|required');
         $this->form_validation->set_rules('selisih', 'selisih', 'trim|required');
        $this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
        $this->form_validation->set_rules('id_peserta', 'id_peserta', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

   
    
    public function excel($id) {
        $row = $this->fpkone_model->get_by_id($id);
        $select = $this->db->get('tb_fpkone')->result();
                        
        $excel    = new PHPExcel();

        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->setTitle('FPK'); //nama sheet pertama

       // Buat sebuah variabel untuk menampung pengaturan style dari header tabel 
       $style_kop = array(   
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 11),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT      
            ),      
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM), // Set border top dengan garis tebal        
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM),        
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM),         
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM)      
            )    
        );   
       $style_one = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT, // Set text jadi dikiri secara horizontal            
            ),  
            'borders' => array(              
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis  
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM), 
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM)     
            ) 
        );  
        $style_two = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT, // Set text jadi dikiri secara horizontal             
            ),  
            'borders' => array(              
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM), // Set border bottom dengan garis tebal  
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM), 
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM)     
            ) 
        );  
        $style_tre = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)            
            ),  
            'borders' => array(              
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM), // Set border bottom dengan garis tebal  
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM), 
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM)     
            ) 
        );     
        
        $style_tb = array(      
               
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM),         
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM),       
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM),         
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_MEDIUM)    
            )    
        );

        $style_tr = array(      
                  
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),         
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),       
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),         
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)    
            )    
        );
        $style_kn = array(      
                  
            'borders' => array(              
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),    
            )    
        );
        $style_atka = array(      
                  
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),                    
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)    
            )    
        );
        $style_atki = array(      
                  
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),         
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)    
            )    
        );
        $style_atkk = array(      
                  
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),         
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)    
            )    
        );
        $style_end = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT, // Set text jadi dikiri secara horizontal             
            ) 
        );
        $style_end2 = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 11 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT, // Set text jadi dikiri secara horizontal             
            ) 
        );
        $style_endl = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi dikiri secara horizontal             
            ) 
        );

        $style_grs = array(   
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            'borders' => array(        
            'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tebal        
            'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),        
            'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),         
            'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN)      
            )    
        ); 

       
            //SHEET PERTAMA
             // Menambahkan file gambar pada document excel pada kolom B2
            $objDrawing = new PHPExcel_Worksheet_Drawing();
            $objDrawing->setName('Bpjs Kesehatan');
            $objDrawing->setDescription('Logo BPJS Kesehatan');
            $objDrawing->setPath('C:/xampp/htdocs/bpjs/assets/img/logo_1.png');
            $objDrawing->setCoordinates('B2'); 
            $objDrawing->setWorksheet($excel->getActiveSheet());
            // Kop FPK
            $excel->setActiveSheetIndex(0)->setCellValue('I2', "FORMULIR PENGAJUAN KLAIM (FPK)");   
            $excel->getActiveSheet()->mergeCells('I2:R2'); 
            $excel->setActiveSheetIndex(0)->setCellValue('I3', "BIAYA PELAYANAN KESEHATAN");
            $excel->getActiveSheet()->mergeCells('I3:R3'); 
            $excel->setActiveSheetIndex(0)->setCellValue('I4', "BADAN PENYELENGGARA JAMINAN SOSIAL KESEHATAN");
            $excel->getActiveSheet()->mergeCells('I4:R4'); 
            $excel->setActiveSheetIndex(0)->setCellValue('I5', "KANTOR CABANG PEKANBARU");
            $excel->getActiveSheet()->mergeCells('I5:R5');   
            $excel->getActiveSheet()->getStyle('B2:R5')->applyFromArray($style_kop);   

            // Tanggal  
            $excel->setActiveSheetIndex(0)->setCellValue('B6', "TANGGAL MASUK");   
            $excel->getActiveSheet()->mergeCells('B6:C6');
            $excel->setActiveSheetIndex(0)->setCellValue('D6', " : ");   
            $excel->setActiveSheetIndex(0)->setCellValue('B7', "NO. REG. MASUK");
            $excel->getActiveSheet()->mergeCells('B7:C7');
            $excel->setActiveSheetIndex(0)->setCellValue('D7', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('G6', "TGL. TERIMA YANKES");
            $excel->getActiveSheet()->mergeCells('G6:I6');
            $excel->setActiveSheetIndex(0)->setCellValue('J6', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('G7', "NO. REG. KLAIM YANKES");
            $excel->getActiveSheet()->mergeCells('G7:I7');
            $excel->setActiveSheetIndex(0)->setCellValue('J7', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('N6', "TGL. TERIMA KEU");
            $excel->getActiveSheet()->mergeCells('N6:O6');
            $excel->setActiveSheetIndex(0)->setCellValue('P6', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('N7', "NO. REG. KLAIM KEU");
            $excel->getActiveSheet()->mergeCells('N7:O7');
            $excel->setActiveSheetIndex(0)->setCellValue('P7', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('Q6', "......................");
            $excel->getActiveSheet()->mergeCells('Q6:R6');
            $excel->setActiveSheetIndex(0)->setCellValue('Q7', "......................"); 
            $excel->getActiveSheet()->mergeCells('Q7:R7');
            $excel->getActiveSheet()->getStyle('B6:R7')->applyFromArray($style_one); //border

            $excel->setActiveSheetIndex(0)->setCellValue('B8', "JENIS PENAGIHAN");
            $excel->getActiveSheet()->mergeCells('B8:C8');
            $excel->setActiveSheetIndex(0)->setCellValue('D8', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('E8', "Klaim Kolektif/FKTP*");
            $excel->getActiveSheet()->mergeCells('E8:H8');  
            $excel->setActiveSheetIndex(0)->setCellValue('B10', "JENIS PELAYANAN");
            $excel->getActiveSheet()->mergeCells('B10:C10');
            $excel->setActiveSheetIndex(0)->setCellValue('D10', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('B11', "NAMA PENGAJU/FASKES");
            $excel->getActiveSheet()->mergeCells('B11:C11');
            $excel->setActiveSheetIndex(0)->setCellValue('D11', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('B12', "NAMA JEJARING");
            $excel->getActiveSheet()->mergeCells('B12:C12');
            $excel->setActiveSheetIndex(0)->setCellValue('D12', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('B13', "NO. KARTU PESERTA");
            $excel->getActiveSheet()->mergeCells('B13:C13');
            $excel->setActiveSheetIndex(0)->setCellValue('D13', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('B14', "ALAMAT");
            $excel->getActiveSheet()->mergeCells('B14:C14');
            $excel->setActiveSheetIndex(0)->setCellValue('D14', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('B15', "NAMA PROGRAM");
            $excel->getActiveSheet()->mergeCells('B15:C15');
            $excel->setActiveSheetIndex(0)->setCellValue('D15', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('B16', "KODE PROGRAM");
            $excel->getActiveSheet()->mergeCells('B16:C16');
            $excel->setActiveSheetIndex(0)->setCellValue('D16', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('B17', "KODE AKUN");
            $excel->getActiveSheet()->mergeCells('B17:C17');
            $excel->setActiveSheetIndex(0)->setCellValue('D17', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('B19', "TELEPON");
            $excel->getActiveSheet()->mergeCells('B19:C19');
            $excel->setActiveSheetIndex(0)->setCellValue('D19', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('K8', "NAMA FASKES");
            $excel->getActiveSheet()->mergeCells('K8:L8');
            $excel->setActiveSheetIndex(0)->setCellValue('M8', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('K9', "KODE FASKES");
            $excel->getActiveSheet()->mergeCells('K9:L9');
            $excel->setActiveSheetIndex(0)->setCellValue('M9', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('K10', "BLN/THN PELAYANAN");
            $excel->getActiveSheet()->mergeCells('K10:L10');
            $excel->setActiveSheetIndex(0)->setCellValue('M10', " : "); 
            $excel->setActiveSheetIndex(0)->setCellValue('K11', "KUASA/PESERTA)*");
            $excel->getActiveSheet()->mergeCells('K11:L11');
            $excel->setActiveSheetIndex(0)->setCellValue('M11', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('K12', "P / S / I / A)*");
            $excel->getActiveSheet()->mergeCells('K12:L12');
            $excel->setActiveSheetIndex(0)->setCellValue('M12', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('K13', "TGL. LAHIR");
            $excel->getActiveSheet()->mergeCells('K13:L13');
            $excel->setActiveSheetIndex(0)->setCellValue('M13', " : ");
            $excel->setActiveSheetIndex(0)->setCellValue('K14', "JENIS KELAMIN");
            $excel->getActiveSheet()->mergeCells('K14:L14');
            $excel->setActiveSheetIndex(0)->setCellValue('M14', " : ");
            $excel->getActiveSheet()->getStyle('B8:R19')->applyFromArray($style_two); //border
            
            //Tabel Ajukan
            $excel->setActiveSheetIndex(0)->setCellValue('B20', "DIAJUKAN (DIISI PENGAJU KLAIM)");   
            $excel->getActiveSheet()->mergeCells('B20:I20'); 
            $excel->setActiveSheetIndex(0)->setCellValue('B22', "NO.");
            $excel->getActiveSheet()->mergeCells('B22:B22');
            $excel->setActiveSheetIndex(0)->setCellValue('B24', "1");
            $excel->setActiveSheetIndex(0)->setCellValue('C21', "URAIAN");
            $excel->getActiveSheet()->mergeCells('C21:D22'); 
            $excel->setActiveSheetIndex(0)->setCellValue('C23', "BIAYA");
            $excel->getActiveSheet()->mergeCells('C23:D23');
            $excel->setActiveSheetIndex(0)->setCellValue('E21', "JUMLAH");
            $excel->getActiveSheet()->mergeCells('E21:I21');  
            $excel->setActiveSheetIndex(0)->setCellValue('E22', "KASUS");
            $excel->getActiveSheet()->mergeCells('E22:E23'); 
            $excel->setActiveSheetIndex(0)->setCellValue('F22', "TINDAKAN");
            $excel->getActiveSheet()->mergeCells('F22:G22');
            $excel->setActiveSheetIndex(0)->setCellValue('F23', "HR / R / LB");
            $excel->getActiveSheet()->mergeCells('F23:G23');
            $excel->setActiveSheetIndex(0)->setCellValue('H22', "BIAYA");
            $excel->getActiveSheet()->mergeCells('H22:I22');
            $excel->setActiveSheetIndex(0)->setCellValue('H23', "Rp.");
            $excel->getActiveSheet()->mergeCells('H23:I23');
            $excel->setActiveSheetIndex(0)->setCellValue('B28', "JUMLAH");
            $excel->getActiveSheet()->mergeCells('B28:C28');
            $excel->getActiveSheet()->getStyle('B20:I28')->applyFromArray($style_tre); //border
            $excel->getActiveSheet()->getStyle('B21:I27')->applyFromArray($style_tb); //border
            $excel->getActiveSheet()->getStyle('B21:I23')->applyFromArray($style_tb); //border
            $excel->getActiveSheet()->getStyle('B21:B27')->applyFromArray($style_kn); //border
            $excel->getActiveSheet()->getStyle('C21:D28')->applyFromArray($style_kn); //border
            $excel->getActiveSheet()->getStyle('E22:G28')->applyFromArray($style_atka); //border
            $excel->getActiveSheet()->getStyle('F22:I28')->applyFromArray($style_atki); //border

             //Tabel setuju
            $excel->setActiveSheetIndex(0)->setCellValue('J20', "DISETUJUI (DIISI BPJS Kesehatan)");   
            $excel->getActiveSheet()->mergeCells('J20:R20'); 
            $excel->setActiveSheetIndex(0)->setCellValue('J21', "KODE");
            $excel->getActiveSheet()->mergeCells('J21:L22');
            $excel->setActiveSheetIndex(0)->setCellValue('J23', "PROGRAM");
            $excel->getActiveSheet()->mergeCells('J23:L23'); 
            $excel->setActiveSheetIndex(0)->setCellValue('M21', "JUMLAH");
            $excel->getActiveSheet()->mergeCells('M21:R21');  
            $excel->setActiveSheetIndex(0)->setCellValue('M22', "KASUS");
            $excel->getActiveSheet()->mergeCells('M22:N23'); 
            $excel->setActiveSheetIndex(0)->setCellValue('O22', "TINDAKAN");
            $excel->getActiveSheet()->mergeCells('O22:P22');
            $excel->setActiveSheetIndex(0)->setCellValue('O23', "HR / R / LB");
            $excel->getActiveSheet()->mergeCells('O23:O23');
            $excel->setActiveSheetIndex(0)->setCellValue('Q22', "BIAYA");
            $excel->getActiveSheet()->mergeCells('Q22:R22');
            $excel->setActiveSheetIndex(0)->setCellValue('Q23', "Rp.");
            $excel->getActiveSheet()->mergeCells('Q23:R23');
            $excel->setActiveSheetIndex(0)->setCellValue('J28', "JUMLAH");
            $excel->getActiveSheet()->mergeCells('J28:L28');
            $excel->getActiveSheet()->getStyle('J20:R28')->applyFromArray($style_tre); //border 
            $excel->getActiveSheet()->getStyle('J21:R27')->applyFromArray($style_tb); //border
            $excel->getActiveSheet()->getStyle('J21:R23')->applyFromArray($style_tb); //border
            $excel->getActiveSheet()->getStyle('J20:L28')->applyFromArray($style_kn); //border
            $excel->getActiveSheet()->getStyle('O22:R28')->applyFromArray($style_atki); //border
            $excel->getActiveSheet()->getStyle('M22:P28')->applyFromArray($style_atka); //border


            //foot
            $excel->setActiveSheetIndex(0)->setCellValue('C31', "........,........................");   
            $excel->getActiveSheet()->mergeCells('C31:E31');
            $excel->setActiveSheetIndex(0)->setCellValue('N31', "Pekanbaru, ");   
            $excel->getActiveSheet()->mergeCells('N31:N31');
            $excel->setActiveSheetIndex(0)->setCellValue('N32', "Kepala");   
            $excel->getActiveSheet()->mergeCells('N32:P32');
            $excel->setActiveSheetIndex(0)->setCellValue('B38', " *) isi dan coret yang tidak perlu ");   
            $excel->getActiveSheet()->mergeCells('B38:E38');
            $excel->getActiveSheet()->getStyle('B29:R38')->applyFromArray($style_tre); //border
            $excel->setActiveSheetIndex(0)->setCellValue('B39', " Distribusi : ");   
            $excel->getActiveSheet()->mergeCells('B39:C39');
            $excel->setActiveSheetIndex(0)->setCellValue('C40', "     Lembar asli   : BidBukPus / BidKeu / SIAdKeu ");   
            $excel->getActiveSheet()->mergeCells('C40:H40');
            $excel->setActiveSheetIndex(0)->setCellValue('C41', "     Lembar Ke-2 : BidYankes / SIYankes ");   
            $excel->getActiveSheet()->mergeCells('C41:H41');
            $excel->setActiveSheetIndex(0)->setCellValue('C42', "     Lembar Ke-3 : Pengaju Klaim ");   
            $excel->getActiveSheet()->mergeCells('C42:H42');
            $excel->getActiveSheet()->getStyle('B38:H42')->applyFromArray($style_end); //border
        
     
        
        
        foreach($this->fpkone_model->get_fpkone($id) as $data){
            $excel->setActiveSheetIndex(0)->setCellValue('E6', $data->tgl_masuk);   
            $excel->getActiveSheet()->mergeCells('E6:F6');
            $excel->setActiveSheetIndex(0)->setCellValue('E7', $data->noreg_masuk);
            $excel->getActiveSheet()->mergeCells('E7:F7');
            $excel->setActiveSheetIndex(0)->setCellValue('K6', $data->tgl_yankes);
            $excel->getActiveSheet()->mergeCells('K6:L6');
            $excel->setActiveSheetIndex(0)->setCellValue('K7', $data->noreg_yankes);
            $excel->getActiveSheet()->mergeCells('K7:L7');
            $excel->setActiveSheetIndex(0)->setCellValue('E10', $data->jenis_pelayanan);
            $excel->getActiveSheet()->mergeCells('E10:H10');
            $excel->setActiveSheetIndex(0)->setCellValue('E11', $data->nama_faskes);
            $excel->getActiveSheet()->mergeCells('E11:I11');
            $excel->setActiveSheetIndex(0)->setCellValue('N8', $data->nama_faskes);
            $excel->getActiveSheet()->mergeCells('N8:R8');
            $excel->setActiveSheetIndex(0)->setCellValue('N9', $data->kode_faskes);
            $excel->getActiveSheet()->mergeCells('N9:O9');
            $excel->setActiveSheetIndex(0)->setCellValue('N10', $data->bulan_pelayanan);
            $excel->getActiveSheet()->mergeCells('N10:O10');
            $excel->setActiveSheetIndex(0)->setCellValue('E15', $data->nama_program);
            $excel->getActiveSheet()->mergeCells('E15:L15');
            $excel->setActiveSheetIndex(0)->setCellValue('E16', $data->kode_program);
            $excel->getActiveSheet()->mergeCells('E16:H16');
            $excel->setActiveSheetIndex(0)->setCellValue('E17', $data->kode_akun);
            $excel->getActiveSheet()->mergeCells('E17:H17');
            $excel->setActiveSheetIndex(0)->setCellValue('C24', $data->uraian_prog);
            $excel->getActiveSheet()->mergeCells('C24:D24');
            $excel->setActiveSheetIndex(0)->setCellValue('E24', $data->kasus_ajukan);
            $excel->setActiveSheetIndex(0)->setCellValue('E28', $data->kasus_ajukan);
            $excel->setActiveSheetIndex(0)->setCellValue('H24', $data->jumlah_ajukan);
            $excel->getActiveSheet()->mergeCells('H24:I24');
            $excel->setActiveSheetIndex(0)->setCellValue('H28', $data->jumlah_ajukan);
            $excel->getActiveSheet()->mergeCells('H28:I28');
            $excel->setActiveSheetIndex(0)->setCellValue('M24', $data->kasus_setuju);
            $excel->getActiveSheet()->mergeCells('M24:N24');
            $excel->setActiveSheetIndex(0)->setCellValue('M28', $data->kasus_setuju);
            $excel->getActiveSheet()->mergeCells('M28:N28');
            $excel->setActiveSheetIndex(0)->setCellValue('Q24', $data->jumlah_setuju);
            $excel->getActiveSheet()->mergeCells('Q24:R24');
            $excel->setActiveSheetIndex(0)->setCellValue('Q28', $data->jumlah_setuju);
            $excel->getActiveSheet()->mergeCells('Q28:R28');


            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)  
            
       }

        foreach($this->fpkone_model->get_kepala() as $data){
            $excel->setActiveSheetIndex(0)->setCellValue('N36', $data->nama_pegawai);   
            $excel->getActiveSheet()->mergeCells('N36:P36');
        }


        // Set width kolom    
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(8); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(9);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(3);
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(11);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(11);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(10);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(11);
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(11);
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(11);
        $excel->getActiveSheet()->getColumnDimension('R')->setWidth(1);

        // Set Orientation, size and scaling
        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
        $excel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
        //$excel->getActiveSheet()->getPageSetup()->setPrintQuality(0);
        $excel->getActiveSheet()->getPageSetup()->setFitToPage(true);
        $excel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
        $excel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

        //Title sheet kedua
        $excel->createSheet(1);
        $excel->setActiveSheetIndex(1);
        $excel->getActiveSheet()->setTitle('TELAAH');


        //SHEET KEDUA
        // Menambahkan file gambar pada document excel pada kolom B2
        $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName('Bpjs Kesehatan');
        $objDrawing->setDescription('Logo BPJS Kesehatan');
        $objDrawing->setPath('C:/xampp/htdocs/bpjs/assets/img/logo_2.png');
        $objDrawing->setCoordinates('B2'); 
        $objDrawing->setWorksheet($excel->getActiveSheet());

        //kop
        $excel->setActiveSheetIndex(1)->setCellValue('F2', "BADAN PENYELENGGARA JAMINAN SOSIAL KESEHATAN");   
        $excel->getActiveSheet()->mergeCells('F2:R2'); 
        $excel->setActiveSheetIndex(1)->setCellValue('F3', "KANTOR CABANG PEKANBARU");
        $excel->getActiveSheet()->mergeCells('F3:R3'); 
        $excel->setActiveSheetIndex(1)->setCellValue('F4', "RINCIAN HASIL TELAAH VERIFIKASI FASILITAS KESEHATAN TINGKAT PERTAMA");
        $excel->getActiveSheet()->mergeCells('F4:R4'); 
        $excel->getActiveSheet()->getStyle('B2:R5')->applyFromArray($style_end2); 

        //identitas
        $excel->setActiveSheetIndex(1)->setCellValue('B6', "Nama Faskes");
        $excel->getActiveSheet()->mergeCells('B6:C6');
        $excel->setActiveSheetIndex(1)->setCellValue('D6', " : ");   
        $excel->setActiveSheetIndex(1)->setCellValue('B7', "Bulan Pelayanan");
        $excel->getActiveSheet()->mergeCells('B7:C7');
        $excel->setActiveSheetIndex(1)->setCellValue('D7', " : "); 
        $excel->setActiveSheetIndex(1)->setCellValue('B8', "FPK No. Reg.");
        $excel->getActiveSheet()->mergeCells('B8:C8');
        $excel->setActiveSheetIndex(1)->setCellValue('D8', " : "); 
        $excel->setActiveSheetIndex(1)->setCellValue('J6', "Tgl. Diterima Pemerinci");
        $excel->getActiveSheet()->mergeCells('J6:K6');
        $excel->setActiveSheetIndex(1)->setCellValue('L6', " : ");   
        $excel->setActiveSheetIndex(1)->setCellValue('J7', "Tgl. Disetujui Kordinator");
        $excel->getActiveSheet()->mergeCells('J7:K7');
        $excel->setActiveSheetIndex(1)->setCellValue('L7', " : "); 
        $excel->setActiveSheetIndex(1)->setCellValue('J8', "Tgl. Diterima Sie Keuangan");
        $excel->getActiveSheet()->mergeCells('J8:K8');
        $excel->setActiveSheetIndex(1)->setCellValue('L8', " : "); 
        $excel->getActiveSheet()->getStyle('B6:M8')->applyFromArray($style_end); 

        //Tabel Peserta
        $excel->setActiveSheetIndex(1)->setCellValue('B11', "Nama Faskes");
        $excel->getActiveSheet()->mergeCells('B11:D11');
        $excel->setActiveSheetIndex(1)->setCellValue('E11', "Nama Peserta");
        $excel->getActiveSheet()->mergeCells('E11:E11');
        $excel->setActiveSheetIndex(1)->setCellValue('F11', "NOKA");
        $excel->getActiveSheet()->mergeCells('F11:F11');
        $excel->setActiveSheetIndex(1)->setCellValue('G10', "Tanggal Pelayanan");
        $excel->getActiveSheet()->mergeCells('G10:H10');
        $excel->setActiveSheetIndex(1)->setCellValue('G11', "Tanggal");
        $excel->setActiveSheetIndex(1)->setCellValue('G12', "Masuk");
        $excel->setActiveSheetIndex(1)->setCellValue('H11', "Tanggal");
        $excel->setActiveSheetIndex(1)->setCellValue('H12', "Keluar");
        $excel->setActiveSheetIndex(1)->setCellValue('I10', "TELAAHAN VERIFIKASI");
        $excel->getActiveSheet()->mergeCells('I10:M10');
        $excel->setActiveSheetIndex(1)->setCellValue('I11', "Diajukan");
        $excel->setActiveSheetIndex(1)->setCellValue('I12', "(Rp)");
        $excel->setActiveSheetIndex(1)->setCellValue('J11', "Disetujui");
        $excel->setActiveSheetIndex(1)->setCellValue('J12', "(Rp)");
        $excel->setActiveSheetIndex(1)->setCellValue('K11', "Selisih");
        $excel->setActiveSheetIndex(1)->setCellValue('K12', "(Rp)");
        $excel->setActiveSheetIndex(1)->setCellValue('L11', "URAIAN");
        $excel->getActiveSheet()->mergeCells('L11:M12');
        $excel->getActiveSheet()->getStyle('B10:M12')->applyFromArray($style_grs);
        $excel->getActiveSheet()->getStyle('L11:M12')->applyFromArray($style_atki);
        $excel->getActiveSheet()->getStyle('K11:K12')->applyFromArray($style_atka);
        $excel->getActiveSheet()->getStyle('J11:J12')->applyFromArray($style_atka);
        $excel->getActiveSheet()->getStyle('I11:I12')->applyFromArray($style_atka);
        $excel->getActiveSheet()->getStyle('E10:E12')->applyFromArray($style_grs);
        $excel->getActiveSheet()->getStyle('F10:F12')->applyFromArray($style_grs);
        $excel->getActiveSheet()->getStyle('H10:H12')->applyFromArray($style_atka);
        $excel->getActiveSheet()->getStyle('H11:H12')->applyFromArray($style_atki);
        $excel->getActiveSheet()->getStyle('G11:G12')->applyFromArray($style_atka);


        foreach($this->fpkone_model->get_fpkone($id) as $data){
            $excel->setActiveSheetIndex(1)->setCellValue('E6', $data->nama_faskes);
            $excel->getActiveSheet()->mergeCells('E6:G6');
            $excel->setActiveSheetIndex(1)->setCellValue('E7', $data->bulan_pelayanan);
            $excel->setActiveSheetIndex(1)->setCellValue('E8', $data->noreg_masuk);
            $excel->setActiveSheetIndex(1)->setCellValue('M6', $data->tgl_masuk);   
            $excel->getActiveSheet()->mergeCells('M6:N6');
            $excel->setActiveSheetIndex(1)->setCellValue('B13', $data->nama_faskes);
            $excel->getActiveSheet()->mergeCells('B13:D14');

           
            

        }
        //$select = $this->db->get('tb_pesertatwo')->result();
        $counter = 13;
        foreach($this->fpkone_model->get_peserta($id) as $data):
            $excel->setActiveSheetIndex(1)->setCellValue('E'. $counter, $data->nama_peserta); 
            $excel->setActiveSheetIndex(1)->setCellValue('F'. $counter, $data->noka);
            $excel->setActiveSheetIndex(1)->setCellValue('G'. $counter, $data->tanggal_masuk);
            $excel->setActiveSheetIndex(1)->setCellValue('H'. $counter, $data->tanggal_keluar);
            $excel->setActiveSheetIndex(1)->setCellValue('I'. $counter, $data->diajukan);
            $excel->setActiveSheetIndex(1)->setCellValue('J'. $counter, $data->disetujui);
            $excel->setActiveSheetIndex(1)->setCellValue('K'. $counter, $data->selisih);
            $excel->setActiveSheetIndex(1)->setCellValue('M'. $counter, $data->uraian);
            


            $counter = $counter+1;
        
        endforeach;
        $nox=$counter++;
        $nex=$counter+2;
        $nx=$counter+4;
        $n=$counter+8;


        $excel->setActiveSheetIndex(1)->setCellValue('E'.$counter, "Jumlah.");
        $excel->setActiveSheetIndex(1)->setCellValue('D'.$nex, "Ket : Biaya Paket Rawat Inap Rp. 100,000 per hari");
        $excel->setActiveSheetIndex(1)->setCellValue('E'.$nx, "Pps. Koordinator Pra Verifikasi");
       // $excel->setActiveSheetIndex(1)->setCellValue('E'.$n, "Darmayanti Utami");
        $excel->setActiveSheetIndex(1)->setCellValue('J'.$nx, "Staff Bidang Keuangan");
       // $excel->setActiveSheetIndex(1)->setCellValue('I'.$n, "Fitria maya Sari");
        $excel->setActiveSheetIndex(1)->setCellValue('M'.$nx, "Pemerinci");
       // $excel->setActiveSheetIndex(1)->setCellValue('L'.$n, "Anggi Pramana");

        foreach($this->fpkone_model->get_fpkone($id) as $data){
        $excel->setActiveSheetIndex(1)->setCellValue('I'.$counter, $data->jumlah_ajukan);   
        $excel->setActiveSheetIndex(1)->setCellValue('J'.$counter, $data->jumlah_setuju);
        $excel->setActiveSheetIndex(1)->setCellValue('K'.$counter, $data->jumlah_ajukan-$data->jumlah_setuju);
        }

        foreach($this->fpkone_model->get_pra() as $data){
        $excel->setActiveSheetIndex(1)->setCellValue('E'.$n, $data->nama_pegawai);
        }

        foreach($this->fpkone_model->get_keu() as $data){
        $excel->setActiveSheetIndex(1)->setCellValue('J'.$n, $data->nama_pegawai);
        }

        foreach($this->fpkone_model->get_verif() as $data){
        $excel->setActiveSheetIndex(1)->setCellValue('M'.$n, $data->nama_pegawai);
        }

        
         
        $sharedStyle1 = new PHPExcel_Style();
        $sharedStyle2 = new PHPExcel_Style();
        $sharedStyle3 = new PHPExcel_Style();
        $sharedStyle4 = new PHPExcel_Style();
        $sharedStyle5 = new PHPExcel_Style();
        $sharedStyle6 = new PHPExcel_Style();
        $sharedStyle7 = new PHPExcel_Style();
        $sharedStyle8 = new PHPExcel_Style();
        $sharedStyle9 = new PHPExcel_Style(); 
        $sharedStylef = new PHPExcel_Style(); 
        $sharedStylekk = new PHPExcel_Style(); 
        $sharedStyleend = new PHPExcel_Style(); 
        $sharedStylean = new PHPExcel_Style(); 

        $sharedStyle1->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            
         ));

        $sharedStyle2->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT      
            ),      
            
         ));

        $sharedStyle3->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT     
            ),      
            
         ));

        $sharedStyle4->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT     
            ),      
            
         ));

        $sharedStyle5->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT    
            ),      
            
         ));

        $sharedStyle6->applyFromArray(
         array('borders' => array(
         
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            
         ));

        $sharedStyle7->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            
         ));

        $sharedStylean->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT      
            ),      
            
         ));


        $sharedStyle8->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),

         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
         
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            
         ));

        $sharedStyle9->applyFromArray(
         array('borders' => array(
         'left' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            
         ));

        $sharedStylef->applyFromArray(
         array('borders' => array(
         
         
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER      
            ),      
            
         ));

        $sharedStylekk->applyFromArray(
         array('borders' => array(
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT     
            ),      
            
         ));

        $sharedStyleend->applyFromArray(
         array('borders' => array(
         'right' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         
         ),
          'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 10),   
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER     
            ),      
            
         ));
        


        //Pemanggilan Style untuk Cell
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle6, "B13:D14");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle9, "B15:B$nox");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle4, "E13:E$nox");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle1, "F13:H$nox");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle5, "I13:K$nox");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle2, "L13:L$nox");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle3, "M13:M$nox");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle7, "B$counter");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle8, "C$counter:H$counter");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle5, "I$counter:J$counter");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStylean, "K13:K$counter");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle2, "L$counter");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStyle3, "M$counter");
        $excel->getActiveSheet(1)->setSharedStyle($sharedStylef, "B$nex:M$n");

        // Set width kolom    
        $excel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('B')->setWidth(10); // Set width kolom B
        $excel->getActiveSheet()->getColumnDimension('C')->setWidth(11); // Set width kolom C
        $excel->getActiveSheet()->getColumnDimension('D')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('E')->setWidth(27);
        $excel->getActiveSheet()->getColumnDimension('F')->setWidth(16);
        $excel->getActiveSheet()->getColumnDimension('G')->setWidth(12);
        $excel->getActiveSheet()->getColumnDimension('H')->setWidth(12);
        $excel->getActiveSheet()->getColumnDimension('I')->setWidth(14);
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(14);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(14);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(2);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(16);


        $excel->setActiveSheetIndex(1);
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
        $excel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
        //$excel->getActiveSheet()->getPageSetup()->setPrintQuality(PHPExcel_Worksheet_PageSetup::PRINTQUALITY_4000);
        $excel->getActiveSheet()->getPageSetup()->setFitToPage(true);
        $excel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
        $excel->getActiveSheet()->getPageSetup()->setFitToHeight(0);


        $excel->getProperties()->setCreator("Kurniawan")
            ->setLastModifiedBy("Kurniawan")
            ->setTitle("Export PHPExcel Test Document")
            ->setSubject("Export PHPExcel Test Document")
            ->setDescription("Test doc for Office 2007 XLSX, generated by PHPExcel.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("PHPExcel");
        $excel->setActiveSheetIndex(0);  //pertama tampil sheet pertama

       
        
        
       
        $write  = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        header('Last-Modified:'. gmdate("D, d M Y H:i:s").'GMT');
        header('Chace-Control: no-store, no-cache, must-revalation');
        header('Chace-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="FPK'. date('dmY') .'.xlsx"');
        
        $write->save('php://output');
    }



}

/* End of file fpkone.php */
/* Location: ./application/controllers/fpkone.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */