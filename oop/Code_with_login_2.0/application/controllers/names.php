<?php
$data['all_names'] = $this->names_model->get_all_names();
$data['dynamic_view'] = 'names/show_all_names';
$this->load->view(
'templates/main_template'
, 
$data
);