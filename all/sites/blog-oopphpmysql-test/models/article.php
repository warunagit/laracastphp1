<?php
class Article{
    //db connection
    private $conn;
    //db table name
    private $tableName = "article";

    //object properties
    public $id;
    public $title;
    public $content;
    public $user_id;
    public $category_id;
    public $timestamp;
    public $image;

    //class constructor
    public function __construct($db){
        $this->conn = $db;
    }

    //create product
    function createArticle(){
        
        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->content=htmlspecialchars(strip_tags($this->content));
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));
        $this->category_id=htmlspecialchars(strip_tags($this->category_id));
        //$this->timestamp = date('Y-m-d H:i:s');

        //print_r($this->title."-".$this->content."-".$this->user_id."-".$this->category_id);

        $query = "INSERT INTO {$this->tableName} SET title=:title, content=:content, user_id=:user_id, category_id=:category_id";

        //print_r($query);

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":user_id",$this->user_id);
        $stmt->bindParam(":category_id", $this->category_id);
        //$stmt->bindParam(":timestamp",$this->timestamp);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function getArticles(){
        $query = "SELECT * FROM ".$this->tableName." ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    private function getSavedArticleId(){
        $query = "SELECT id FROM {$this->tableName} ORDER BY id DESC LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->id = $row['id'];
        return $this->id;
    }

    function getArticle(){
        $query = "SELECT * FROM {$this->tableName} WHERE id=? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1,$this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        //$this->id = $row['id'];setet before call to method
        $this->title = $row['title'];
        $this->content = $row['content'];
        $this->user_id = $row['user_id'];
        $this->category_id = $row['category_id'];
        $this->timestamp = $row['timestamp'];
    }

    function uploadPhoto(){
        $result_message="";
        //if($this->image){

            $target_directory = "uploads/";
            $target_file = $target_directory . $this->getSavedArticleId();
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            print_r("target_file: ".$target_file);

            $file_upload_error_messages="";

            if(!is_dir($target_directory)){
                mkdir($target_directory, 0777, true);
            }

            // make sure certain file types are allowed
            /*$allowed_file_types=array("jpg", "jpeg");
            if(!in_array($file_type, $allowed_file_types)){
                $file_upload_error_messages.="<div>Only JPG, JPEG files are allowed.</div>";
            }*/

            if(empty($file_upload_error_messages)){
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file.'.jpg')){
                    //upload done
                }else{
                    $result_message.="<div class='alert alert-danger'>";
                    $result_message.="<div>Unable to upload photo.</div>";
                    $result_message.="<div><a href='edit_article.php/{$this->id}'>Update</a> the record to upload photo.</div>";
                    $result_message.="</div>";
                }
            }else{
                // it means there are some errors, so show them to user
                $result_message.="<div class='alert alert-danger'>";
                    $result_message.="{$file_upload_error_messages}";
                    $result_message.="<div>Update the record to upload photo.</div>";
                $result_message.="</div>";
            }
        //}
        return $result_message;
    }

    function delete(){
        $query = "DELETE FROM " . $this->tableName . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        if($result = $stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
}
?>