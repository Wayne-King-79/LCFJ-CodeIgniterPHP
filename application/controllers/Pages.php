<?php


class Pages extends CI_Controller {

    public function view($page = 'home') {

        if ( !file_exists(APPPATH.'views/pages/'.$page.'.php') ) {
            show_404();
            
        }

        $data['title'] = "LCFJ | " . ucfirst($page);  // Capitalize the first letter

        switch ($page) {
            case 'jobs':
                /*
                $this->load->view('templates/header', $data);
                $this->load->view('pages/jobs', $data);
                $this->load->view('templates/footer', $data); */
                #$this->load->library('googlemaps');
                $this->load->model('lcfj_model');
                $config = array();
                $config['center'] = '28.7386038, -81.80868929999997';
                $config['zoom'] = 'auto';
                $config['map_height'] = "500px";
                $this->googlemaps->initialize($config);
                $coords = $this->lcfj_model->getLocations();
                $data['jobs'] = $this->lcfj_model->getJobs();

                foreach ($coords as $coordinate) {
                    $marker = array();
                    $marker['position'] = $coordinate->latitude . ',' . $coordinate->longitude;
                    $marker['infowindow_content'] = "<strong>" . $coordinate->date . "<br/>" . $coordinate->company . "</strong><br/>" . $coordinate->address . "<br/>". $coordinate->city . ", " . $coordinate->state . " " . $coordinate->zip . "<br/>" . $coordinate->description;
                    $this->googlemaps->add_marker($marker);
                }

                $this->googlemaps->add_marker($marker);
                $data['map'] = $this->googlemaps->create_map();
                $this->load->view('templates/header', $data);
                $this->load->view('pages/jobs', $data);
                $this->load->view('templates/footer', $data);
                break;
            /*
            case 'announcements':
                $this->load->model('announce_model');
                $announcedata['jobs'] = $this->announce_model->getAnnouncements();
                $this->load->view('templates/header', $data);
                $this->load->view('pages/announcements', $announcedata);
                $this->load->view('templates/footer', $data);
                break;
            case 'veterans':
                $this->load->model('vets_model');
                $announcedata['jobs'] = $this->vets_model->getAnnouncements();
                $this->load->view('templates/header', $data);
                $this->load->view('pages/veterans', $announcedata);
                $this->load->view('templates/footer', $data);
                break;
            */
            case 'contact':
                $this->load->view('templates/header', $data);
                $this->load->view('pages/contact', $data);
                $this->load->view('templates/footer', $data);
                break;
            case 'unsupported':
                $this->load->view('pages/unsupported', $data);
                break;
            default:
                $this->load->model('lcfj_model');
                /*
                $this->load->model('announce_model');
                $data['announcements'] = $this->announce_model->getAnnouncements();
                */
                $config = array();
                $config['center'] = '28.7386038, -81.80868929999997';
                $config['zoom'] = 'auto';
                $config['map_height'] = "500px";
                $this->googlemaps->initialize($config);
                $coords = $this->lcfj_model->getLocations();
                $data['jobs'] = $this->lcfj_model->getJobs();

                foreach ($coords as $coordinate) {
                    $marker = array();
                    $marker['position'] = $coordinate->latitude . ',' . $coordinate->longitude;
                    $marker['infowindow_content'] = "<strong>" . $coordinate->date . "<br/>" . $coordinate->company . "</strong><br/>" . $coordinate->address . "<br/>". $coordinate->city . ", " . $coordinate->state . " " . $coordinate->zip . "<br/>" . $coordinate->description;
                    $this->googlemaps->add_marker($marker);
                }

                $this->googlemaps->add_marker($marker);
                $data['map'] = $this->googlemaps->create_map();
                $this->load->view('templates/header', $data);
                #$this->load->view('pages/home', $data);
                #$this->load->view('templates/footer', $data);
        }

    }



}