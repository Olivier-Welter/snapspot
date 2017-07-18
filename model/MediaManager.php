<?php

require_once '../controller/autoload.php';

class MediaManager extends Model
{

    public function add(Media $media)
    {
        $q = $this->getDb()->prepare('INSERT INTO media(oldName, fileSize, pseudo, comment, event) VALUES(:oldName, :fileSize, :pseudo, :comment, :event)');

        $q->bindValue(':oldName', $media->oldName());
        $q->bindValue(':fileSize', $media->fileSize());
        $q->bindValue(':pseudo', $media->pseudo());
        $q->bindValue(':comment', $media->comment());
        $q->bindValue(':event', $media->event());
        $q->execute();

        $media = $this->get(intval($this->getDb()->lastInsertId()));
        $media->updateNewName($media);
        $this->update($media);
        $media->saveFile();
    }

    public function reset()
    {
        //deletion table media data
        $this->getDb()->exec('delete from media');
        //pictures and vignettes deletion
        $this->deleteMedias();
        //backup deletion
        $this->deleteBackup();
    }

    public function deleteMedias()
    {
        //deletion table media   
        $this->getDb()->exec('delete from media');
        array_map('unlink', glob(Media::MEDIA_PATH . '*'));
        array_map('unlink', glob(Media::VIGN_PATH . '*'));
    }

    public function deleteBackup()
    {
        array_map('unlink', glob(Media::BACK_PATH . '*'));
    }

    public function count()
    {
        return $this->getDb()->query('SELECT COUNT(*) FROM media')->fetchColumn();
    }

    public function delete(Media $media)
    {
        $this->getDb()->exec('DELETE FROM media WHERE id = ' . $media->mediaId());
    }

    public function get($info)
    {
        if (is_int($info)) {
            $q = $this->getDb()->query('SELECT mediaId, oldName, newName, fileSize, timestamp,pseudo, comment, event FROM media WHERE mediaId = ' . $info);
            $dataMedia = $q->fetch(PDO::FETCH_ASSOC);
            return new Media($dataMedia);
        } else {
            echo 'erreur de type d\'informations';
        }
    }

    public function getList()
    {
        $sql = 'select * from media';
        $medias = $this->executeRequest($sql);
        return $medias;
    }

    public function update(Media $media)
    {
        $q = $this->getDb()->prepare('UPDATE media SET newName = :newName, pseudo = :pseudo, comment = :comment WHERE mediaId = :mediaId');
        $q->bindValue(':mediaId', $media->mediaId(), PDO::PARAM_INT);
        $q->bindValue(':newName', $media->newName(), PDO::PARAM_STR);
        $q->bindValue(':pseudo', $media->pseudo(), PDO::PARAM_STR);
        $q->bindValue(':comment', $media->comment(), PDO::PARAM_STR);
        $q->execute();
    }

    public function checkMedia()
    {
        
        //Checking File tranfser
        if ($_FILES['my_file']['error'] > 0) {
            echo 'Erreur lors du transfert';
        } else {
            if (!in_array(strtolower(  substr(  strrchr($_FILES['my_file']['name'], '.')  ,1)  ), Media::EXT_VALID)) {
                exit('<h1>Extension non valide</h1>');
            } elseif (preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $_FILES['my_file']['name'])) {
                exit('<h1>Nom de fichier invalide</h1>');
            } else {
                $settings = new Settings();
                //manage files settings
                $media = new Media([
                    'oldName' => $_FILES["my_file"]["name"],
                    'fileSize' => $_FILES["my_file"]["size"],
                    'event' => $settings->getEvent()
                ]);
                $this->add($media);
                $media->updateNewName($mediaManager);
                header('location:index.php');
            }
        }
    }

}
