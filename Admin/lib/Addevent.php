<?php
	include_once 'Database.php';
	include_once 'Format.php';
?>
<?php
    class AddEventToDatabase {
        private $db;
		private $fm;

		public function __construct(){
			$this->db = new Database();
			$this->fm = new Format();
		}
        
        // Add Data to Department Table
        public function addDepartment($post){
            $department = $this->fm->validation($post['department']);

            $query = "INSERT INTO department (Department) VALUES ('$department')";
			$result = $this->db->insert($query);
        }

        // Add Data to Event Table
        public function addEvent($post){
            $user_id = $this->fm->validation($post['user_id']);
            $title = $this->fm->validation($post['title']);
            $message = $this->fm->validation($post['message']);            
            $status = $this->fm->validation($post['status']);
            $stat = $this->fm->validation($post['stat']);
            $created_at = $this->fm->validation($post['created_at']);
            $updated_at = $this->fm->validation($post['updated_at']);

            $query = "INSERT INTO event (User_id, Title, Message, Status, stat, Created_at, Updated_at) VALUES ('$user_id', 'title', '$message', '$status', '$stat', '$created_at', '$updated_at')";
			$result = $this->db->insert($query);
        }

        // Add Data to Gender Table
        public function addGender($post){
            $gender = $this->fm->validation($post['gender']);

            $query = "INSERT INTO gender (Gender) VALUES ('$gender')";
			$result = $this->db->insert($query);
        }

        // Add Data to Marital Status Table
        public function addMaritalStatus($post){
            $marital_status = $this->fm->validation($post['department']);

            $query = "INSERT INTO marital_status (Marital_status) VALUES ('$marital_status')";
			$result = $this->db->insert($query);
        }

        // Add Data to Message Table
        public function addMessage($post){
            $user_id = $this->fm->validation($post['user_id']);
            $title = $this->fm->validation($post['title']);
            $message = $this->fm->validation($post['message']);
            $created_at = $this->fm->validation($post['created_at']);
            $updated_at = $this->fm->validation($post['updated_at']);

            $query = "INSERT INTO message (User_id, Title, Message, Created_at, Updated_at) VALUES ('$user_id', '$title', '$message', '$created_at', '$updated_at')";
			$result = $this->db->insert($query);
        }

        // Add Data to School Table
        public function addSchool($post){
            $school = $this->fm->validation($post['school']);

            $query = "INSERT INTO school (School) VALUES ('$school')";
			$result = $this->db->insert($query);
        }

        // Add Data to Session Table
        public function addSession($post){
            $session = $this->fm->validation($post['session']);

            $query = "INSERT INTO session (Session) VALUES ('$session')";
			$result = $this->db->insert($query);
        }

        // Add Data to User Academic Table
        public function addUserAcademic($post){
            $session_id = $this->fm->validation($post['session_id']);
            $department_id = $this->fm->validation($post['department_id']);
            $school_id = $this->fm->validation($post['school_id']);
            $created_at = $this->fm->validation($post['created_at']);
            $updated_at = $this->fm->validation($post['updated_at']);

            $query = "INSERT INTO user_academic (Session_id, Department_id, School_id, Created_at, Updated_at) VALUES ('$session_id', '$department_id', '$school_id', '$created_at', '$updated_at')";
			$result = $this->db->insert($query);
        }

        // Add Data to User Datails Table
        public function addUserDetails($post){
            $user_id = $this->fm->validation($post['user_id']);
            $username = $this->fm->validation($post['username']);
            $password = $this->fm->validation($post['password']);
            $created_at = $this->fm->validation($post['created_at']);
            $updated_at = $this->fm->validation($post['updated_at']);

            $query = "INSERT INTO user_details (User_id, Username, Password, Created_at, Updated_at) VALUES ('$user_id', '$username', '$password', '$created_at', '$updated_at')";
			$result = $this->db->insert($query);
        }

        // Add Data to User Profile Table
        public function addUserProfileDetails($post){
            $user_id = $this->fm->validation($post['user_id']);
            $surname = $this->fm->validation($post['surname']);
            $othername = $this->fm->validation($post['othername']);
            $gender = $this->fm->validation($post['gender']);
            $marital_status = $this->fm->validation($post['marital_status']);
            $phone = $this->fm->validation($post['phone']);
            $email = $this->fm->validation($post['email']);
            $address = $this->fm->validation($post['address']);
            $fb = $this->fm->validation($post['fb']);
            $twitter = $this->fm->validation($post['twitter']);
            $insta = $this->fm->validation($post['insta']);
            $created_at = $this->fm->validation($post['created_at']);
            $updated_at = $this->fm->validation($post['updated_at']);

            $query = "INSERT INTO user_profile (User_id, Surname, Othername, Gender_id, Marital_status_id, Phone, Email, Address, Dob, Fb_handle, Tw_handle, Insta_handle, Created_at, Updated_at) VALUES ('$user_id', '$surname', '$othername', '$gender', '$marital_status', '$phone', '$email', '$address', '$fb', '$twitter', '$insta', '$created_at', '$updated_at')";
			$result = $this->db->insert($query);
        }
    }
?>