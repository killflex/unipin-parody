<?php
class Transactions
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addTransactions($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO transactions (id_transaction, customer_id, product, amount, currency, country, risk, card, status) VALUES (:id_transaction, :customer_id, :product, :amount, :currency, :country, :risk, :card, :status)');

        // Bind Values
        $this->db->bind(':id_transaction', $data['id_transaction']);
        $this->db->bind(':customer_id', $data['customer_id']);
        $this->db->bind(':product', $data['product']);
        $this->db->bind(':amount', $data['amount']);
        $this->db->bind(':currency', $data['currency']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':risk', $data['risk']);
        $this->db->bind(':card', $data['card']);
        $this->db->bind(':status', $data['status']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getTransactions()
    {
        $this->db->query('SELECT * FROM transactions ORDER BY created_at DESC');

        $results = $this->db->resultset();

        return $results;
    }
}
