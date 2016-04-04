<?php

class Application_Model_DbTable_Artist extends Zend_Db_Table_Abstract
{

    protected $_name = 'albums';

    public function getAlbum($id){
    	$id = (int)$id;
    	$ow = $this->fetchRow('$id='.$id);
    	return $row->toArray();
    }
    
    public function addAlbum($artist, $title)
    {
        $data = array(
            'artist' => $artist,
            'title' => $title,
        );
        $this->insert($data);
    }

    public function updateAlbum($id, $artist, $title)
    {
        $data = array(
            'artist' => $artist,
            'title' => $title,
        );
        $this->update($data, 'id = '. (int)$id);
    }

    public function deleteAlbum($id)
    {
        $this->delete('id =' . (int)$id);
    }

}

