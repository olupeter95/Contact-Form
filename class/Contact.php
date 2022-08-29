<?php

class Contact
{
    private $contactTable = 'contact';
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function insert()
    {
        if($this->name) {
            $stmt = $this->conn->prepare("INSERT INTO {$this->contactTable} 
            (`name`, `email`, `subject`, `message`) VALUES(?,?,?,?)");
            $this->name = htmlspecialchars(strip_tags($this->name));
			$this->email = htmlspecialchars(strip_tags($this->email));
            $this->subject = htmlspecialchars(strip_tags($this->subject));
            $this->message = htmlspecialchars(strip_tags($this->message));

            $stmt->bind_param('ssss', $this->name, $this->email, $this->subject, $this->message);
            if($stmt->execute()){
                return true;
            }
        }
    }

    public function view(){
        $stmt = $this->conn->prepare("SELECT * FROM {$this->contactTable}");
        $stmt->execute();
        $result = $stmt->get_result();
        $i = 1;
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){ 
                        
                    ?>
                        	<tr>
									<td><?php echo $i++ ?></td>
									<td><?php echo $row['name'] ?></td>
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['subject'] ?></td>
									<td><?php echo $row['message'] ?></td>
								</tr>
                    <?php
                
            }
        }
    }
}