<?php
// Information about the company

namespace Future\Core;

class Company
extends \Future\Core\Entity
implements \Future\Interfaces\ShowCompanyInfo
{
    protected function setTable() {
        return 'future_group';
    }

    public function getPhone() {
        return $this->getField('phone');
    }

    public function getEmail() {
        return $this->getField('email');
    }

    public function getAddress() {
        return $this->getField('address');
    }

    public function getLogo() {
        return $this->getField('logo');
    }

    public function getCopyright() {
        return $this->getField('copyright');
    }
}
