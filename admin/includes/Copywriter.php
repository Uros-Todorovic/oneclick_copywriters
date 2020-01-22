<?php


class Copywriter extends Database_object {
    protected static $db_table = "copywriters";
    public $id;
    public $name;
    public $description;
    public $price;
    public $image;

    private $tmp_path;
    
    private $upload_directory = "images";
    private $image_placeholder = "https://via.placeholder.com/150";
    private $errors = [];
    private  $upload_errors_array = [
        UPLOAD_ERR_OK => 'There is no error, the file uploaded with success.',
        UPLOAD_ERR_INI_SIZE => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        UPLOAD_ERR_FORM_SIZE => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        UPLOAD_ERR_PARTIAL => 'The uploaded file was only partially uploaded.',
        UPLOAD_ERR_NO_FILE => 'No file was uploaded.',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
        UPLOAD_ERR_CANT_WRITE => 'Cannot write to target directory. Please fix CHMOD.',
        UPLOAD_ERR_EXTENSION => 'A PHP extension stopped the file upload.'
    ];

    public function set_file($file){

        if (empty($file) || !$file || !is_array($file)) {
            $this->errors[] = "File was not uploaded";
            return false;
        } else if($file['error'] != 0){
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        } else {
        $this->image = basename($file['name']);
        $this->tmp_path = $file['tmp_name'];
        }
    }

    public function image_path_and_placeholder(){
        return empty($this->image) ? $this->image_placeholder : $this->upload_directory.DS.$this->image;
    }

    public function picture_path(){
        return $this->upload_directory.DS.$this->image;
    }

    public function save_copywriter_and_img(){
        /* if ($this->id) {
            $this->update();
        } else { */
            if (!empty($this->errors)) {
                return false;
            }
            if (empty($this->image) || empty($this->tmp_path)) {
                $this->errors[] = "File was not available"; 
            }

            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->image;
            if (file_exists($target_path)) {
                $this->errors[] = "The file {$this->image} alredy exists";
                return false; 
            }

            if (move_uploaded_file($this->tmp_path, $target_path)) {
                /* if ($this->create()) { */
                    unset($this->tmp_path);
                    return true;
                /* } */
            } else {
                $this->errors[] = "File directory probably does not have permission for upload";
                return false;
            }
        /* }  */
    } 

    public function delete_copywriter(){
        $target_path = SITE_ROOT.DS. 'admin' . DS . $this->picture_path();
        unlink($target_path);
        return $this->delete() ? true : false;
    }
}