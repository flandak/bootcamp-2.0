<?php
class Author{

    public ?string $name = null;
    public ?Album $album = null;
    public ?string $lyrics = null;
    public ?string $otherStuffHeMade = null;
    public ?mixed $birthDate = null;
    public ?mixed $imgURL = null;

    public function getbirthDate()
    {

    }

    public function displayProfileImg()
    {
        return $this->imgURL;
    }





}