<?php
abstract class Manager implements IDao{
    //Connexion est Fermée
    private $pdo=null;
    protected $tableName;
    protected $className;

  private function getConnexion(){
      //Connexion est fermée
      if($this->pdo==null){
          try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=trello_liveLearn","root","Sidibe@1234");
              $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
          }catch(PDOException $ex){
             die("Erreur de Connexion");
          }
        
      }

  }

 private function closeConnexion(){
      
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function executeUpdate($sql){
          $this->getConnexion();
           $nbreLigne= $this->pdo->exec($sql);
          $this->closeConnexion();
          return $nbreLigne;
   }

  public function executeSelect($sql){
      
    $this->getConnexion();
    //Traitement
      $result=$this->pdo->prepare($sql);
      $result->execute();
      $data=[];
     foreach( $result as $rowBD){
        //ORM=> tuple BD transformer en Objet
        $data[]=new $this->className($rowBD);//new User($rowBD)
      };
      $this->closeConnexion();
      return $data;

  }

  public function findAll(){
    $sql="select * from $this->tableName";
    $data=$this->executeSelect($sql);
    //var_dump($data);
  }
public function findById($id){
    $sql="select * from $this->tableName where id=$id ";
    $data=$this->executeSelect($sql);
    var_dump($data);
    return count($data)==1?$data[0]:$data;

}

public function delete($id){
    $sql="delete from $this->tableName where id=$id";
    return $this->executeUpdate($sql)!=0;
}


}