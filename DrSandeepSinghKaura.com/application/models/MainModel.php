<?php 

   class MainModel extends CI_Model 
   {
      public function get_total_news()
      {
         return $this->db->count_all("news");
      }

      public function get_news_for_particular_page($per_page, $page)
      {
         $query = $this->db->limit($per_page, $page)
                           ->order_by('posted_on' , 'desc');
                           
         $action = $query->get("news");
 
         if ($action->num_rows() > 0) 
         {
             foreach ($action->result_array() as $row) 
             {
                 $data[] = $row;
             }
             return $data;
         }
         return false;
      }

      public function get_total_events()
      {
         return $this->db->count_all("events");
      }

      public function get_events_for_particular_page($per_page, $page)
      {
         $query = $this->db->limit($per_page, $page)
                           ->order_by('posted_on' , 'desc');
                           
         $action = $query->get("events");
 
         if ($action->num_rows() > 0) 
         {
             foreach ($action->result_array() as $row) 
             {
                 $data[] = $row;
             }
             return $data;
         }
         return false;
      }

      public function get_message_from_mr_kaura()
      {
         $query = $this->db->limit(1)
                           ->order_by('time' , 'desc');
         
         $action = $query->get("messages_from_mr_kaura");

         if ($action->num_rows() > 0) 
         {
            return $action->result_array()[0]['message'];
         }
         else
         {
            return false;
         }
      }

      public function get_top_5_news()
      {
         $query = $this->db->limit(5)
                           ->order_by('posted_on' , 'desc');
         
         $action = $query->get("news");

         if ($action->num_rows() > 0) 
         {
            foreach ($action->result_array() as $row) 
            {
               $data[] = $row;
            }
               return $data;
         }
         return false;
      }

      public function add_contact_message($parameters)
      {
         $id             = $this->get_incremented_contact_messages_id();
         $name          = $parameters['name'];
         $email_address    = $parameters['email_address'];
         $subject          = $parameters['subject'];
         $message          = $parameters['message'];
         $created_at           = time();

         $data = array(
            'id'               => $id,
            'name'             => $name,
            'email_address'    => $email_address,
            'subject'          => $subject,
            'message'          => $message,
            'created_at'       => $created_at
         );

         if ($this->db->insert('contact_messages', $data))
         {
            return true;
         }
         else
         {
            return false;
         }
      }

      public function get_incremented_contact_messages_id()
      {
         $query = $this->db->select('id')
                           ->limit(1)
                           ->order_by('id', 'desc');

         $action = $query->get('contact_messages');
         
         $result = $action->result_array();    
         
         if ($result == array())
         {
            return 1;
         }
         else
         {
            return $result[0]['id'] + 1;
         }
      }
   }
?>