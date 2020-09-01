<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class jejaring extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('jejaring_model');
        $this->load->library('form_validation');
        $this->load->library('PHPExcel');
        chek_session();
    }

    public function index() {
        $jejaring = $this->jejaring_model->get_all();

        $data = array(
            'jejaring_data' => $jejaring
        );

        $this->template->display('jejaring/tb_jejaring_list', $data);
    }



    public function read($id) {
        $row = $this->jejaring_model->get_by_id($id);
        if ($row) {
            $data = array(
                'nama_jejaring' => $row->nama_jejaring,
                'norek' => $row->norek,
                'nonpwp' => $row->nonpwp,
            );
            $this->template->display('jejaring/tb_jejaring_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jejaring'));
        }
    }

  
    public function create() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jejaring/create_action'),
            'nama_jejaring' => set_value('nama_jejaring'),
            'norek' => set_value('norek'),
            'nonpwp' => set_value('nonpwp'),
            'id_jejaring'=> set_value('id_jejaring'),
           
        );
        $this->template->display('jejaring/tb_jejaring_form', $data);
    }

    public function create_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama_jejaring' => $this->input->post('nama_jejaring', TRUE),
                'norek' => $this->input->post('norek', TRUE),
                'nonpwp' => $this->input->post('nonpwp', TRUE),
                'id_jejaring' => $this->input->post('id_jejaring', TRUE),
                
            );

            $this->jejaring_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jejaring'));
        }
    }

    public function update($id) {
        $row = $this->jejaring_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jejaring/update_action'),
                'nama_jejaring' => set_value('nama_jejaring', $row->nama_jejaring),
                'norek' => set_value('norek', $row->norek),
                'nonpwp' => set_value('nonpwp', $row->nonpwp),
                'id_jejaring' => set_value('id_jejaring', $row->id_jejaring),
            );
            $this->template->display('jejaring/tb_jejaring_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jejaring'));
        }
    }

    public function update_action() {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jejaring', TRUE));
        } else {
            $data = array(
                'nama_jejaring' => $this->input->post('nama_jejaring', TRUE),
                'norek' => $this->input->post('norek', TRUE),
                'nonpwp' => $this->input->post('nonpwp', TRUE),
                'id_jejaring' => $this->input->post('id_jejaring', TRUE),
            );

            $this->jejaring_model->update($this->input->post('id_jejaring', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jejaring'));
        }
    }

    public function delete($id) {
        $row = $this->jejaring_model->get_by_id($id);

        if ($row) {
            $this->jejaring_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jejaring'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jejaring'));
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('nama_jejaring', 'nama_jejaring', 'trim|required');
        $this->form_validation->set_rules('norek', 'norek', 'trim|required');
        $this->form_validation->set_rules('nonpwp', 'nonpwp', 'trim|required');
        $this->form_validation->set_rules('id_jejaring', 'id_jejaring', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

   
    function excel() {
        $select = $this->db->get('tb_jejaring')->result();
        
        $objPHPExcel    = new PHPExcel();
        $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
        $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(25);
        $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(33);
        $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
        
        
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
        

        
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D1', "                            DAFTAR FASILITAS KESEHATAN (FASKES)");   
        $objPHPExcel->getActiveSheet()->mergeCells('D1:H1');
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('D2', "                           JEJARING");   
        $objPHPExcel->getActiveSheet()->mergeCells('D2:F2');
        $objPHPExcel->getActiveSheet()->getStyle('D1:F2')->applyFromArray($style_end);;
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B4', 'No.')
            ->setCellValue('C4', 'Nama Jejaring')
            ->setCellValue('D4', 'No Rekening')
            ->setCellValue('E4', 'No NPWP');
            
        
        $ex = $objPHPExcel->setActiveSheetIndex(0);
        $dataArray= array();
        $no = 1;
        $counter = 5;
        foreach ($this->jejaring_model->get_all() as $data):
            $ex->setCellValue('B'.$counter, $no++);
            $ex->setCellValue('C'.$counter, $data->nama_jejaring);
            $ex->setCellValue('D'.$counter, $data->norek);
            $ex->setCellValue('E'.$counter, $data->nonpwp);
            
            
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
        $objPHPExcel->getActiveSheet()->setTitle('kota jejaring');
        
        $objWriter  = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        header('Last-Modified:'. gmdate("D, d M Y H:i:s").'GMT');
        header('Chace-Control: no-store, no-cache, must-revalation');
        header('Chace-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Jejaring'. date('dmY') .'.xlsx"');
        
        $objWriter->save('php://output');
    }

}

/* End of file jejaring.php */
/* Location: ./application/controllers/jejaring.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-14 11:06:57 */
/* http://harviacode.com */