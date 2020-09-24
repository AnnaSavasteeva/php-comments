<?php
// Users' comments

namespace Future\Users;

class Comments
extends \Future\Core\Entity
implements \Future\Interfaces\ShowComments
{
    protected function setTable() {
        return 'comments';
    }

    public function getAuthor() {
        return $this->getField('author');
    }

    public function getTime() {
        return $this->getField('time');
    }

    public function getDate() {
        return $this->getField('date');
    }

    public function getMessage() {
        return $this->getField('message');
    }
}
