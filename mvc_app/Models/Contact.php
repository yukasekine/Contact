<?php
require_once(ROOT_PATH . 'Models/Db.php');

class Contact extends Db
{
    public function __construct($dbh = null)
    {
        parent::__construct($dbh);
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /** 
     * お問い合わせを作成する
     * 
     * @param string $name 氏名
     * @param string $kana フリガナ
     * @param string $tel 電話番号
     * @param string $email メールアドレス
     * @param string $body お問い合わせ内容
     * @return false|string 作成されたお問い合わせのIDまたは失敗時にfalseを返却
     */
    public function create(string $name, string $kana, string $tel, string $email, string $body)
    {
        try {
            $this->dbh->beginTransaction();
            $query = 'INSERT INTO contacts (name, kana, tel, email, body) VALUES (:name, :kana, :tel, :email, :body)';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            $stmt->execute();

            $lastId = $this->dbh->lastInsertId();
            $this->dbh->commit();
            return $lastId;
        } catch (PDOException $e) {
            $this->dbh->rollback();
            echo "登録失敗: " . $e->getMessage() . "\n";
            return false;
        }
    }

    /**
     * お問い合わせを取得する
     * 
     * @param int $id お問い合わせID
     * @return stdClass お問い合わせデータ
     */
    public function getById(int $id): stdClass
    {
        try {
            $query = 'SELECT * FROM contacts WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "取得失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }

    /**
     * 全てのお問い合わせを取得する
     * 
     * @return stdClass[] お問い合わせのデータを配列
     */
    public function getAll(): array
    {
        try {
            $query = 'SELECT * FROM contacts';
            $stmt = $this->dbh->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "取得失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }

    /**
     * お問い合わせを更新する
     * 
     * @param string $id お問い合わせのID
     * @param string $name 氏名
     * @param string $kana フリガナ
     * @param string $tel 電話番号
     * @param string $email メールアドレス
     * @param string $body お問い合わせ内容
     * @return bool 更新成功時にtrue、失敗の場合はfalseを返却
     */
    public function update(string $id, string $name, string $kana, string $tel, string $email, string $body): bool
    {
        try {
            $this->dbh->beginTransaction();
            $query = 'UPDATE contacts SET name = :name, kana = :kana, tel = :tel, email = :email, body = :body WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':kana', $kana, PDO::PARAM_STR);
            $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':body', $body, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $this->dbh->commit();
            return true;
        } catch (PDOException $e) {
            $this->dbh->rollBack();
            echo "更新失敗: " . $e->getMessage() . "\n";
            return false;
        }
    }

    /**
     * お問い合わせを削除する
     * 
     * @param string $id お問い合わせのID
     * @return void
     */
    public function delete(string $id)
    {
        try {
            $this->dbh->beginTransaction();
            $query = 'DELETE FROM contacts WHERE id = :id';
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $this->dbh->commit();

            header('Location: /contact/index');
            exit();
        } catch (PDOException $e) {
            $this->dbh->rollBack();
            echo "削除失敗: " . $e->getMessage() . "\n";
            exit();
        }
    }
}

