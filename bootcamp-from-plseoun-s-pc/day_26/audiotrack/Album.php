<?php
class Author{

    public ?string $name = null;
    public ?Author $author = null;
    public ?string $lyrics = null;
    public ?string $otherStuffHeMade = null;
    public ?mixed $releaseDate = null;
    public ?mixed $albumImgURL = null;
    public ?bool $likes = null;

    public function releaseDate()
    {

    }

    public function displayProfileImg()
    {
        return $this->albumImgURL;
    }

    public function hideProfileImg()
    {
        return $this->albumImgURL == null;
    }
    public function rating()
    {
        return $this->album  = true;
    }

    // return the name of the album
    public function getAlbumName() : string
        {   // if there is a name property in the Album class
        return $this->album->name;
     }




}