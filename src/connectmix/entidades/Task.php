<?php

namespace connectmix\entidades;

    /**
     * @Entity 
     * @Table(name="tasks")
     */
    class Task {
    /**
     * @var integer @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
     private $id;

    /**
     * @var string @Column(type="string", length=255)
     */
    private $title;

    /**
     * @var string @Column(type="string", length=500)
     */
    private $description;

    /**
     * @var string @Column(type="string", length=1)
     */
    private $status;

    /**
     * @var datetime @Column(type="datetime")
     */
    private $created_date;

    /**
     * @var datetime @Column(type="datetime")
     */
    private $updated_date;

    public function __construct($id = 0,$title= "" ,$description= "" ,$status= "" ){
        $this->id           = $id;
        $this->title        = $title;
        $this->description  = $description;
        $this->status       = $status;
        
    }
        
    public static function construct($array){
        $obj = new Usuario();
        $obj->setId( $array['id']);
        $obj->setTitle( $array['title']);
        $obj->setDescription( $array['description']);
        $obj->setStatus( $array['status']);
        return $obj;
        
    }  

    function getId() {
        return $this->id;
     }

    function setId($value) {
        $this->id = $value;
     }

    function getTitle() {
        return $this->title;
    }

    function setTitle($value) {
        $this->title = $value;
    }

    function getDescription() {
        return $this->description;
    }

    function setDescription($value) {
        $this->description = $value;
    }

    function getStatus() {
        return $this->status;
    }

    function setStatus($value) {
        $this->status = $value;
    }

    function getCreated_date() {
        return $this->created_date;
    }

    function setCreated_date($value) {
        $this->created_date = $value;
    }

    function getUpdated_date() {
        return $this->updated_date;
    }

    function setUpdated_date($value) {
        $this->updated_date = $value;
    }
     
    public function toString(){
        return "  [id:" .$this->id. "]  [title:" .$this->title. "]  [description:" .$this->description. "]  [status:" .$this->status. "]  " ;
    }
       
    public function toArray(){
        return [
            "id"           =>$this->id,
            "title"       =>$this->title,
            "description" =>$this->description,
            "status"      =>$this->status,
            "created_date"=>$this->created_date,
            "updated_date"=>$this->updated_date
        ];
    }
}