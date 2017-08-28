<?php


class CommentModel
{
    const TABLE = "comments";
    private $id;
    private $name;
    private $comment;
    private $isModerated;
    private $createAt;
    private $updatedAt;

    public function __construct($comment = null, $name = null)
    {
        if ($name) {
            $this->name = $name;
        }

        if ($comment) {
            $this->comment = $comment;
        }

    }

    public static function find($id)
    {
        $query = "SELECT * FROM `" . self::TABLE . "` where `id` = $id LIMIT 1";
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $comment = DB::getInstance()->query($query)->fetch_assoc();
        if (!$comment) {
            return null;
        }

        $self = new self($comment['comment'], $comment['name']);
        $self->id = $comment["id"];
        $self->createAt = $comment["created_at"];
        $self->isModerated = $comment["is_moderated"];
        $self->updatedAt = $comment["updated_at"];
        return $self;
    }

    public static function getAll($isModerated = null)
    {

        $query = "SELECT * FROM `" . self::TABLE . "` ";

        if (!is_null($isModerated) && in_array((int)$isModerated, [0, 1])) {
            $query .= " WHERE `is_moderated` = '" . $isModerated . "'";
        }
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        return DB::getInstance()->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function setModerated($moderated)
    {
        $this->isModerated = $moderated;
        return $this;
    }

    public function save()
    {
        if ($this->id) {
            return $this->update();
        }

        return $this->create();
    }

    private function update()
    {
        $db = DB::getInstance();
        $this->updatedAt = time();
        $query = "
        UPDATE `" . self::TABLE . "` 
            SET `name` = '" . $this->name . "',
            `updated_at` = " . $this->updatedAt . ",
            `comment` = '" . $this->comment . "',
            `is_moderated` = '" . $this->isModerated . "' 
        WHERE `id` = " . $this->id . " LIMIT 1";
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);
        return (bool)$db->affected_rows;
    }

    private function create()
    {
        $this->updatedAt = $this->createAt = time();
        $this->isModerated = 0;
        $query = "
          INSERT INTO `" . self::TABLE . "` 
            SET `name` = '" . $this->name . "', 
            `created_at` = " . $this->createAt . ",
            `updated_at` = " . $this->updatedAt . ",
            `comment` = '" . $this->comment . "',
            `is_moderated` = '" . $this->isModerated . "'";

        $db = DB::getInstance();
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);

        if (!$id = $db->insert_id) {
            return false;
        }

        $this->id = $id;
        return true;
    }

    public function delete()
    {
        if (!$id = $this->id) {
            return false;
        }

        $query = "DELETE FROM `" . self::TABLE . "` WHERE `id` = " . $this->id . " LIMIT 1";
        $db = DB::getInstance();
        (new Logger(Logger::LOG_LEVEL_REQUEST, $query));
        $db->query($query);
        return (bool)$db->affected_rows;
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'is_moderated' => (bool)$this->isModerated,
            'created_at' => $this->createAt,
            'updated_at' => $this->updatedAt
        ];
    }


}