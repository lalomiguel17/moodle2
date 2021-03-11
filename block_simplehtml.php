<? php
class block_simplehtml extiende block_base {
    public  function init ( )  {
        $ this -> title  = get_string ( 'simplehtml' ,  'block_simplehtml' ) ;
    }
    // La etiqueta PHP y el corchete para la definición de la clase
    // solo se cerrarán después de que se agregue otra función en la siguiente sección.
    ​function get_content(){
        ​if ($this->content !== null) {
          ​return $this->content;
        ​}

        ​$this->content         =  new stdClass;
        ​$this->content->text   = 'The content of our SimpleHTML block!';
        ​$this->content->footer = 'Footer here...';

        ​return $this->content;
      }


      public ​function specialization() {
        ​if (isset($this->config)) {
            ​if (empty($this->config->title)) {
                ​$this->title = get_string('defaulttitle', 'block_simplehtml');
            ​} else {
                ​$this->title = $this->config->title;
            ​}

            ​if (empty($this->config->text)) {
                ​$this->config->text = get_string('defaulttext', 'block_simplehtml');
            ​}
        ​}
            }

            public ​function instance_allow_multiple() {
                ​return true;
            }


            public ​function instance_config_save($data, $nolongerused = false) {
                ​$data = stripslashes_recursive($data);
                ​$this->config = $data;
                ​return set_field('block_instance',
                                 ​'configdata',
                                  ​base64_encode(serialize($data)),
                                 ​'id',
            }

            public ​function instance_config_save($data,$nolongerused =false) {
                ​if(get_config('simplehtml', 'Allow_HTML') == '1') {
                  ​$data->text = strip_tags($data->text);
                ​}

                ​// And now forward to the default implementation defined in the parent class
                ​return parent::instance_config_save($data,$nolongerused);
            }

            public ​function hide_header() {
                ​return true;
            }


                public ​function html_attributes() {
                    ​$attributes = parent::html_attributes(); // Get default values
                    ​$attributes['class'] .= ' block_'. $this->name(); // Append our class to class attribute
                    ​return $attributes;
                }

                public ​function applicable_formats() {
                    ​return array('site-index' => true);
                }


                public ​function applicable_formats() {
                    ​return array(
                             ​'course-view' => true,
                      ​'course-view-social' => false);}
public function applicable_formats() {
  return array(
           'site-index' => true,
          'course-view' => true,
   'course-view-social' => false,
                  'mod' => true,
             'mod-quiz' => false
  );
}

class block_my_menu extends block_list {
    // The init() method does not need to change at all
}


public ​function get_content() {
    ​if ($this->content !== null) {
      ​return $this->content;
    ​}

    ​$this->content         = new stdClass;
    ​$this->content->items  = array();
    ​$this->content->icons  = array();
    ​$this->content->footer = 'Footer here...';

    ​$this->content->items[] = html_writer::tag('a', 'Menu Option 1', array('href' => 'some_file.php'));
    ​$this->content->icons[] = html_writer::empty_tag('img', array('src' => 'images/icons/1.gif', 'class' => 'icon'));

    ​// Add more list items here

    ​return $this->content;}

}




