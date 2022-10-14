<?php
class AudioTrack
{
    public int $id = null; //unique id from the database
    public string $source_url; // URL where the data stream should come from
    public ?string $name = null;
    public ?float $lenght = null; //in seconds
    public ?Author $author = null;
    public ?Album $album = null;
    public ?string $lyrics = null;

    // begins streaming the data
    public function startStream()
    {

    }

    // stops data streaming
    public function stopStream()
    {

    }

    // save informtion about this project into database
    public function save()
    {
        return 123; // returns a unique ID number that was given to us
                    // by the database when we inserted the record
    }

    // deletes the record from the databse
    public function delete() : string
    {
        return floor($this->length / 60) . ':' . $this->length % 60;
    }

    // return the name of the author
    public function getAuthorName() : string
    {   // if there is a name property in the Author class
        return $this->author->name;
    }
    
    //adds this to an Album at a given position
    public function addToAlbum(Album $album,  int $position)
    {
        $this->album = $album;
    }
}
$song->delete();