<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class pekanbaru extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('pekanbaru_model');
        $this->load->library('form_validation');
        $this->load->library('PHPExcel');
        chek_session();
    }

    public function index() {
        $pekanbaru = $this->pekanbaru_model->get_all();

        $data = array(
            'pekanbaru_data' => $pekanbaru
        );

        $this->template->display('pekanbaru/tb_pekanbaru_list', $data);
    }



    public function read($kd) {
        $row = $this->pekanbaru_model->get_by_kd($kd);
        if ($row) {
            $data = array(
                'kode_faskes' => $row->kode_faskes,
                'nama_faskes' => $row->nama_faskes,
                'alamat' => $row->alamat,
            );
            $this->template->display('pekanbaru/tb_pekanbaru_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pekanbaru'));
        }
    }

  
    public function create() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pekanbaru/create_action'),
            'kode_faskes' => set_value('kode_faskes'),
            'nama_faskes' => set_value('nama_faskes'),
            'alamat' => set_value('alamat'),
            'id_daerah'=> set_value('id_daerah'),
           
        );
        $this->template->display('pekanbaru/tb_pekanbaru_form', $data);
    }

    public function create_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'kode_faskes' => $this->input->post('kode_faskes', TRUE),
                'nama_faskes' => $this->input->post('nama_faskes', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'id_daerah' => $this->input->post('id_daerah', TRUE),
                
            );

            $this->pekanbaru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pekanbaru'));
        }
    }

    public function update($kd) {
        $row = $this->pekanbaru_model->get_by_kd($kd);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pekanbaru/update_action'),
                'kode_faskes' => set_value('kode_faskes', $row->kode_faskes),
                'nama_faskes' => set_value('nama_faskes', $row->nama_faskes),
                'alamat' => set_value('alamat', $row->alamat),
                'id_daerah' => set_value('id_daerah', $row->nama_faskes),
            );
            $this->template->display('pekanbaru/tb_pekanbaru_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pekanbaru'));
        }
    }

    public function update_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_faskes', TRUE));
        } else {
            $data = array(
                'kode_faskes' => $this->input->post('kode_faskes', TRUE),
                'nama_faskes' => $this->input->post('nama_faskes', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'id_daerah' => $this->input->post('id_daerah', TRUE),
            );

            $this->pekanbaru_model->update($this->input->post('kode_faskes', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pekanbaru'));
        }
    }

    public function delete($kd) {
        $row = $this->pekanbaru_model->get_by_kd($kd);

        if ($row) {
            $this->pekanbaru_model->delete($kd);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pekanbaru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pekanbaru'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('kode_faskes', 'kode_faskes', 'trim|required');
        $this->form_validation->set_rules('nama_faskes', 'nama_faskes', 'trim|required');
        $this->form_validation->set_rules('nama_faskes', 'alamat', 'trim|required');
        $this->form_validation->set_rules('id_daerah', 'id_daerah', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

   
    function excel() {
        $select = $this->db->get('tb_faskes')->result();
        
        $objPHPExcel    = new PHPExcel();
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(33);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
        
        
        $objPHPExcel->getActiveSheet()->getStyle(1)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle(2)->getFont()->setBold(true);
        $objPHPExcel->getActiveSheet()->getStyle(3)->getFont()->setBold(true);
        
        $header = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => 'FF0000'),
                'name' => 'Verdana'
            )
        );

        $style_end = array(      
            'font' => array('bold' => true, 'name' => 'Times New Roman', 'size' => 11 ), // Set font nya jadi bold      
            'alignment' => array(        
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT, // Set text jadi dikiri secara horizontal             
            ) 
        );
        

        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E1', "DAFTAR FASILITAS KESEHATAN (FASKES)");   
        $objPHPExcel->getActiveSheet()->mergeCells('E1:F1');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('E2', "KOTA PEKANBARU");   
        $objPHPExcel->getActiveSheet()->mergeCells('F2:F2');
        $objPHPExcel->getActiveSheet()->getStyle('E1:F2')->applyFromArray($style_end);;
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B4', 'No.')
            ->setCellValue('C4', 'Kode Faskes')
            ->setCellValue('D4', 'Nama Faskes')
            ->setCellValue('E4', 'Alamat');
            
        
        $ex = $objPHPExcel->setActiveSheetIndex(0);
        $dataArray= array();
        $no = 1;
        $counter = 5;
        foreach ($this->pekanbaru_model->get_all() as $data):
            $ex->setCellValue('B'.$counter, $no++);
            $ex->setCellValue('C'.$counter, $data->kode_faskes);
            $ex->setCellValue('D'.$counter, $data->nama_faskes);
            $ex->setCellValue('E'.$counter, $data->alamat);
            
            
            $counter = $counter+1;
        endforeach;
        $nox=$no+5;
        $objPHPExcel->getActiveSheet()->fromArray($dataArray, NULL, 'B5');

        // Set title row bold;
        $objPHPExcel->getActiveSheet()->getStyle('B4:E4')->getFont()->setBold(true);
        
 
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $objPHPExcel->setActiveSheetIndex(0);
         
        $sharedStyle1 = new PHPExcel_Style();
        $sharedStyle2 = new PHPExcel_Style();
         
        $sharedStyle1->applyFromArray(
         array('borders' => array(
         'bottom' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'top' => array('style' => PHPExcel_Style_Border::BORDER_THIN),
         'right' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM),
         'left' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM)
         ),

         ));



        $objPHPExcel->getActiveSheet()->setSharedStyle($sharedStyle1, "B4:E$nox");


 
        // Set style for header row using alternative method
        $objPHPExcel->getActiveSheet()->getStyle('B4:E4')->applyFromArray(
         array(
         'font' => array(
         'bold' => true
         ),
         'alignment' => array(
         'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
         ),
         'borders' => array(
         'top' => array(
         'style' => PHPExcel_Style_Border::BORDER_THIN
         )
         ),
         'fill' => array(
         'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
         'rotation' => 90,
         'startcolor' => array(
         'argb' => 'FFA0A0A0'
         ),
         'endcolor' => array(
         'argb' => 'FFFFFFFF'
         )
         )
         )
        );
         
        $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName('Bpjs Kesehatan');
        $objDrawing->setDescription('Logo BPJS Kesehatan');
        $objDrawing->setPath('C:/xampp/htdocs/bpjs/assets/img/logo_bpjs1.png');
        $objDrawing->setCoordinates('B1'); 
        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

        $objPHPExcel->getProperties()->setCreator("Kurniawan")
            ->setLastModifiedBy("Kurniawan")
            ->setTitle("Export PHPExcel Test Document")
            ->setSubject("Export PHPExcel Test Document")
            ->setDescription("Test doc for Office 2007 XLSX, generated by PHPExcel.")
            ->setKeywords("office 2007 openxml php")
            ->setCategory("PHPExcel");
        $objPHPExcel->getActiveSheet()->setTitle('kota pekanbaru');
        
        $objWriter  = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        header('Last-Modified:'. gmdate("D, d M Y H:i:s").'GMT');
        header('Chace-Control: no-store, no-cache, must-revalation');
        header('Chace-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Faskes Kota Pekanbaru'. date('dmY') .'.xlsx"');
        
        $objWriter->save('php://output');
    }

}

/* End of file pekanbaru.php */
/* Location: ./application/controllers/pekanbaru.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */