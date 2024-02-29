<?php

class BusBookingSystem
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'Asambeni_buses';
    private $charset = 'utf8mb4';

    private $pdo;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
                ];
    
                $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        }
    
        public function createDatabase()
        {
            try {
                $this->pdo->exec("CREATE DATABASE IF NOT EXISTS {$this->database}");
                echo "Database created or already exists.\n";
            } catch (PDOException $e) {
                die("Error creating database: " . $e->getMessage());
            }
        }
    
        public function createTables()
        {
            $queries = [
                "CREATE TABLE IF NOT EXISTS Bus_Companies (
                    company_id INT AUTO_INCREMENT PRIMARY KEY,
                    company_name VARCHAR(255) NOT NULL
                )",
                "CREATE TABLE IF NOT EXISTS Payments (
                    payment_id INT AUTO_INCREMENT PRIMARY KEY,
                    company_id INT,
                    route_id INT,
                    time_id INT,
                    amount DECIMAL(10, 2),
                    payment_date DATE,
                    FOREIGN KEY (company_id) REFERENCES Bus_Companies(company_id),
                    FOREIGN KEY (route_id) REFERENCES Routes(route_id),
                    FOREIGN KEY (time_id) REFERENCES Times(time_id)
                )",
    
                "CREATE TABLE IF NOT EXISTS Reviews (
                    review_id INT AUTO_INCREMENT PRIMARY KEY,
                    company_id INT,
                    rating INT,
                    comment TEXT,
                    FOREIGN KEY (company_id) REFERENCES Bus_Companies(company_id)
                )",
    
                "CREATE TABLE IF NOT EXISTS Times (
                    time_id INT AUTO_INCREMENT PRIMARY KEY,
                    company_id INT,
                    route_id INT,
                    departure_time TIME,
                    arrival_time TIME,
                    FOREIGN KEY (company_id) REFERENCES Bus_Companies(company_id),
                    FOREIGN KEY (route_id) REFERENCES Routes(route_id)
                )"
                ];

                foreach ($queries as $query) {
                    try {
                        $this->pdo->exec($query);
                        echo "Table created or already exists.\n";
                    } catch (PDOException $e) {
                        die("Error creating table: " . $e->getMessage());
                    }
                }
            }
        }
        
        // Usage
        $busBookingSystem = new BusBookingSystem();
        $busBookingSystem->createDatabase();
        $busBookingSystem->createTables();
        ?>        