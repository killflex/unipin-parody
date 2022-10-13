<?php
class Customer
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addCustomer($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO customers (id_customer, email, country) VALUES (:id_customer, :email, :country)');

        // Bind Values
        $this->db->bind(':id_customer', $data['id_customer']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':country', $data['country']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getCustomers()
    {
        $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

        $results = $this->db->resultset();

        return $results;
    }
}
