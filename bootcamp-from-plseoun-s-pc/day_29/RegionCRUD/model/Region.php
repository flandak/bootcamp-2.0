<?php
class Region
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $slag = null;

    public function insert(): void
{
   $query = "INSERT INTO `regions` (`name`, `slag`) VALUES(?,?)";
   //INSERT INTO  `regions` (`name`, `slug`) VALUES ('myRegion', 'sl')
   //INSERT INTO  regions (`name`, `slug`) VALUES ('a', 'b'); truncate
   insert($query, [$this->name, $this->slag]);
   $this->id = last_insert_id();
}
public function update(): bool
{
    if (is_null($this->id)) {
       return false;
    }
    $query = "UPDATE `regions` SET `name` =?, `slag` =? WHERE `id` = ?";
 update($query, [$this->name, $this->slag, $this->id]);

 return true;
 }
}


