<?php
function get_products($category_id = false, $limit = false, $offset = false, $by=false, $sort=false)
    {
        //if we are provided a category_id, then get products according to category
        if ($category_id)
        {
            //$this->db->select('category_products.*, LEAST(IFNULL(NULLIF(saleprice, 0), price), price) as sort_price', false)->from('category_products')->join('products', 'category_products.product_id=products.id')->where(array('category_id'=>$category_id, 'enabled'=>1));
            $result = $this->db->select('category_products.*')->from('category_products')->where(array('category_id'=>$category_id))->order_by('sequence', 'ASC')->get()->result();

                        // $this->db->order_by($by, $sort);
            
            // $result    = $this->db->limit($limit)->offset($offset)->get()->result();
            $contents    = array();
            $count        = 0;
            foreach ($result as $product)
            {

                $contents[$count]    = $this->get_product($product->product_id);
                $count++;
            }

            return $contents;
        }
        else
        {
            //sort by alphabetically by default
            $this->db->order_by('name', 'ASC');
            $result    = $this->db->get('products');
            //apply group discount
            $return = $result->result();
            if($this->group_discount_formula) 
            {
                foreach($return as &$product) {
                    eval('$product->price=$product->price'.$this->group_discount_formula.';');
                }
            }
            return $return;
        }
    }
