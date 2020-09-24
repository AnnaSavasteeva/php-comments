<?php

namespace Future\Interfaces;

interface ShowComments
{
    public function getAuthor();

    public function getTime();

    public function getDate();

    public function getMessage();
}
