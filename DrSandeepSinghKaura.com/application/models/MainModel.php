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
   }
?>