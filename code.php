#http://stackoverflow.com/questions/29812840/how-to-show-total-user-online-opencart-2-0x/29911176#29911176

Add this function in opencart22\catalog\model\catalog\category.php

  public function getTotalCustomersOnline($data = array()) {
    $sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "customer_online`";
    $query = $this->db->query($sql);
    return $query->row['total'];
  }
and add the code in \opencart22\catalog\controller\common\header.php

    $customer_total = $this->model_catalog_category->getTotalCustomersOnline();
echo "Customer Online".$customer_total;
