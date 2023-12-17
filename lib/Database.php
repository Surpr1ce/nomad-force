<?php


class Database
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "nomad_force";
    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    )
    {
        if(!empty($host)) {
            $this->host = $host;
        }

        if(!empty($port)) {
            $this->port = $port;
        }

        if(!empty($username)) {
            $this->username = $username;
        }

        if(!empty($password)) {
            $this->password = $password;
        }

        if(!empty($dbName)) {
            $this->dbName = $dbName;
        }
        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            // set the PDO error mode to exception
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT * FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['page_name']] = $menuItem['url'];
        }

        return $finalMenu;
    }

    public function getStudioItems():array {
        $studio = [];
        $sql = "SELECT * FROM studio";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($data as $item) {
            $studio[] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'position' => $item['position'],
                'position_bg' => $item['position_bg'],
                'image' => $item['image']
            ];
        }
        return $studio;
    }

    public function getPortfolioItems():array {
        $portfolio = [];
        $sql = "SELECT * FROM portfolio";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        foreach ($data as $item) {
            $portfolio[] = [
                'id' => $item['id'],
                'title' => $item['title'],
                'text' => $item['text'],
                'text_bg' => $item['text_bg'],
                'image' => $item['image']
            ];
        }
        return $portfolio;
    }

    public function getLatThreeArticles():array {
        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
        $query = $this->connection->query($sql);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getArticle(int $id): array {
        $sql = "SELECT * FROM news WHERE id = ?";
        $query = $this->connection->prepare($sql);
        $query->execute([$id]);
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function getArticleParagraphs(int $articleID):array {
        $sql = "SELECT id AS p_id, text AS p_text FROM news_paragraph WHERE news_id = ?";
        $query = $this->connection->prepare($sql);
        $query->execute([$articleID]);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getArticles():array {
        $sql = "SELECT * FROM news";
        $query = $this->connection->query($sql);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deleteArticle(int $id):bool {
        $sql = "DELETE news_paragraph, news FROM news_paragraph INNER JOIN news ON news_paragraph.news_id = news.id WHERE news_paragraph.news_id = ?;";
        $query = $this->connection->prepare($sql);
        print_r($query);
        return $query->execute([$id]);
    }
}